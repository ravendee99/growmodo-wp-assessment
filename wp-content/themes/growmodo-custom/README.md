# Growmodo Custom – Estatein WordPress Theme

A custom classic WordPress theme built for the Growmodo WordPress Developer technical assessment. It recreates the **Estatein** real estate design (Figma "Real Estate Business Website UI Template – Dark Theme") as a hand-coded theme with no page builder, no plugins, and no front-end libraries.

- **Live demo:** https://estatein-demo.infy.click
- **Theme directory:** `wp-content/themes/growmodo-custom/`

## Technologies and tools

- WordPress (classic PHP theme), developed locally on WordPress 7.1 and PHP 8.2 with Local by Flywheel
- PHP templates and template parts using core WordPress APIs only
- A single hand-written stylesheet (`style.css`) using CSS custom properties, Flexbox, and Grid
- Vanilla JavaScript (`assets/js/navigation.js`), with no jQuery or build step
- Urbanist font from Google Fonts
- Figma Dev Mode as the design reference; images and icons were exported from the Figma file

## Theme architecture

```
growmodo-custom/
├── style.css                  Theme header plus all styles (mobile-first)
├── functions.php              Setup, asset loading, and helper functions
├── header.php / footer.php    Shared header, navigation, CTA, and footer
├── front-page.php             Home page
├── page-{slug}.php            About Us, Properties, Seaside Serenity Villa, Services, Contact Us
├── index.php                  Fallback for posts, archives, and search
├── template-parts/            One file per page section, grouped by page
│   ├── about/  contact/  properties/  property/  services/
│   └── hero, featured-properties, testimonials, faq, cta, property-card, ...
└── assets/
    ├── icons/                 SVG icons
    ├── images/                Page imagery and decorative SVGs, grouped by page
    └── js/navigation.js       All front-end interactions
```

Each page template only assembles its sections with `get_template_part()`, so every section stays in its own file. `functions.php` registers the theme supports (title tag, custom logo, post thumbnails, HTML5 markup, responsive embeds) and the `primary` and `footer` menu locations. It also enqueues the font, stylesheet, and script, and defines three small helpers:

- `growmodo_custom_image()` and `growmodo_custom_icon()` print escaped `<img>` tags with explicit width and height. They lazy-load by default and can mark a hero image with `fetchpriority`.
- `growmodo_custom_destination()` resolves a page permalink by slug and falls back to a home-page anchor when that page doesn't exist, so internal links don't break on a fresh install.

## Implemented pages and features

| Page | Sections |
| --- | --- |
| Home | Hero with stats and feature cards, Featured Properties, Testimonials, FAQ |
| About Us | Our Journey, Our Values, Our Achievements, How It Works steps, Team, Valued Clients |
| Properties | Search hero with filter chips, property listing carousel, inquiry form |
| Seaside Serenity Villa | Photo gallery slideshow, inquiry form, pricing details, property FAQ |
| Services | Service shortcut cards and three service sections with CTA cards |
| Contact Us | Contact method cards, contact form, office tabs, photo gallery |

Every page shares the announcement banner, the header, the "Start Your Real Estate Journey Today" CTA, and the footer.

Working interactions, all in `navigation.js`:

- A mobile menu toggle that updates `aria-expanded` and closes on Escape, on an outside click, or when the viewport reaches desktop width
- A dismissible announcement banner that stays hidden for the browser session (`sessionStorage`)
- Carousels with previous/next buttons that scroll one card at a time and disable themselves at either end
- "Read More" / "Read Less" toggles on the property card descriptions
- The property gallery slideshow, with page dots and thumbnails
- Office filter tabs on the Contact page (All, Regional, International)
- Browser validation on every form, followed by an on-page confirmation message

## Content management approach

The page content (copy, cards, testimonials, FAQs, team members, office details) is defined as PHP arrays inside each template part and wrapped in translatable, escaped strings (`esc_html_e()`, `__()`, `esc_url()`, `esc_attr()`). That kept the build close to the design and quick to ship, but it means content changes need code edits, not the WordPress editor.

What *is* manageable from the admin:

- **Pages:** each page is a regular WordPress page, and its template is chosen by slug.
- **Primary navigation:** a menu assigned to the `primary` location replaces the built-in fallback menu.
- **Logo:** a custom logo set in the Customizer replaces the default SVG.

## Responsive design

The stylesheet is mobile-first, with breakpoints at `40rem`, `48rem`, `64rem`, `80rem`, and `99.75rem`. Shared values such as font sizes, spacing, and radii live in CSS custom properties and change at those breakpoints.

The layouts follow the Figma frames at 1920px (desktop), 1440px (laptop), and 390px (mobile). The content width is 1596px on desktop and 1280px on laptop, with 16px side margins on mobile. The header, CTA, and footer have dedicated laptop and mobile layouts that apply on every page. On mobile that includes a collapsible menu and a two-column footer link grid. The Home page has also been checked section by section against the laptop and mobile frames. I checked every page for horizontal overflow at 390px, 1440px, and 1920px.

## Performance, SEO, and accessibility

**Performance:** the front end loads one stylesheet and one deferred script, with no jQuery or third-party libraries. Both assets are versioned from the theme version for cache busting. Images carry explicit dimensions, load lazily unless they're above the fold, and decode asynchronously. The hero image uses `fetchpriority="high"`. The theme adds `preconnect` hints for Google Fonts.

**SEO:** WordPress manages the document title via `title-tag` support. Pages use a heading hierarchy with one `h1` on Home, Properties, the villa page, Services, and Contact. The markup uses semantic landmarks (`header`, `nav`, `main`, `section`, `footer`). The theme does not output meta descriptions or structured data; that is left to an SEO plugin.

**Accessibility:**

- A skip link, labelled navigation regions, and `aria-current` on the active page
- Screen-reader text for icon-only buttons and for form fields that only show a placeholder visually
- Descriptive `alt` text on content images; decorative images have an empty `alt`
- Visible `:focus-visible` outlines
- Smooth scrolling and transitions turn off under `prefers-reduced-motion`

## Local installation

1. Install WordPress (6.4 or newer, PHP 8.0 or newer). Local by Flywheel works well.
2. Copy `growmodo-custom` into `wp-content/themes/` and activate it under **Appearance → Themes**.
3. Create published pages with these slugs: `about-us`, `properties`, `seaside-serenity-villa`, `services`, and `contact-us`. The page content can stay empty, since the templates are selected by slug.
4. Optional: under **Settings → Reading**, set a static front page. `front-page.php` renders the home page in either case.
5. Optional: set **Settings → Permalinks** to "Post name" for clean URLs.

## Known limitations

- **Forms don't send data.** The contact, property inquiry, and newsletter forms validate in the browser and then show a "this preview does not send…" message. Nothing is emailed or stored.
- **Property search is visual only.** Submitting the search does nothing, and the filter chips don't filter. The listings are static.
- **Static placeholders:** the carousel counters (for example "01 of 60") don't change. The FAQ "Read More", "Get Direction", "Visit Website", and social links are placeholders.
- **No content model.** There is no custom post type for properties and no custom fields, so all content lives in the template files.
- **One detail page.** Only the Seaside Serenity Villa page is built; other property cards link to it or to the Properties page.
- **About Us has no `h1`.** It opens with the "Our Journey" `h2`, as in the design.
- **Footer menu location unused.** The `footer` location is registered, but the footer links are hard-coded to match the design.
- **Responsive review in progress.** Of the inner pages, only the shared header, CTA, and footer have been reviewed against the laptop and mobile frames. About, Properties, the villa page, Services, and Contact are still pending their own section-by-section review.
