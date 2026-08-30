# Changelog

All notable changes to the **NIKWEB.EU Portfolio** WordPress theme are documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Phase 10 — Homepage & Portfolio Refinement

**Status: COMPLETE — Homepage frozen (Phase 10.7)**

Scope: Hero → About → Work → Stack → Build Focus → Contact → Footer

#### Added

- **Build Focus** homepage section — eyebrow Build Scope, H2 BUILDING FOR THE WEB, four label-only tiles (WordPress Plugins, WooCommerce Extensions, FSE Block Themes, AI Automations), and approved summary line (`patterns/build-focus.php`).
- Build Focus CSS — scoped `.np-build-focus` grid and Stack-matched card chrome in `style.css`.
- Stack **Exploring** line — `Exploring: n8n · Claude · Vibe Coding` (exploratory/future direction; not production service claims).
- About third paragraph documenting future exploratory direction (AI, Vibe Coding, n8n, Claude applied to WordPress/WooCommerce workflows).

#### Changed

- Hero chip — PHP · GUTENBERG · WOOCOMMERCE (replacing Pre-Phase 10 sci-fi chip).
- Hero body — grounded WordPress engineering copy; AI-assisted drafting noted as side prototype.
- Hero CTAs — **Start a Project** (`#contact`) and **View My Work** (`#work`).
- About copy — 5+ years experience, AI-assisted workflows, user-centric workflows (no legacy/neural-processing framing).
- Stack main tiles — WordPress / PHP, Gutenberg / FSE, WooCommerce, JavaScript, AI Automations (Phase 10.6.3).
- Footer social links — real GitHub and LinkedIn URLs only.

#### Removed

- Fictional **Testimonials** section — fake quotes, companies, and metrics (Phase 10.6.4).
- Obsolete testimonial CSS — `.np-testimonials`, `.np-testimonial-card`, `.np-testimonial-initials`, and related rules.
- Footer placeholder links — Layers, Dribbble, and all `href="#"` social placeholders (Phase 10.7.1).
- Screenshot gallery system from case studies (Phase 10.3 — cancelled Phase 10.2 ingestion; no screenshot galleries remain).

#### Renamed

- `patterns/testimonials.php` → `patterns/build-focus.php` (Phase 10.7.2).
- Pattern slug `nikolay-portfolio/testimonials` → `nikolay-portfolio/build-focus`.
- Section class `np-testimonials` → `np-build-focus` only.

#### Verified

- Homepage responsive QA — 1280 × 900, 834 × 1024, 390 × 844; no page-level horizontal overflow after Build Focus work.
- Six project case studies — no regression from homepage changes (repository audit; WordPress content unchanged by Phase 10 theme diff).
- Frozen homepage state — Phase 10.7 final UX/visual audit **PASS**; homepage not in progress.
- Phase 10.8A final repository integrity audit — all theme diffs approved; documentation sync required (Phase 10.8B).

*Phase 10 source changes are prepared locally and pending final commit.*

---

### Added

- Complete single-project architecture for all six projects (`683ec7b`).
- Six case-study pages with metadata-driven status chips and GitHub/Live CTAs.
- Project #4 **WooCommerce Checkout Simplifier** case study in WordPress (post ID 20) — Phase 09.6E.2H.
- Phase 09.6E documentation in `PROJECT-DOCUMENTATION.md` — legacy Field Remover → Checkout Simplifier 2.0.0 evolution.
- Six real project portfolio content entries in WordPress (`project` CPT) — Phase 08.2.
- Six Featured Images via WordPress Media Library (not in theme repository) — Phase 08.3.
- Phase 07 discovery and project selection documentation in `PROJECT-DOCUMENTATION.md`.
- Six-project content specification (Phase 07.3) — WORK card requirements, excerpts, categories, status labels.
- Reusable 14-section case-study specification and content length guidelines.
- Phase 08.1 content implementation preflight documentation.

### Changed

- Finalized project page presentation — compact hero, navigation grid, architecture flow, and table styling (`71eff80`).
- Added responsive architecture-flow presentation — inline editorial flow with tree and mobile handling.
- Refined case-study tables — shared content measure, fixed layout, Claim Safety and two-column proportions.
- Finalized floating glass navigation header with project-safe homepage anchors (`e5016f3`).
- Documented Project #4 evolution from legacy **WooCommerce Field Remover** to native **Checkout Simplifier 2.0.0** architecture.
- WORK Query Loop expanded from 3 to 6 projects (`831c870`).
- WORK section copy replaced with production portfolio language (`4b6a02c`).
- Responsive project card alignment refined for desktop and tablet 3-column layouts (`831c870`).
- Project portfolio direction from fictional placeholders to six approved real GitHub projects.

### Fixed

- Mobile single-project page-level horizontal overflow (`8368dad`).
- Header/content overlap on single-project pages (`1a61664`).
- Project-page header navigation — fragment anchors now use site-root URLs (`/#about`, `/#work`, `/#stack`, `/#contact`) (`e5016f3`).

### Verified

- Six project pages — hero, metadata, CTA logic, navigation, and case-study structure.
- Responsive breakpoints: 1280 × 900, 834 × 1024, 390 × 844.
- CTA claim safety — empty Live URLs suppress Live CTA rendering.
- Navigation sequence — previous / back to work / next via `menu_order`.
- Block Checkout functional verification for Project #4 plugin (WooCommerce 11.0.1, `vibe-shoplocal.local`) — Phase 09.6E.2D.
- Final visual QA for Project #4 portfolio case study — Phase 09.6E.2I **PASS**.

Validated through browser-based visual/structural QA; structural checks do not claim pixel-perfect validation of every element.

### Phase 09

- **Phase 09 — Single Project / Case Study Architecture: COMPLETE**

### Completed

- Phase 09 — single-project template, patterns, metadata, six case studies, presentation refinements, header, and responsive QA.
- Phase 09.6E — WooCommerce Checkout Simplifier (Project #4): plugin redesign, verification, release, portfolio migration, visual QA.
- Phase 08 WORK implementation — content, images, grid, alignment, copy, final QA.
- Final WORK section QA — desktop, tablet, mobile validation (Phase 08.7 — PASS).
- Claim-safety validation for all six project entries.

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
- Homepage patterns: Hero, About, Projects, Stack, Testimonials, Contact *(superseded in [Unreleased] Phase 10 — Build Focus replaces Testimonials)*
- Fixed glass header with responsive Navigation block (768px breakpoint)
- Query Loop project cards (`project` CPT via companion plugin)
- Contact form REST endpoint with nonce, honeypot, and rate limiting
- Stylesheet enqueue fix for block theme (`f8d16f4`)
- Phase 06 visual refinements: navigation, branding, About CTA, image treatments (`886bdcb`)

---

## Phase 09 commits

| Commit | Message |
|--------|---------|
| `683ec7b` | `feat(project): build single project architecture` |
| `8368dad` | `fix(single-project): prevent mobile content overflow` |
| `1a61664` | `fix(single-project): align content below fixed header` |
| `e5016f3` | `fix(header): add floating glass nav and project-safe anchors` |
| `71eff80` | `feat(single-project): finalize project page presentation` |

## Phase 08 WORK commits

| Commit | Message |
|--------|---------|
| `831c870` | `feat(work): expand project grid to six` |
| `4b6a02c` | `feat(work): update project section copy` |

---

[Unreleased]: https://github.com/nikdjem/nikolay-portfolio/compare/71eff80...HEAD
