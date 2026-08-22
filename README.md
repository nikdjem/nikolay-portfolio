# NIKWEB.EU Portfolio

Custom WordPress **Full Site Editing (FSE)** block theme for the [NIKWEB.EU](https://github.com/nikdjem/nikolay-portfolio) developer portfolio.

Built with WordPress 7.0, block patterns, and a token-driven design system — **The Amethyst Monolith**: a dark, editorial, tech-forward visual identity with sharp geometry, Space Grotesk typography, and amethyst violet accents.

## Overview

Single-page portfolio homepage with anchored sections:

| Section | Anchor | Description |
|---------|--------|-------------|
| Hero | — | Full-bleed cover with display heading and CTAs |
| About | `#about` | Bio, image, GitHub link |
| Work | `#work` | Project Query Loop (3-column cards) |
| Stack | `#stack` | Technology grid |
| Testimonials | — | Client quotes |
| Contact | `#contact` | REST-powered contact form |

**Brand:** NIKWEB.EU  
**Primary CTA:** Hire Me  
**Theme version:** 0.1.3

## Tech Stack

- WordPress 7.0+ (Full Site Editing)
- PHP 8.1+
- Block patterns + `theme.json` design tokens
- Space Grotesk (self-hosted)
- Companion plugin: `nikolay-portfolio-projects` (`project` CPT)

## Repository Structure

```
├── assets/          Fonts, images, navigation.js
├── design/          Stitch wireframe + final design reference
├── parts/           Header and footer template parts
├── patterns/        Homepage section block patterns
├── templates/       front-page.html, index.html
├── theme.json       Design tokens and global styles
├── style.css        Section-specific CSS (effects, hover, responsive)
└── functions.php    Theme setup, filters, REST routes
```

## Local Development

1. Clone the repository into `wp-content/themes/nikolay-portfolio`.
2. Activate the theme in WordPress.
3. Install and activate the `nikolay-portfolio-projects` companion plugin for Work section content.
4. Set a static front page using the `front-page` template (or let WordPress use `front-page.html` automatically).

## Documentation

| File | Purpose |
|------|---------|
| [PROJECT-DOCUMENTATION.md](./PROJECT-DOCUMENTATION.md) | Full project record, phases, architecture, and design tokens |
| [CHANGELOG.md](./CHANGELOG.md) | Version history and unreleased changes |
| [design/final/DESIGN.md](./design/final/DESIGN.md) | Amethyst Monolith design system reference |

## Design Principles

- **Tokens first** — colors, type, and spacing in `theme.json`
- **Zero radius** — brutalist sharp corners throughout
- **Tonal depth** — surface layering instead of borders
- **Grayscale imagery** — color reveal on hover
- **768px breakpoint** — primary desktop/mobile navigation cutoff

## License

GNU General Public License v2 or later. See [style.css](./style.css) header for full license text.

## Author

Nikolay — [GitHub](https://github.com/nikdjem)
