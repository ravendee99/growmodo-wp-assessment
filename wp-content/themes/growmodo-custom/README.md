# Growmodo Custom – Estatein WordPress Theme

A custom classic WordPress theme built for the Growmodo WordPress Developer technical assessment. It implements the **Estatein** real estate design (Figma "Real Estate Business Website UI Template – Dark Theme") without page builders, plugins, or front-end libraries.

- **Live demo:** https://estatein-demo.infy.click
- **Theme directory:** `wp-content/themes/growmodo-custom/`

## Stack

- WordPress 7.1.3 (local development site, Local by Flywheel, PHP 8.2). The theme header declares WordPress 6.4+ and PHP 8.0+.
- Classic PHP templates using only core WordPress APIs
- One hand-written, mobile-first stylesheet (`style.css`) built on CSS custom properties, Flexbox, and Grid
- Vanilla JavaScript (`assets/js/navigation.js`); no jQuery and no build step
- The Urbanist font, loaded from Google Fonts, and assets exported from the Figma file

## Architecture

```
growmodo-custom/
├── style.css                Theme header plus all styles
├── functions.php            Theme setup, asset loading, helpers
├── header.php / footer.php  Shared banner, navigation, CTA, footer
├── front-page.php           Home
├── page-{slug}.php          About Us, Properties, Seaside Serenity Villa, Services, Contact Us
├── index.php                Fallback for posts, archives, and search
├── template-parts/          One file per section, grouped by page
└── assets/                  icons/, images/ (grouped by page), js/navigation.js
```

Each page template only calls `get_template_part()` for its sections, so every section lives in its own file.

`functions.php` registers the theme supports (title tag, custom logo, thumbnails, HTML5) and the `primary` and `footer` menu locations. It enqueues the font and the stylesheet, plus the deferred script, and defines three helpers:

- `growmodo_custom_image()` and `growmodo_custom_icon()` print escaped `<img>` tags with explicit dimensions. Images are lazy-loaded by default, and `fetchpriority` can be set where needed.
- `growmodo_custom_destination()` returns a page's permalink by slug. If the page doesn't exist, it falls back to an anchor on the home page.

## Implemented pages and features

| Page | Sections |
| --- | --- |
| Home | Hero with stats and feature cards, Featured Properties, Testimonials, FAQ |
| About Us | Journey, Values, Achievements, How It Works, Team, Clients |
| Properties | Search hero with filter chips, listing carousel, inquiry form |
| Seaside Serenity Villa | Gallery slideshow, inquiry form, pricing, FAQ |
| Services | Shortcut cards and three service sections |
| Contact Us | Contact cards, contact form, office tabs, photo gallery |

All pages share the announcement banner, the header, the CTA, and the footer.

These interactions are implemented in `navigation.js`:

- **Mobile menu:** uses `aria-expanded` and closes on Escape, on an outside click, or when the viewport widens to desktop.
- **Announcement banner:** can be dismissed and stays hidden for the browser session.
- **Carousels:** previous/next buttons scroll one card at a time.
- **Property cards:** "Read More" / "Read Less" toggles.
- **Villa gallery:** slideshow with dots and thumbnails.
- **Contact page:** office filter tabs.
- **Forms:** browser validation, then an on-page confirmation message.

## Content management

Page copy, cards, FAQs, and team and office details are defined as PHP arrays in the template parts, as translatable, escaped strings. This kept the build close to the design, but it means content edits require code changes.

From the admin you can manage:

- **Pages:** the template is selected by slug.
- **Primary menu:** a built-in fallback is used until a menu is assigned to the `primary` location.
- **Logo:** set through the Customizer.

## Responsive design

The stylesheet is mobile-first, with breakpoints at `40rem`, `48rem`, `64rem`, `80rem`, and `99.75rem`. Font sizes, spacing, and radii change at those breakpoints through CSS custom properties.

Layouts follow the Figma desktop (1920), laptop (1440), and mobile (390) frames. The content width is 1596px on desktop, 1280px on laptop, and full width minus 16px margins on mobile.

The shared header, CTA, and footer, and the Home page, have dedicated laptop and mobile styles. On mobile this includes a collapsible menu and a two-column footer link grid.

## Performance, SEO, and accessibility

- **Performance:** one stylesheet and one deferred script, both versioned from the theme version. Images have explicit dimensions, use lazy loading and async decoding, and the hero image uses `fetchpriority="high"`. Google Fonts gets `preconnect` hints.
- **SEO:** the document title comes from WordPress via `title-tag` support. Markup uses semantic landmarks and a heading hierarchy. The theme outputs no meta descriptions or structured data.
- **Accessibility:**
  - Skip link, labelled navigation, and `aria-current` on the active page
  - Screen-reader labels for icon-only buttons and for fields that show only a placeholder
  - `alt` text on content images, empty `alt` on decorative ones
  - Visible `:focus-visible` outlines
  - A `prefers-reduced-motion` fallback

## Local installation

1. Install WordPress 6.4 or newer, on PHP 8.0 or newer.
2. Copy `growmodo-custom` into `wp-content/themes/` and activate it.
3. Publish pages with the slugs `about-us`, `properties`, `seaside-serenity-villa`, `services`, and `contact-us`. Their content can stay empty.
4. Optional: set **Settings → Permalinks** to "Post name".

## Known limitations

- **Forms:** the contact, inquiry, and newsletter forms don't send or store anything. They only validate in the browser and show a preview message.
- **Property search:** submitting the search and the filter chips have no effect, and the listings are static.
- **Placeholders:** carousel counters ("01 of 60"), the FAQ "Read More" buttons, "Get Direction", "Visit Website", and the social links are static or non-functional.
- **Content model:** there's no property post type and no custom fields. Only the Seaside Serenity Villa detail page exists.
- **Footer menu:** the `footer` location is registered, but the footer links are hard-coded.
- **Headings:** the About page has no `h1`; it opens with an `h2`, as in the design.
- **Responsive work:** About, Properties, Villa, Services, and Contact still need their section-level laptop and mobile refinement.
