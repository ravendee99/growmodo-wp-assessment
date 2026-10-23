/**
 * Header, FAQ, carousel, and footer interactions.
 */
( function () {
	var desktopQuery = window.matchMedia( '(min-width: 48rem)' );
	var motionQuery = window.matchMedia( '(prefers-reduced-motion: reduce)' );

	var toggle = document.querySelector( '.menu-toggle' );
	var navigation = document.getElementById( 'site-navigation' );

	function setMenuOpen( isOpen ) {
		if ( ! toggle || ! navigation ) {
			return;
		}

		toggle.setAttribute( 'aria-expanded', isOpen ? 'true' : 'false' );
		navigation.classList.toggle( 'is-open', isOpen );
	}

	if ( toggle && navigation ) {
		toggle.addEventListener( 'click', function () {
			setMenuOpen( toggle.getAttribute( 'aria-expanded' ) !== 'true' );
		} );

		document.addEventListener( 'keydown', function ( event ) {
			if ( event.key === 'Escape' && toggle.getAttribute( 'aria-expanded' ) === 'true' ) {
				setMenuOpen( false );
				toggle.focus();
			}
		} );

		document.addEventListener( 'click', function ( event ) {
			if ( toggle.getAttribute( 'aria-expanded' ) !== 'true' ) {
				return;
			}

			if ( navigation.contains( event.target ) || toggle.contains( event.target ) ) {
				return;
			}

			setMenuOpen( false );
		} );

		desktopQuery.addEventListener( 'change', function ( event ) {
			if ( event.matches ) {
				setMenuOpen( false );
			}
		} );
	}

	var announcement = document.querySelector( '[data-announcement]' );
	var announcementClose = document.querySelector( '[data-announcement-close]' );

	if ( announcement && announcementClose ) {
		try {
			if ( window.sessionStorage.getItem( 'growmodo-banner' ) === 'hidden' ) {
				announcement.hidden = true;
			}
		} catch ( error ) {
			announcement.hidden = false;
		}

		announcementClose.addEventListener( 'click', function () {
			announcement.hidden = true;

			try {
				window.sessionStorage.setItem( 'growmodo-banner', 'hidden' );
			} catch ( error ) {
				return;
			}
		} );
	}

	document.querySelectorAll( '[data-expand]' ).forEach( function ( button ) {
		button.addEventListener( 'click', function () {
			var excerpt = document.getElementById( button.getAttribute( 'aria-controls' ) );

			if ( ! excerpt ) {
				return;
			}

			var expanded = button.getAttribute( 'aria-expanded' ) === 'true';
			excerpt.textContent = expanded ? excerpt.getAttribute( 'data-short' ) : excerpt.getAttribute( 'data-full' );
			button.setAttribute( 'aria-expanded', expanded ? 'false' : 'true' );
			button.textContent = expanded ? button.getAttribute( 'data-label-more' ) : button.getAttribute( 'data-label-less' );
		} );
	} );

	document.querySelectorAll( '[data-carousel]' ).forEach( function ( carousel ) {
		var track = carousel.querySelector( '.carousel__track' );
		var previous = carousel.querySelector( '[data-carousel-prev]' );
		var next = carousel.querySelector( '[data-carousel-next]' );

		if ( ! track || ! previous || ! next ) {
			return;
		}

		function stepSize() {
			var cards = track.children;

			if ( cards.length > 1 ) {
				var stride = cards[1].getBoundingClientRect().left - cards[0].getBoundingClientRect().left;

				if ( stride > 1 ) {
					return stride;
				}
			}

			var card = track.firstElementChild;

			if ( ! card ) {
				return track.clientWidth;
			}

			var styles = window.getComputedStyle( track );
			var cardStyles = window.getComputedStyle( card );
			var gap = parseFloat( styles.columnGap || styles.gap ) || 0;
			var margin = ( parseFloat( cardStyles.marginLeft ) || 0 ) + ( parseFloat( cardStyles.marginRight ) || 0 );

			return card.getBoundingClientRect().width + gap + margin;
		}

		function updateControls() {
			var maxScroll = track.scrollWidth - track.clientWidth;

			previous.disabled = track.scrollLeft <= 24;
			next.disabled = maxScroll <= 24 || track.scrollLeft >= maxScroll - 24;
		}

		function scrollByCard( direction ) {
			var maxScroll = Math.max( 0, track.scrollWidth - track.clientWidth );
			var target = track.scrollLeft + direction * stepSize();

			track.scrollTo( {
				left: Math.max( 0, Math.min( maxScroll, target ) ),
				behavior: motionQuery.matches ? 'auto' : 'smooth',
			} );
		}

		previous.addEventListener( 'click', function () {
			scrollByCard( -1 );
		} );

		next.addEventListener( 'click', function () {
			scrollByCard( 1 );
		} );

		track.addEventListener( 'scroll', updateControls, { passive: true } );
		window.addEventListener( 'resize', updateControls );
		updateControls();
	} );

	document.querySelectorAll( '[data-slideshow]' ).forEach( function ( gallery ) {
		var slides;

		try {
			slides = JSON.parse( gallery.getAttribute( 'data-slides' ) || '[]' );
		} catch ( error ) {
			return;
		}

		var stage = gallery.querySelector( '.detail-photos' );
		var photos = stage ? Array.prototype.slice.call( stage.querySelectorAll( '.detail-photo img' ) ) : [];
		var previous = gallery.querySelector( '[data-slideshow-prev]' );
		var next = gallery.querySelector( '[data-slideshow-next]' );
		var dots = gallery.querySelector( '[data-slideshow-dots]' );
		var thumbs = Array.prototype.slice.call( gallery.querySelectorAll( '[data-slide]' ) );
		var thumbTrack = gallery.querySelector( '.detail-thumbs' );
		var wideQuery = window.matchMedia( '(min-width: 48rem)' );
		var page = 0;
		var focusSlide = 0;

		if ( ! slides.length || ! photos.length || ! previous || ! next || ! dots ) {
			return;
		}

		function perPage() {
			return photos.length > 1 && wideQuery.matches ? photos.length : 1;
		}

		function pageCount() {
			return Math.max( 1, Math.ceil( slides.length / perPage() ) );
		}

		function render() {
			var size = perPage();
			var count = pageCount();

			page = Math.max( 0, Math.min( page, count - 1 ) );

			var start = page * size;
			var activeIndex = focusSlide;

			if ( activeIndex < start || activeIndex >= start + size || ! gallery.querySelector( '[data-slide="' + activeIndex + '"]' ) ) {
				activeIndex = start;

				while ( activeIndex < start + size && ! gallery.querySelector( '[data-slide="' + activeIndex + '"]' ) ) {
					activeIndex += 1;
				}
			}

			photos.forEach( function ( image, index ) {
				var frame = image.closest( '.detail-photo' );
				var slide = index < size ? slides[ start + index ] : null;

				if ( ! slide || ! frame ) {
					if ( frame ) {
						frame.classList.add( 'is-hidden' );
					}
					return;
				}

				frame.classList.remove( 'is-hidden' );

				if ( image.getAttribute( 'src' ) !== slide.src ) {
					image.src = slide.src;
					image.alt = slide.alt || '';
				}
			} );

			previous.disabled = page <= 0;
			next.disabled = page >= count - 1;

			dots.replaceChildren();

			for ( var dotIndex = 0; dotIndex < count; dotIndex++ ) {
				var dot = document.createElement( 'button' );
				dot.type = 'button';
				dot.dataset.page = String( dotIndex );
				dot.setAttribute( 'aria-label', 'Show photo group ' + ( dotIndex + 1 ) );

				if ( dotIndex === page ) {
					dot.className = 'is-active';
					dot.setAttribute( 'aria-current', 'true' );
				}

				dot.addEventListener( 'click', function ( event ) {
					page = Number( event.currentTarget.dataset.page );
					focusSlide = page * perPage();
					render();
				} );

				dots.appendChild( dot );
			}

			thumbs.forEach( function ( thumb ) {
				var slideIndex = Number( thumb.getAttribute( 'data-slide' ) );
				var active = slideIndex === activeIndex;

				thumb.classList.toggle( 'is-active', active );
				thumb.setAttribute( 'aria-current', active ? 'true' : 'false' );

				if ( active && thumbTrack ) {
					var target = thumb.offsetLeft - ( thumbTrack.clientWidth - thumb.offsetWidth ) / 2;

					thumbTrack.scrollTo( {
						left: Math.max( 0, target ),
						behavior: motionQuery.matches ? 'auto' : 'smooth',
					} );
				}
			} );
		}

		previous.addEventListener( 'click', function () {
			page -= 1;
			focusSlide = Math.max( 0, page ) * perPage();
			render();
		} );

		next.addEventListener( 'click', function () {
			page += 1;
			focusSlide = page * perPage();
			render();
		} );

		thumbs.forEach( function ( thumb ) {
			thumb.addEventListener( 'click', function () {
				focusSlide = Number( thumb.getAttribute( 'data-slide' ) );
				page = Math.floor( focusSlide / perPage() );
				render();
			} );
		} );

		wideQuery.addEventListener( 'change', render );
		render();
	} );

	document.querySelectorAll( '[data-office-tabs]' ).forEach( function ( tabs ) {
		var buttons = tabs.querySelectorAll( '[data-office-filter]' );
		var cards = document.querySelectorAll( '[data-office]' );

		buttons.forEach( function ( button ) {
			button.addEventListener( 'click', function () {
				var filter = button.getAttribute( 'data-office-filter' );

				buttons.forEach( function ( item ) {
					item.setAttribute( 'aria-selected', item === button ? 'true' : 'false' );
				} );

				cards.forEach( function ( card ) {
					var group = card.getAttribute( 'data-office' );
					card.classList.toggle( 'is-hidden', 'all' !== filter && group !== filter );
				} );
			} );
		} );
	} );

	document.querySelectorAll( '.property-search' ).forEach( function ( form ) {
		form.addEventListener( 'submit', function ( event ) {
			event.preventDefault();
		} );
	} );

	document.querySelectorAll( '.inquiry, .detail-form' ).forEach( function ( form ) {
		form.addEventListener( 'submit', function ( event ) {
			event.preventDefault();

			if ( ! form.checkValidity() ) {
				form.reportValidity();
				return;
			}

			var status = form.querySelector( '.inquiry__status, .detail-form__status' );

			if ( status ) {
				status.hidden = false;
				status.textContent = form.getAttribute( 'data-status' ) || '';
			}
		} );
	} );

	document.querySelectorAll( '.subscribe' ).forEach( function ( form ) {
		form.addEventListener( 'submit', function ( event ) {
			event.preventDefault();

			var status = form.querySelector( '.subscribe__status' );
			var input = form.querySelector( 'input[type="email"]' );

			if ( ! input || ! input.checkValidity() ) {
				input.reportValidity();
				return;
			}

			if ( status ) {
				status.hidden = false;
				status.textContent = form.getAttribute( 'data-status' ) || '';
			}

			form.reset();
		} );
	} );
}() );
