# Changelog

All notable changes to the **NIKWEB.EU Portfolio** WordPress theme are documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Added

- Project #4 **WooCommerce Checkout Simplifier** case study in WordPress (post ID 20) — Phase 09.6E.2H.
- Phase 09.6E documentation in `PROJECT-DOCUMENTATION.md` — legacy Field Remover → Checkout Simplifier 2.0.0 evolution.
- Six real project portfolio content entries in WordPress (`project` CPT) — Phase 08.2.
- Six Featured Images via WordPress Media Library (not in theme repository) — Phase 08.3.
- Phase 07 discovery and project selection documentation in `PROJECT-DOCUMENTATION.md`.
- Six-project content specification (Phase 07.3) — WORK card requirements, excerpts, categories, status labels.
- Reusable 14-section case-study specification and content length guidelines.
- Phase 08.1 content implementation preflight documentation.

### Changed

- Documented Project #4 evolution from legacy **WooCommerce Field Remover** to native **Checkout Simplifier 2.0.0** architecture.
- Documented Phase 09 case-study migration progress: Projects 1–4 complete; 5–6 pending.
- Updated repository state and phase index: Phase 09 in progress (not Phase 08-only baseline).
- WORK Query Loop expanded from 3 to 6 projects (`831c870`).
- WORK section copy replaced with production portfolio language (`4b6a02c`).
- Responsive project card alignment refined for desktop and tablet 3-column layouts (`831c870`).
- Project portfolio direction from fictional placeholders to six approved real GitHub projects.

### Verified

- Block Checkout functional verification for Project #4 plugin (WooCommerce 11.0.1, `vibe-shoplocal.local`) — Phase 09.6E.2D.
- Final visual QA for Project #4 portfolio case study — Phase 09.6E.2I **PASS**.

### Completed

- Phase 09.6E — WooCommerce Checkout Simplifier (Project #4): plugin redesign, verification, release, portfolio migration, visual QA.
- Phase 08 WORK implementation — content, images, grid, alignment, copy, final QA.
- Final WORK section QA — desktop, tablet, mobile validation (Phase 08.7 — PASS).
- Claim-safety validation for all six project entries.

### Next

- Phase 09 — Single Project / Case Study Architecture (**in progress**).
- Project 5 — Barcode Generator & Reader case study (**not started**).
- Project 6 — EcoWriter AI Agent case study (**not started**).

### Removed

- Fictional projects removed from published portfolio (SynthPress Engine, Lumina Commerce, Neural Blocks trashed; Translation Agency never present).

### Documentation (Phases 01–06)

- Reconstructed and documented Phases 01–06 in `PROJECT-DOCUMENTATION.md`.
- Documented the evolution from Stitch wireframe and final design to Cursor implementation.
- Documented FSE/Gutenberg architecture, layer responsibilities, and project content model.
- Documented responsive navigation issues and solutions (committed in `886bdcb`).

### Added (Phase 06 — commit `886bdcb`)

- NIKWEB.EU frontend site title branding via `render_block_core/site-title` filter (`functions.php`).
- GitHub Repository CTA button in About section (`patterns/about.php`).
- Scroll-based header transparency with `is-scrolled` class (`assets/js/navigation.js`, `style.css`).
- Hamburger ↔ X toggle on mobile with accessible `aria-label` updates (`assets/js/navigation.js`, `style.css`).

### Changed (Phase 06 — commit `886bdcb`)

- Navigation order: **About → Work → Stack → Contact**; desktop Hire Me unchanged (`parts/header.html`).
- Mobile navigation: centered links at 28px font size (`style.css`).
- Glass header effect moved to `::before` pseudo-element for correct mobile overlay positioning (`style.css`).
- Hero, About, and Projects image treatments refined (`style.css`).
- Contact form border and focus styling refined (`style.css`).

### Fixed (Phase 06 — commit `886bdcb`)

- Mobile navigation overlay visibility — resolved containing-block trap from `backdrop-filter` on header element (`style.css`).
- Mobile Hire Me button hidden from navigation overlay on viewports ≤767px (`style.css`).

### Removed (Phase 06 — commit `886bdcb`)

- About section experience stat badge (`patterns/about.php`, `style.css`).

---

## [0.1.3] — Theme baseline (committed code through `886bdcb`)

Existing theme features at last code commit:

- WordPress 7.0 FSE block theme with Amethyst Monolith design system
- Homepage patterns: Hero, About, Projects, Stack, Testimonials, Contact
- Fixed glass header with responsive Navigation block (768px breakpoint)
- Query Loop project cards (`project` CPT via companion plugin)
- Contact form REST endpoint with nonce, honeypot, and rate limiting
- Stylesheet enqueue fix for block theme (`f8d16f4`)
- Phase 06 visual refinements: navigation, branding, About CTA, image treatments (`886bdcb`)

---

## Phase 08 WORK commits

| Commit | Message |
|--------|---------|
| `831c870` | `feat(work): expand project grid to six` |
| `4b6a02c` | `feat(work): update project section copy` |

---

[Unreleased]: https://github.com/nikdjem/nikolay-portfolio/compare/4b6a02c...HEAD
