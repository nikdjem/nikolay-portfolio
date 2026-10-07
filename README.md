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
| Build Focus | — | Build scope tiles (replaced Testimonials in Phase 10) |
| Contact | `#contact` | REST-powered contact form |

**Brand:** NIKWEB.EU  
**Primary CTA:** Hire Me  
**Theme version:** 0.1.5
**Production URL:** [https://nikweb.eu](https://nikweb.eu) — theme, companion plugin, and six portfolio projects **ACTIVE**

## Tech Stack

- WordPress 7.0+ (Full Site Editing)
- PHP 8.1+
- Block patterns + `theme.json` design tokens
- Space Grotesk (self-hosted)
- Companion plugin: [`nikolay-portfolio-projects`](https://github.com/nikdjem/nikolay-portfolio-projects) v1.0.2 (`project` CPT) — separate repository

## Production Status

| Item | Status |
|------|--------|
| WordPress at [nikweb.eu](https://nikweb.eu) | **ACTIVE** |
| Theme code deployment (cPanel Git) | **COMPLETE** (`327ffec`) |
| Companion plugin deployment | **COMPLETE** (separate repo) |
| Project CPT on production | **VERIFIED** |
| Six portfolio projects on production | **COMPLETE** |
| Database / media migration | **COMPLETE** (custom migration package + AIOWM restore) |
| Production visual verification | **COMPLETE** |
| GitHub → cPanel → Production code deploy | **VERIFIED** (Phase 13, 2026-09-19) |
| Production performance verification | **PASS** (Phase 13 — TTFB ~110 ms, HTML ~144 ms) |
| Back to Top footer control | **COMPLETE** (production verified, 2026-10-07) |

## Production Deployment Workflow

**Code** (theme, companion plugin, PHP, CSS, JS, templates, patterns):

```
LocalWP → Git commit → GitHub → cPanel Git → Production
```

**Content** (projects, pages, categories, meta, settings managed in admin):

```
WordPress Admin → Production Database
```

**Media** (featured images, uploads):

```
WordPress Media Library → Production uploads
```

**All-in-One WP Migration (AIOWM):** backup / migration / restore utility only — not part of the normal code deployment workflow and not required for day-to-day project or theme updates.

Normal content changes (add, edit, or remove a project) are made in **WordPress Admin** on production. They do **not** require a GitHub commit or an AIOWM export/import.

See [PROJECT-DOCUMENTATION.md](./PROJECT-DOCUMENTATION.md) Phases 12–13 for the full production architecture, migration record, and verified deployment workflow.

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

Production theme files deploy through cPanel Git using `.cpanel.yml` (see [PROJECT-DOCUMENTATION.md](./PROJECT-DOCUMENTATION.md) Phases 12–13). Project content and media are managed on production through WordPress Admin.

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
