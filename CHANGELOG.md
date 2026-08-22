# Changelog

All notable changes to the **NIKWEB.EU Portfolio** WordPress theme are documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Documentation

- Reconstructed and documented Phases 01–06 in `PROJECT-DOCUMENTATION.md`.
- Documented the evolution from Stitch wireframe and final design to Cursor implementation.
- Documented FSE/Gutenberg architecture, layer responsibilities, and project content model.
- Documented responsive navigation issues and solutions (committed and uncommitted).
- Documented the distinction between committed GitHub state (`53e66a1` code baseline, `36624f2` docs) and current local refinements included in this release.
- Established Phase 07 (Real Projects & Case Study Architecture) as the next development phase — **NOT STARTED**.

### Added

- Initial project documentation structure (commit `36624f2`):
  - `PROJECT-DOCUMENTATION.md` — long-form phase-based project record
  - `CHANGELOG.md` — release and change history
  - `README.md` — public-facing project overview
- NIKWEB.EU frontend site title branding via `render_block_core/site-title` filter (`functions.php`).
- GitHub Repository CTA button in About section (`patterns/about.php`).
- Scroll-based header transparency with `is-scrolled` class (`assets/js/navigation.js`, `style.css`).
- Hamburger ↔ X toggle on mobile with accessible `aria-label` updates (`assets/js/navigation.js`, `style.css`).

### Changed

- Navigation order: **About → Work → Stack → Contact**; desktop Hire Me unchanged (`parts/header.html`).
- Mobile navigation: centered links at 28px font size (`style.css`).
- Glass header effect moved to `::before` pseudo-element for correct mobile overlay positioning (`style.css`).
- Hero, About, and Projects image treatments refined (`style.css`).
- Contact form border and focus styling refined (`style.css`).

### Fixed

- Mobile navigation overlay visibility — resolved containing-block trap from `backdrop-filter` on header element (`style.css`).
- Mobile Hire Me button hidden from navigation overlay on viewports ≤767px (`style.css`).

### Removed

- About section experience stat badge (`patterns/about.php`, `style.css`).

---

## [0.1.3] — Theme baseline (committed code through `53e66a1`)

Existing theme features at last code commit:

- WordPress 7.0 FSE block theme with Amethyst Monolith design system
- Homepage patterns: Hero, About, Projects, Stack, Testimonials, Contact
- Fixed glass header with responsive Navigation block (768px breakpoint)
- Query Loop project cards (`project` CPT via companion plugin)
- Contact form REST endpoint with nonce, honeypot, and rate limiting
- Stylesheet enqueue fix for block theme (`f8d16f4`)

---

[Unreleased]: https://github.com/nikdjem/nikolay-portfolio/compare/36624f2...HEAD
