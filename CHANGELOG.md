# Changelog

All notable changes to the **NIKWEB.EU Portfolio** WordPress theme are documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Phase 13 — Production Finalization & Deployment Workflow

**Status: COMPLETE** (2026-09-19)

Scope: end-to-end verification of the GitHub → cPanel → Production code deployment workflow, including forward deployment and revert deployment.

#### Verified

- End-to-end workflow: LocalWP → Git commit → GitHub → cPanel Pull / Update from Remote → cPanel Deploy HEAD Commit → Production
- Forward deployment verified with commit `648d19e` (`test: verify GitHub to cPanel deployment`) — minimal CSS test in `style.css` (`.np-site-footer` border opacity `10%` → `12%`)
- Revert deployment verified with commit `0dcb5be` (`revert: remove Phase 13 deployment test`) — footer rule restored to `10%`; temporary comment removed
- Production confirmed operational after both deploy and revert
- Normal production code workflow is **Git-based**
- AIOWM is **not** part of the daily code deployment workflow
- Production performance verification on nikweb.eu **PASS** — TTFB ~4.08 s → ~110 ms; HTML request ~4.73 s → ~144 ms

*Phase 13 is complete. Ongoing code changes use Git; ongoing project content changes use WordPress Admin.*

---

### Phase 12 — Production Deployment

**Status: COMPLETE** (September 2026)

Scope: production WordPress provisioning, Git-based theme and companion plugin deployment, LocalWP → production project migration, database and media restoration, and production visual verification.

#### Completed (verified)

- Production WordPress provisioned and operational at [https://nikweb.eu](https://nikweb.eu)
- Theme cPanel deployment configuration added (`.cpanel.yml`, commit `327ffec`)
- Theme deployed to production through cPanel Git from `/home/nikwebeu/git/nikolay-portfolio` → `/home/nikwebeu/public_html/wp-content/themes/nikolay-portfolio/`
- Theme **ACTIVE** on production
- Companion plugin (`nikolay-portfolio-projects` v1.0.2) deployed separately from [nikdjem/nikolay-portfolio-projects](https://github.com/nikdjem/nikolay-portfolio-projects) to `/home/nikwebeu/public_html/wp-content/plugins/nikolay-portfolio-projects/`
- Companion plugin **ACTIVE** on production
- Project CPT **VERIFIED** on production
- Custom selective migration package tested and executed successfully (six projects, featured attachments, hand-audited WebP derivatives)
- Database and media migration completed — final restoration via **All-in-One WP Migration (AIOWM)**
- Six published portfolio projects live on production with metadata, categories, and case-study content
- Production visual verification **PASS** — Work grid and single-project pages render correctly

#### Production workflow documented

- **Code:** LocalWP → Git commit → GitHub → cPanel Git → Production
- **Content:** WordPress Admin → Production Database
- **Media:** WordPress Media Library → Production uploads
- **AIOWM:** backup / migration / restore utility only — not the normal code deployment mechanism and not required for day-to-day project or theme updates

*Phase 12 is complete. Future code changes use Git; future project content changes use WordPress Admin.*

---

## 2026-10-07 — Back to Top footer control

Footer control to return visitors to the top of the page; native anchor implementation with accessibility support; navigation fix verified locally and on production.

### Added

- Back to Top footer control — `href="#top"`, `aria-label="Back to top"`, visible `↑` arrow; CSS smooth scrolling with reduced-motion respected; no JavaScript required for navigation

### Fixed

- Fragment target moved to an in-flow `#top` anchor before the fixed header (`83741b1` — `fix: repair back to top navigation`); initial implementation `503752c` did not scroll reliably because `#top` was on the fixed header

### Verified

- LocalWP: mouse and keyboard (Tab → Enter); page returns to top
- Production: deployed via normal Git workflow; **PASS** on [https://nikweb.eu](https://nikweb.eu); no AIOWM or database/content changes

---

## 2026-10-04 — Phase 13 production performance verification

Documentation update recording verified production response times on nikweb.eu.

### Documented

- Phase 13 performance verification **PASS** (TTFB and HTML request times before and after issue resolution)

---

## 2026-09-19 — Phase 13 deployment workflow verification

Documentation update recording the completed end-to-end Git deployment verification.

### Documented

- Phase 13 marked **COMPLETE**
- Forward deployment verified (`648d19e`)
- Revert deployment verified (`0dcb5be`)
- GitHub → cPanel → Production workflow documented as the normal code deployment path
- AIOWM remains backup/migration/restore utility only — not required for Project management or code updates

---

## 2026-09-18 — Production migration and deployment milestone

Documentation update recording the completed LocalWP → production migration and the finalized production deployment workflow.

### Documented

- Successful production migration and AIOWM database/media restoration
- GitHub → cPanel Git → Production code deployment architecture for theme and companion plugin
- WordPress Admin → Production Database workflow for project and content management
- All-in-One WP Migration positioned as backup/migration/restore utility, not normal deployment
- Six published `project` CPT entries available on production
- Phase 12 marked **COMPLETE** in project documentation

---

### Phase 11 — SEO, Accessibility, and Performance Foundation

**Status: COMPLETE** (committed `28953e3`, August 2026)

#### Added

- Native SEO module (`includes/seo.php`) — titles, meta descriptions, Open Graph, canonical URLs, JSON-LD
- Project-hero image sizes and audited crop origins for single-project pages
- Footer dynamic copyright year via `wp_date('Y')`
- Contact form accessibility and client-side validation improvements
- Lazy loading and explicit dimensions on homepage imagery

#### Changed

- Footer micro copy — brand and copyright line
- Homepage hero/about image assets optimized for production weight

#### Verified

- Local SEO, accessibility, and performance audit baseline — Phase 11 closure commit `28953e3`

---

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

*Phase 10 theme changes were committed in 88bc077 and Phase 10 documentation changes were committed in 0e1098d. The main branch is synchronized with origin/main.*

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
