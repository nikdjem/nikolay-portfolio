# Changelog

All notable changes to the **NIKWEB.EU Portfolio** WordPress theme are documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Added

- Phase 07 discovery and project selection documentation in `PROJECT-DOCUMENTATION.md`.
- Six-project content specification (Phase 07.3) — WORK card requirements, excerpts, categories, status labels.
- Reusable 14-section case-study specification and content length guidelines.
- Phase 08.1 content implementation preflight documentation (read-only audit findings).
- Phase 08 section — planned implementation sequence and readiness boundaries.

### Changed

- Project portfolio direction from fictional placeholders to six approved real GitHub projects.
- Documentation phase index updated: Phase 07 complete; Phase 08 ready — implementation not started.
- Phase 08 established as the next implementation phase.
- Repository state documentation updated to baseline `886bdcb` (Phase 06 refinements committed).

### Removed

- No source or database content removed yet (placeholder project removal deferred to Phase 08).

### Status

- Phase 07: **COMPLETE** — discovery and architecture documented.
- Phase 08.1: **COMPLETE** — read-only preflight audit.
- Phase 08 implementation: **NOT STARTED**.

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

[Unreleased]: https://github.com/nikdjem/nikolay-portfolio/compare/886bdcb...HEAD
