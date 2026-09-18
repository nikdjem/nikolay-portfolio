# NIKWEB.EU Portfolio — Project Documentation

**Project:** Nikolay Portfolio WordPress Theme  
**Brand:** NIKWEB.EU  
**Repository:** [nikdjem/nikolay-portfolio](https://github.com/nikdjem/nikolay-portfolio)  
**Theme path:** `wp-content/themes/nikolay-portfolio`  
**Theme version:** 0.1.5
**Last updated:** September 2026 (Phase 12 — production migration complete)

---

## Document Purpose

This file is the long-form project record for the NIKWEB.EU portfolio website. It documents verified development history, architectural decisions, and phase boundaries. For a short public overview, see [README.md](./README.md). For release-level changes, see [CHANGELOG.md](./CHANGELOG.md).

**Legend used throughout this document:**

| Label | Meaning |
|-------|---------|
| **Verified** | Supported by Git history, committed files, or repository artifacts |
| **[REQUIRES VERIFICATION]** | Not reliably reconstructable from the repository alone |

---

## Phase Index

| Phase | Title | Status |
|-------|-------|--------|
| **01** | [Project Foundation & Discovery](#phase-01--project-foundation--discovery) | **Complete — documented** |
| **02** | [UX & Information Architecture](#phase-02--ux--information-architecture) | **Complete — documented** |
| **03** | [Visual Design & Design System](#phase-03--visual-design--design-system) | **Complete — documented** |
| **04** | [Stitch → Cursor Workflow](#phase-04--stitch--cursor-workflow) | **Complete — documented** |
| **05** | [WordPress / FSE / Gutenberg Architecture](#phase-05--wordpress--fse--gutenberg-architecture) | **Complete — documented** |
| **06** | [Initial Implementation & Visual QA](#phase-06--initial-implementation--visual-qa) | **Complete — documented** |
| **07** | [Real Projects & Case Study Architecture](#phase-07--real-projects--case-study-architecture) | **Complete — documented** |
| **08** | [Real Project Content & WORK Implementation](#phase-08--real-project-content--work-implementation) | **Complete — WORK implementation** |
| **09** | [Single Project / Case Study Architecture](#phase-09--single-project--case-study-architecture) | **Complete — Single Project / Case Study Architecture** |
| **10** | [Homepage & Portfolio Refinement](#phase-10--homepage--portfolio-refinement) | **Complete — Homepage frozen (Phase 10.7)** |
| **11** | [SEO, Accessibility, and Performance Foundation](#phase-11--seo-accessibility-and-performance-foundation) | **Complete — committed `28953e3`** |
| **12** | [Production Deployment](#phase-12--production-deployment) | **Complete — code deployed; content and media migrated** |

---

## Repository State (Current)

This section records the Git and production state after Phase 12 production migration completion (September 2026).

| Item | Value |
|------|-------|
| **Latest committed theme code** | `327ffec` — `chore: add cPanel deployment configuration` |
| **Phase 11 theme commit** | `28953e3` — `feat: finalize Phase 11 SEO, accessibility, and performance foundation` |
| **Branch** | `main` (synchronized with `origin/main`) |
| **Production URL** | [https://nikweb.eu](https://nikweb.eu) — **ACTIVE** |
| **Phase 08 WORK** | **Complete** |
| **Phase 09** | **Complete — Single Project / Case Study Architecture** |
| **Phase 10** | **Complete — Homepage frozen after Phase 10.7** |
| **Phase 11** | **Complete — SEO, accessibility, performance foundation** |
| **Phase 12** | **Complete — production deployment and migration** |
| **Production projects** | **6 published** `project` posts with Featured Images, metadata, and case-study content |

### Important Phase 09 theme commits (Verified)

| Commit | Message |
|--------|---------|
| `683ec7b` | `feat(project): build single project architecture` |
| `8368dad` | `fix(single-project): prevent mobile content overflow` |
| `1a61664` | `fix(single-project): align content below fixed header` |
| `e5016f3` | `fix(header): add floating glass nav and project-safe anchors` |
| `71eff80` | `feat(single-project): finalize project page presentation` |

### Untracked local file

| File | Status |
|------|--------|
| `screenshot.png` | Untracked — not part of theme repository |

Six published real `project` posts with Featured Images are live on production at [https://nikweb.eu](https://nikweb.eu). Featured Images are Media Library assets in the production `wp-content/uploads/` directory — **not** committed to the theme repository.

**Case-study architecture:** All six project case studies are implemented in the Local WordPress database with metadata-driven UI, reusable patterns, and final presentation refinements committed in `71eff80` and `e5016f3`.

---

## Repository State After Phase 06

*Historical snapshot at Phase 06 documentation time. Current baseline: `886bdcb` — see [Repository State (Current)](#repository-state-current).*

This section records the Git state at the end of Phase 06 documentation. **Phase 07 continued from the local working tree, not from the last code commit alone.**

### Remote / committed state (GitHub)

| Commit | Message | Role |
|--------|---------|------|
| `36624f2` | `docs: add project documentation foundation` | Latest pushed commit — documentation only |
| `53e66a1` | `fix(home): refine hero heading layout` | Last **code** commit on `origin/main` |

Everything in Phases 01–06 **implementation** through responsive refinements is represented in Git up to `53e66a1`, plus the documentation commit `36624f2`.

### Current local working tree (uncommitted)

The following files contain **uncommitted changes** performed after `53e66a1`. These changes are **not on GitHub** and must not be treated as the remote baseline:

| File | Nature of changes |
|------|-------------------|
| `assets/js/navigation.js` | Scroll header state, hamburger ↔ X toggle, aria-label updates |
| `functions.php` | NIKWEB.EU site title filter |
| `parts/header.html` | Navigation order: About before Work |
| `patterns/about.php` | GitHub Repository button; experience stat badge removed |
| `style.css` | Header glass pseudo-element fix, mobile nav styling, image treatments |

These uncommitted refinements represent the **current local development state** from which Phase 07 should proceed. They have **not** been staged or committed.

---

## Phase 01 — Project Foundation & Discovery

**Status:** Complete
**Timeline:** 15 August 2026 — project genesis (`f6f16f5`)

### Verified

**Project purpose:** Custom WordPress 7.0 Full Site Editing (FSE) block theme for a personal developer portfolio. The site showcases WordPress engineering capability through a single-page homepage with anchored sections. Theme description in `style.css`: *"Dark amethyst portfolio visual system."*

**WordPress direction:** Block theme architecture — `theme.json` tokens, block patterns, template parts, core Gutenberg blocks. No page builder. No classic PHP templates for homepage sections.

**Repository structure:**

- **Git root:** `wp-content/themes/nikolay-portfolio/` (the theme directory **is** the repository root)
- **Remote:** `https://github.com/nikdjem/nikolay-portfolio`
- **Branch:** `main`
- **Author (Git):** `nikdjem`

**Development timeline (Git):**

| Date | Commit | Event |
|------|--------|-------|
| 15 Aug 2026 | `f6f16f5` | Initial portfolio theme (empty `style.css`, `theme.json`) |
| 15 Aug 2026 | `c082057` | Stitch design references added |
| 16 Aug 2026 | `7f619f5` | FSE foundation baseline |
| 16–20 Aug 2026 | `c3b3d0e` … `53e66a1` | Section implementation and refinements |
| 22 Aug 2026 | `36624f2` | Documentation foundation committed and pushed |

**Tools (evidenced):**

| Tool | Role |
|------|------|
| **Google Stitch** | Wireframe and final visual design; exports in `design/` |
| **Cursor IDE + Cursor Agent** | Design analysis, architecture spec, phased implementation (`Co-authored-by: Cursor` on commit `eb312ae`) |
| **Git / GitHub** | Version control |
| **WordPress 7.0** | CMS and FSE runtime |
| **PHP 8.1+** | Theme runtime (`style.css` header) |
| **Local WP** | Local development [REQUIRES VERIFICATION for exact site configuration] |

**Companion plugin:** Separate repository [nikdjem/nikolay-portfolio-projects](https://github.com/nikdjem/nikolay-portfolio-projects) — v1.0.2 — registers `project` CPT, `project_category` taxonomy, and project metadata for the Work section Query Loop. Deployed and **ACTIVE** on production; six portfolio projects migrated and published.

**Original scope (implemented through Phase 06):**

- Single-page portfolio homepage
- Header, footer, six content sections
- Responsive navigation
- Contact form via REST API
- Project cards via Query Loop + companion plugin
- Design reference files preserved in `design/`

**Out of scope (deferred):**

- Blog, e-commerce, multi-language
- CMS-managed navigation (hardcoded Navigation block)
- Production deployment
- Single-project case study pages (deferred to Phase 07)

### Requires Verification

- Exact Local WP site name and configuration beyond workspace path pattern
- Original audience/brief before Stitch export
- Whether NIKWEB.EU was the intended brand from project inception (brand filter is uncommitted; committed code uses core Site Title block)
- Production hosting operational details beyond verified cPanel paths (Phase 12)
- Exact WordPress patch version (7.0.4 cited in development notes, not stored in Git)

### Known Documentation Gaps

- Pre-Git planning notes
- WordPress admin configuration (static front page assignment)
- Database content for placeholder projects
- Formal QA sign-off documents (audit verdicts exist in development session notes only)

---

## Phase 02 — UX & Information Architecture

**Status:** Complete

### Verified — Current Homepage Structure (Phase 10)

Single-page portfolio composed in `templates/front-page.html`:

| Order | Section | Anchor | Pattern slug |
|-------|---------|--------|--------------|
| 1 | Hero | _(none)_ | `nikolay-portfolio/hero` |
| 2 | About | `#about` | `nikolay-portfolio/about` |
| 3 | Work (Projects) | `#work` | `nikolay-portfolio/projects` |
| 4 | Stack | `#stack` | `nikolay-portfolio/stack` |
| 5 | Build Focus | _(none)_ | `nikolay-portfolio/build-focus` |
| 6 | Contact | `#contact` | `nikolay-portfolio/contact` |

Header and footer are template parts (`parts/header.html`, `parts/footer.html`).

**Homepage status:** **FROZEN** after Phase 10.7 final UX/visual audit. Do not treat homepage content or visual design as in progress.

**CTA hierarchy (current):**

| CTA | Location | Target |
|-----|----------|--------|
| Hire Me | Header (desktop nav) | `#contact` |
| Start a Project | Hero primary button | `#contact` |
| View My Work | Hero secondary button | `#work` |
| GitHub Repository | About section | `https://github.com/nikdjem` |

*Historical (Pre-Phase 10): Hero CTAs were **Initialize Project** and **View Matrix**; section 5 was **Testimonials** (`nikolay-portfolio/testimonials`).*

**Mobile navigation:** Core Navigation block with `overlayMenu: mobile`, hamburger toggle, overlay below header. Theme overrides core 600px breakpoint to **768px** in CSS.

**Work ↔ project CPT:** Section id `#work`; Query Loop queries `project` post type (six projects); companion plugin rewrite slug is `work`. Single-project case-study pages are implemented in Phase 09 (`templates/single-project.html`).

**No "Services" section** — the fourth nav item is **Stack**, not Services.

### Original Wireframe UX

Source: `design/wireframe/index.html`, `design/wireframe/DESIGN.md`

**Section order (Historical — wireframe):** Hero → Bio → Project Archive → Capabilities → Testimonials → Contact

**Navigation labels:** Hero / Philosophy / Projects / Stack (placeholder `#` hrefs; no Contact in desktop nav)

**Brand:** "Amethyst Portfolio"

**CTA:** "Hire" button

Wireframe uses 1px section dividers — **not implemented** in final theme (aligned with final design "no-line" rule).

### Final Stitch UX

Source: `design/final/index.html`

**Section order (Historical — Stitch final):** Hero → About → Work (projects) → Stack → Testimonials → Contact

**Navigation:** Work / About / Stack / Contact + Hire Me

**Anchors:** `#work`, `#about`, `#stack`, `#contact`

Work nav item shown as active (border-left accent) in final HTML.

### Navigation Evolution

| Stage | Order | Notes |
|-------|-------|-------|
| **Wireframe** | Hero / Philosophy / Projects / Stack | No Contact link; brand "Amethyst Portfolio" |
| **Stitch final** | Work / About / Stack / Contact + Hire Me | Work first, active state |
| **Committed (`53e66a1`)** | Work / About / Stack / Contact + Hire Me | Matches Stitch final order |
| **Local uncommitted** | About / Work / Stack / Contact + Hire Me | About and Work swapped in `parts/header.html` |

This history is intentional — do not collapse versions.

### Requires Verification

- Whether About-before-Work in uncommitted state is the intended final nav order
- Original plan for single-project pages before Phase 07

---

## Phase 03 — Visual Design & Design System

**Status:** Complete
**Creative direction:** **The Amethyst Monolith** (`design/final/DESIGN.md`) — disciplined synth-cyber, tonal depth, brutalist geometry, technical editorial typography.

### Verified — Design Evolution

| Stage | Palette | Notes |
|-------|---------|-------|
| Wireframe (`design/wireframe/DESIGN.md`) | Light "Amethyst Blueprint" | Superseded |
| Final Stitch (`design/final/index.html`) | Dark `#030008` base | **Visual source of truth for implementation** |
| `theme.json` (commit `7f619f5`) | Dark amethyst tokens matching final HTML | Implemented token system |

Implementation follows **`design/final/index.html`** over conflicting hex values in `design/final/DESIGN.md` where they differ.

### Color Tokens (theme.json)

| Token slug | Hex | Typical use |
|------------|-----|-------------|
| `background` / `surface` | `#030008` | Page base |
| `surface-container` | `#0b0812` | Cards, chips, inputs |
| `surface-container-highest` | `#1a1625` | Nav hover background |
| `on-surface` | `#ecdcff` | Primary text |
| `on-surface-variant` | `#cfc2d5` | Secondary text, nav |
| `primary-container` | `#7b2cbf` | Primary accent, CTAs, glows |
| `secondary` | `#e1b6ff` | Hover text, category labels |
| `outline-variant` | `#2d2636` | Ghost outlines via `color-mix` |

### Typography Tokens

| Slug | Size | Use |
|------|------|-----|
| `meta` | 10px | Status chips, form labels |
| `eyebrow` | 12px | Section labels, categories |
| `small` | 14px | Nav, buttons, excerpts |
| `medium` | 16px | Body default |
| `card` | 24px | Project titles, logo |
| `section` | 36px | h2 section headings |
| `hero` | 48–96px fluid | Hero h1 |

**Font family:** Space Grotesk only — weights 300–700, self-hosted WOFF2 in `assets/fonts/`.

**Patterns:** Headings weight 700, negative letter-spacing; labels/meta uppercase with wide tracking (0.2em–0.4em).

### Spacing & Layout

| Token / setting | Value |
|-----------------|-------|
| Spacing unit | 8px base |
| Preset steps | 8, 16, 24, 32, 40, 48, 64, 96 |
| Content width | 1152px (`settings.layout.contentSize`) |
| Wide width | 1280px |
| Global horizontal padding | 32px |
| Header height | 80px (`--wp--custom--header--height`) |
| **Responsive breakpoint** | **768px** (theme override; core Navigation default is 600px) |

### Geometry & Borders

- **Border radius: 0 globally** — `settings.border.radius: false`; enforced in patterns and CSS
- Section boundaries via **tonal surface shifts**, not 1px dividers
- Card/chip edges via `outline` + `color-mix(in srgb, var(--wp--preset--color--outline-variant) N%, transparent)`

### Gradients & Shadows

| Slug | Use |
|------|-----|
| `hero-word` | Hero gradient text |
| `hero-overlay` | Hero cover overlay |
| `cta-crystal` | CTA backgrounds |
| `project-fade` | Project card text overlay |
| `logo`, `chip`, `button`, `submit` | Glow shadows |

### Button System (theme.json)

- Background: `primary-container`; text: `on-primary-container`
- Uppercase, `small` (14px), weight 700, letter-spacing 0.1em
- Hover/focus/active: background → `primary`, text → `on-primary`
- Outline variant: `surface-container-high` bg, 1px outline at 20% opacity

### Image Treatment

- Default: `grayscale(1)` + reduced brightness + contrast boost
- Hover: partial color restore + `scale(1.05)` on project cards (700ms transition)
- Hero/about/project images each have section-specific filter values in `style.css`

### Project Cards

- Aspect ratio **4/5**
- Featured image absolute fill + `project-fade` gradient overlay
- Category (eyebrow), title (card size), excerpt (small)
- Desktop hover: title underline bar expands (`primary-container` + glow); excerpt slides up from hidden
- Mobile: excerpt always visible; single-column grid

### Glass Header

- 80% background color mix + `backdrop-filter: blur(24px)`
- Committed: applied directly to `.np-site-header`
- Uncommitted: moved to `::before` pseudo-element to fix mobile overlay containing-block issue

### Motion & Accessibility

- UI transitions: 75–150ms
- Image/card transitions: 300–700ms
- `prefers-reduced-motion: reduce` disables transitions globally in `style.css`
- Focus: `outline: 2px solid var(--wp--preset--color--primary)`

### Known Intentional Deviations from Stitch Final

| Element | Stitch | Implementation |
|---------|--------|----------------|
| Header position | `top: 0` | `top: 35px` |
| DESIGN.md surface hex | `#1a0935` (doc) | `#030008` (HTML + theme.json) |

### Requires Verification

- Formal sign-off on all Phase 6 visual deltas
- Exact Stitch export session parameters

---

## Phase 04 — Stitch → Cursor Workflow

**Status:** Complete

### Verified Workflow

```
1. Wireframe creation (Stitch)
      ↓
2. Final visual design (Stitch)
      ↓
3. Stitch exports → design/wireframe/ + design/final/  [c082057]
      ↓
4. Design analysis (Cursor — read-only, no code)
      ↓
5. Architecture specification (Cursor — read-only)
      ↓
6. Architecture guardrails acknowledged
      ↓
7. Cursor Agent phased implementation:
      Phase 1: theme.json foundation [7f619f5]
      Phase 2: header, footer, nav [c3b3d0e, 7f619f5]
      Phase 4+: section patterns (Hero → Contact)
      ↓
8. Visual QA (cross-viewport audit)
      ↓
9. Responsive QA (DevTools; local browser)
      ↓
10. Refinement commits + uncommitted local fixes
```

### Reference File Roles

| Source | Role |
|--------|------|
| `design/wireframe/` | **UX / IA / structure reference** |
| `design/final/` | **Visual source of truth** |
| `design/final/index.html` | Most precise color and type spec |
| `design/final/DESIGN.md` | Design intent and rules (when not conflicting with HTML) |

### Cursor Agent Evidence

- Phased prompt workflow with explicit "do not implement" audit turns before each build phase
- Commit `eb312ae` (`feat(home): add contact section`) includes `Co-authored-by: Cursor <cursoragent@cursor.com>`
- Section-by-section pattern creation: one pattern file per homepage section
- Verification reports after major phases (documented in development session notes)

### Process Roles

| Stage | Tool |
|-------|------|
| Design generation | Google Stitch |
| IA / spec | Cursor (analysis mode) |
| Architecture | Cursor (specification) |
| Code generation | Cursor Agent |
| Manual validation | Browser / Edge DevTools |

### Stitch MCP

**Stitch MCP usage is not verified from repository evidence.**

Design exports exist as static files in `design/`. No MCP configuration or invocation records are present in the Git repository.

### Requires Verification

- Complete archive of all Cursor prompts
- Whether Puppeteer or other automation was used beyond local DevTools

---

## Phase 05 — WordPress / FSE / Gutenberg Architecture

**Status:** Complete

### Theme Directory Map

```
nikolay-portfolio/
├── theme.json              # Design tokens, global styles, block/element styles
├── style.css               # Exception CSS + theme header
├── functions.php           # Enqueue, REST contact, filters, pattern cache fix
├── templates/
│   ├── front-page.html     # Homepage pattern composition
│   └── index.html          # Mandatory fallback
├── parts/
│   ├── header.html         # Fixed header + Navigation block
│   └── footer.html
├── patterns/               # Registered block patterns (PHP)
│   ├── hero.php
│   ├── about.php
│   ├── projects.php
│   ├── stack.php
│   ├── build-focus.php
│   └── contact.php
├── assets/
│   ├── fonts/              # Space Grotesk WOFF2
│   ├── images/             # hero.jpg, about.jpg
│   └── js/navigation.js    # Nav helper script
└── design/                 # Stitch references (not loaded at runtime)
```

### Layer Responsibilities

| Layer | Responsibility | Why it exists |
|-------|----------------|---------------|
| **`theme.json`** | Colors, typography, spacing, shadows, gradients, global element/button styles, block overrides | FSE-native token system; editable in Site Editor |
| **`style.css`** | Glass header, image filters, card hovers, grid overrides, pseudo-elements, responsive breakpoints | Effects Gutenberg blocks and theme.json cannot express |
| **`functions.php`** | Enqueue stylesheet, contact REST route, contact inline JS, site title filter (uncommitted), PHP-FPM pattern stat cache | Block themes do not auto-load `style.css`; server-side logic |
| **Templates** | Page structure composition | FSE template hierarchy |
| **Template parts** | Reusable header/footer | Shared across templates |
| **Patterns** | Homepage sections as registrable block patterns | Modular section build-out; editor-visible |
| **`navigation.js`** | aria-expanded sync, overlay hash-link close, resize dismiss, scroll state (partially uncommitted) | WordPress 7.0.4 Navigation block gaps |

### Gutenberg Blocks in Use

| Block | Use |
|-------|-----|
| **Navigation** | Primary nav + Hire Me button; mobile overlay |
| **Query Loop / Post Template** | Work section project grid |
| **Cover** | Hero background |
| **Group, Heading, Paragraph, Buttons, Image, Quote** | Section composition |
| **Post Featured Image, Post Title, Post Excerpt, Post Terms** | Project card fields |

### Project Content Model (Companion Plugin)

**Plugin:** `nikolay-portfolio-projects` (separate Git repo)

| Entity | Details |
|--------|---------|
| CPT `project` | title, editor, excerpt, thumbnail, revisions, menu_order |
| Taxonomy `project_category` | Non-hierarchical; default terms: Intelligence, Commerce, Interface |
| Rewrite slug | `work` |
| Archive | Disabled (`has_archive: false`) |
| REST | Enabled (`show_in_rest: true`) |

**Theme consumption:** Query Loop in `patterns/projects.php` — `postType: project`, `perPage: 6`, `orderBy: menu_order`, 3-column grid.

**Single-project template:** Implemented in Phase 09 — `templates/single-project.html` and companion patterns.

*Historical (Pre-Phase 08/09): Query Loop used `perPage: 3`; no single-project template existed.*

### Contact REST Endpoint

- Route: `POST /wp-json/nikolay-portfolio/v1/contact`
- Security: nonce verification, honeypot field, rate limit (5 requests / 10 min per IP)
- Delivery: `wp_mail` to admin email
- Client: inline fetch script enqueued on front page only (`functions.php`)

---

## Phase 06 — Initial Implementation & Visual QA

**Status:** Complete

### Implementation History (Git Commits)

| Commit | Section / area |
|--------|----------------|
| `7f619f5` | FSE foundation: theme.json, fonts, header/footer shell, base CSS |
| `c3b3d0e` | Responsive mobile navigation |
| `4d9ef82` | Front page template shell |
| `c00be7e` | Hero pattern |
| `198aeb0` | About pattern |
| `0716181` | Projects (WORK) pattern + card CSS |
| `e47a757` | Hero, About, Projects, Stack refinements |
| `f8d16f4` | **Stylesheet enqueue fix** + image treatments |
| `8f61ffc` | Hero, About, Projects, Stack visual pass |
| `3a6654f` | Testimonials pattern *(superseded — removed Phase 10.6.4)* |
| `eb312ae` | Contact pattern + REST endpoint |
| `0315115` | Footer template part |
| `a6c0a14` | Responsive visual alignment |
| `53e66a1` | Hero heading layout fix |

### Section Summaries *(Historical — Phase 06 baseline; superseded for current homepage by [Phase 10](#phase-10--homepage--portfolio-refinement))*

**Hero** (`patterns/hero.php`): Full-bleed Cover, local `assets/images/hero.jpg`, status chip, display heading with gradient word. *Pre-Phase 10 CTAs: Initialize Project + View Matrix.*

**About** (`patterns/about.php`): Two-column biography, local `assets/images/about.jpg`, grayscale image treatment. GitHub Repository button; experience stat badge removed.

**WORK** (`patterns/projects.php`): Section `#work`, Query Loop. *At Phase 06: 3 project cards, placeholder copy — superseded by Phase 08 six-project implementation.*

**Stack** (`patterns/stack.php`): Technology grid — 5 columns desktop, 2 columns mobile. *Labels superseded in Phase 10.6.3.*

**Testimonials** (`patterns/testimonials.php`): Two-column quote grid. *Removed Phase 10.6.4 — replaced by Build Focus (`patterns/build-focus.php`).*

**Contact** (`patterns/contact.php`): REST-powered form, honeypot, styled inputs, submit button.

**Footer** (`parts/footer.html`): Text links, copyright. *Pre-Phase 10.7.1: placeholder `#` social links including Layers and Dribbble.*

**Header** (`parts/header.html`): Fixed glass bar, Navigation block, Hire Me CTA, hardcoded script tag for `navigation.js`.

### WORK Section — Current Architecture

| Property | Value |
|----------|-------|
| Pattern | `patterns/projects.php` |
| Section id | `#work` |
| Query | `project` CPT, 3 posts, `menu_order` ASC |
| Grid | 3 columns ≥768px; 1 column ≤767px |
| Card class | `np-project-card` |
| Aspect ratio | 4/5 |
| Overlay gradient | `project-fade` |
| Image default | Grayscale + brightness(0.88) + contrast(110%) |
| Image hover | grayscale(0.4) + brightness(0.94) + scale(1.05) |
| Title hover | 2px underline bar, `primary-container` + glow |
| Excerpt | Hidden on desktop until hover; always visible on mobile |

### Visual QA (Verified from Development Sessions)

Cross-viewport checks performed at 390, 767, 768, 820, 834, 1024, 1280, 1440px using browser DevTools. Phase 6D audit verdict: **MINOR** deviations, no structural failure, no broken navigation, no overflow regressions. Formal sign-off document not committed to repository.

### Problems Encountered & Solutions

| # | Problem | Committed solution | Uncommitted solution |
|---|---------|-------------------|---------------------|
| 1 | `style.css` not auto-loaded in block theme | `nikolay_portfolio_enqueue_styles()` in `functions.php` [`f8d16f4`] | — |
| 2 | Mobile overlay opens but has zero height | — | Move glass effect from header to `::before` pseudo-element [`style.css`] |
| 3 | `backdrop-filter` on header creates fixed containing block | — | Same `::before` refactor [`style.css`] |
| 4 | Hamburger does not become X when menu open | — | Hide overlay close button; swap icon via CSS on `aria-expanded="true"`; JS capture-click to close [`style.css`, `navigation.js`] |
| 5 | X does not restore to hamburger on close | — | Same toggle mechanism [`navigation.js`, CSS] |
| 6 | Hire Me appears in mobile overlay | — | `display: none` on `.wp-block-buttons` in open overlay ≤767px [`style.css`] |
| 7 | Mobile nav links too small (14px) | — | `calc(var(--wp--preset--font-size--small) * 2)` = 28px [`style.css`] |
| 8 | Mobile nav links left-aligned | — | Center flex + `text-align: center` on overlay ≤767px [`style.css`] |
| 9 | Scroll-transparent header | — | `is-scrolled` class via scroll listener; transparent `::before` [`navigation.js`, `style.css`] |
| 10 | NIKWEB.EU branding | — | `render_block_core/site-title` filter [`functions.php`] |
| 11 | Navigation order About/Work | Committed: Work / About / Stack / Contact [`53e66a1`] | Uncommitted: About / Work / Stack / Contact [`parts/header.html`] |
| 12 | About section refinement | Committed: bio + image + stat badge [`198aeb0`] | Uncommitted: GitHub button added, stat badge removed [`patterns/about.php`] |
| 13 | Image treatment refinements | Partial in `f8d16f4`, `8f61ffc` | Further brightness/opacity adjustments hero, about, projects [`style.css`] |

**Important:** Rows with "Uncommitted solution" only are **not on GitHub**. They exist in the local working tree only.

### Requires Verification

- Which fictional projects exist in WordPress admin (e.g. Translation Agency)
- Complete formal QA test matrix documentation

---

## Key Design Tokens Reference

Prefer these tokens over hard-coded values in future phases:

```css
/* Colors */
var(--wp--preset--color--background)          /* #030008 */
var(--wp--preset--color--surface-container)
var(--wp--preset--color--on-surface)
var(--wp--preset--color--on-surface-variant)
var(--wp--preset--color--primary-container)   /* #7b2cbf */
var(--wp--preset--color--secondary)

/* Typography */
var(--wp--preset--font-family--space-grotesk)
var(--wp--preset--font-size--eyebrow)         /* 12px */
var(--wp--preset--font-size--small)           /* 14px */
var(--wp--preset--font-size--card)            /* 24px */
var(--wp--preset--font-size--section)         /* 36px */

/* Spacing */
var(--wp--preset--spacing--8|16|24|32|64|96)

/* Layout */
var(--wp--style--global--content-size)        /* 1152px */
var(--wp--custom--header--height)             /* 80px */

/* Effects */
var(--wp--preset--gradient--project-fade)
var(--wp--preset--shadow--button)
```

**Primary responsive breakpoint:** `768px`

---

# Phase 07 — Real Projects & Case Study Architecture

**Status:** Complete — documented

Phase 07 is a **discovery and architecture phase**. It defines the approved real-project portfolio, unified content model, and case-study specification. **No theme source files, WordPress database content, or project posts were modified during Phase 07.**

Implementation of real project content is deferred to [Phase 08](#phase-08--real-project-content-implementation).

---

### Phase 07.1 — Discovery & Project Selection

**Status:** Complete — read-only discovery

The portfolio moved from **fictional placeholder projects** to a **curated set of real projects** sourced from Nikolay's public GitHub repositories (15 public + 2 private repos audited).

**Purpose:**

- Eliminate fictional portfolio projects
- Demonstrate real technical work
- Improve credibility
- Show breadth across WordPress, WooCommerce, frontend, and AI
- Retain a balanced six-project grid

Discovery evaluated repository evidence (README, source structure, deployment context) and recommended a final six-project lineup. No code or database changes were made.

---

### Phase 07.2 — Project Selection Approval

**Status:** Complete — **APPROVED**

**Verdict:** APPROVED — READY FOR PHASE 08

#### Approved final six projects (display order)

| # | Project | Category | Status |
|---|---------|----------|--------|
| 1 | PDF Carousel Footer WordPress Plugin | interface | LIVE |
| 2 | TablePress Responsive | interface | LIVE |
| 3 | NIKWEB.EU Portfolio — FSE Block Theme | interface | STABLE |
| 4 | WooCommerce Checkout Simplifier | commerce | STABLE |
| 5 | Barcode Generator & Reader | interface | STABLE |
| 6 | EcoWriter AI Agent | intelligence | **IN PROGRESS** |

**Status label rules:**

| Label | Use when |
|-------|----------|
| **LIVE** | Verified production URL — Projects 1–2 only |
| **STABLE** | Complete work without verified live URL — Projects 3–5 |
| **IN PROGRESS** | EcoWriter only — **never** substitute LIVE, COMPLETE, or PRODUCTION |

**Verified live URLs (Phase 07.2):**

| Project | Live URL | Evidence |
|---------|----------|----------|
| PDF Carousel Footer WordPress Plugin | https://metalenergy.bg/ | **Verified** |
| TablePress Responsive | https://prevodi-bg.bg/ | **Verified** |
| All others | — | **[REQUIRES VERIFICATION]** |

**EcoWriter AI Agent — canonical status:** **IN PROGRESS**. This label must appear consistently on cards, excerpts, and all future case-study copy. EcoWriter must never be described as LIVE, COMPLETE, or PRODUCTION.

---

### Phase 07.3 — Project Content & Case Study Specification

**Status:** Complete — read-only content architecture

A **unified content model** was created for all six approved projects, covering WORK grid cards and reusable case-study pages.

#### WORK card requirements

| Field | Source | Notes |
|-------|--------|-------|
| Title | WP post title | Plain project name |
| Category | `project_category` term | `intelligence` / `commerce` / `interface` |
| Status | Editorial convention | LIVE · STABLE · IN PROGRESS |
| Short excerpt | WP post excerpt | **25–45 words** |
| Featured image | WP post thumbnail | 4:5 aspect; grayscale treatment in theme |
| Display order | `menu_order` | 1–6 per approved order |

#### Approved reusable case-study structure (14 sections)

1. Hero
2. Project Overview
3. Problem
4. Objective
5. Solution
6. Technical Architecture
7. Key Decisions
8. Challenges
9. Implementation
10. Outcome
11. Technologies
12. Screenshots
13. Links
14. Lessons Learned

#### Content length guidelines

| Section | Target length |
|---------|---------------|
| Card excerpt | 25–45 words |
| Case study intro | 60–100 words |
| Problem statement | 80–120 words |
| Solution | 120–200 words |
| Technical architecture | 100–180 words (+ diagram optional) |
| Key decisions | 3–7 entries × 2–3 sentences each |
| Challenges | 2–4 entries × 3–4 sentences each |
| Outcome | 60–100 words |
| Lessons learned | 2–4 bullets × 1 sentence |

**Total case study target:** 800–1,400 words per project (EcoWriter may be shorter given IN PROGRESS scope).

#### Claim-safety principle

All portfolio copy must distinguish **verified facts** from **unverified or editorial claims**.

**Verified (safe to publish):**

- PDF Carousel live on metalenergy.bg (Phase 07.2 approved)
- TablePress Responsive live on prevodi-bg.bg (Phase 07.2 approved)
- Plugin/theme source architecture as evidenced in GitHub repositories
- EcoWriter UI prototype exists; publishing history shows "coming soon" placeholder

**Do not claim without verification:**

- WooCommerce Checkout Simplifier deployed on a live production store (verified locally only; no Live URL)
- NIKWEB.EU theme on a public production URL
- Barcode Generator hosted demo URL
- EcoWriter WordPress CMS publishing, scheduled publishing, or production deployment
- EcoWriter README features beyond confirmed implementation (CMS integration, weekly scheduling, specific Gemini model version)
- Any download, user, or revenue metrics

EcoWriter case studies must include an **IMPLEMENTED / PLANNED** feature table and prominent **IN PROGRESS** status in the Hero section.

Full per-project copy, screenshot requirements, and the claim-safety register were produced in the Phase 07.3 specification. Phase 08 content entry must follow that register before publication.

---

### Approved Project Removal

The following **fictional/placeholder projects** are approved for removal during Phase 08:

- Translation Agency
- SynthPress Engine
- Lumina Commerce
- Neural Blocks

**Important:** Their actual presence in the WordPress database must be verified before removal. **Do not assume they have already been deleted** — database verification was not possible during Phase 08.1 preflight (Local site unavailable).

Translation Agency is replaced in the portfolio narrative by TablePress Responsive on prevodi-bg.bg; it should not remain as a portfolio project.

---

### WORK Query Loop — Current State & Planned Change

**Current state (Verified — `patterns/projects.php` at `886bdcb`):**

| Property | Value |
|----------|-------|
| Post type | `project` CPT |
| `perPage` | **3** |
| `orderBy` | `menu_order` |
| `order` | ASC |
| Desktop grid | 3 columns (≥768px) |
| Mobile grid | 1 column (≤767px) |
| Card aspect ratio | 4:5 |
| Excerpt | 40 words (theme setting) |
| Taxonomy | `project_category` available via companion plugin |
| Section copy | Placeholder — "Recent Neural Prototypes" |

**Planned change (Phase 08):**

- `perPage`: **3 → 6**
- Replace placeholder WORK section heading/copy with real-project language

*Implemented in Phase 08 — see [Phase 08.4](#phase-084--work-query-loop-expansion) and [Phase 08.6](#phase-086--work-section-copy).*

---

### Case Study Architecture

| Item | Status |
|------|--------|
| Individual project URLs | **Technically possible** — `project` CPT is `publicly_queryable` (companion plugin) |
| `single-project.html` template | **Does not exist** — only `front-page.html` and `index.html` in theme |
| Reusable case-study pattern | **Does not exist** |
| Project metadata fields (GitHub, live URL, status) | **Do not exist** in CPT — status is editorial convention only |
| Case-study page implementation | **Future Phase 08+ task** |

**Not a blocker:** The absence of a single-project/case-study template did **not** block the initial six-project WORK grid. Case-study architecture is deferred to [Phase 09](#phase-09--single-project--case-study-architecture).

---

*Phase 08.1 preflight and WORK implementation are documented under [Phase 08](#phase-08--real-project-content--work-implementation).*

---

# Phase 08 — Real Project Content & WORK Implementation

**Status:** COMPLETE — WORK IMPLEMENTATION

Phase 08 delivered the approved six-project WORK portfolio: real WordPress `project` content, Featured Images, Query Loop expansion, responsive card alignment, production section copy, and final QA.

**WORK implementation is complete.** Single Project / Case Study architecture is **not** implemented — see [Phase 09](#phase-09--single-project--case-study-architecture).

---

## Phase 08.1 — Content Implementation Preflight

**Status:** COMPLETE — READ-ONLY AUDIT

A read-only preflight audit was performed before Phase 08 implementation began. The audit itself did **not** create or modify WordPress content.

**Initial preflight (August 2026):** Local database was unavailable; project inventory required verification when Local was running.

**Before implementation:** Local site was started; database connectivity was verified; six approved project posts, Query Loop configuration, and Featured Image requirements were confirmed.

| Item | Preflight finding |
|------|-------------------|
| Query Loop `perPage` | **3** (plan: 6) |
| Query Loop post type | `project` CPT |
| Ordering | `menu_order` ASC |
| Desktop / mobile grid | 3 columns / 1 column |
| `project_category` taxonomy | Available (companion plugin) |
| `single-project.html` | Does not exist |
| Featured images in theme repo | None — Media Library upload required |
| Case-study architecture | Separate future task (Phase 09) |

**Verdict:** READY — implementation proceeded after Local database and content requirements were verified.

---

## Phase 08.2 — Real Project Content

**Status:** COMPLETE

Six approved real projects are published in the Local WordPress database.

| # | Project | Category | Editorial status |
|---|---------|----------|------------------|
| 1 | PDF Carousel Footer WordPress Plugin | interface | LIVE |
| 2 | TablePress Responsive | interface | LIVE |
| 3 | NIKWEB.EU Portfolio — FSE Block Theme | interface | STABLE |
| 4 | WooCommerce Checkout Simplifier | commerce | STABLE |
| 5 | Barcode Generator & Reader | interface | STABLE |
| 6 | EcoWriter AI Agent | intelligence | **IN PROGRESS** |

**Verified content state:**

- All six posts: `post_status = publish`
- `menu_order` 1–6 per approved display order
- Approved Phase 07.3 excerpts applied
- Approved `project_category` terms assigned
- **EcoWriter** excerpt uses **IN PROGRESS** language — never LIVE, COMPLETE, or PRODUCTION

**Fictional projects — not published:**

| Project | State |
|---------|-------|
| Translation Agency | **NOT FOUND** in database |
| SynthPress Engine | **TRASH** (recoverable) |
| Lumina Commerce | **TRASH** (recoverable) |
| Neural Blocks | **TRASH** (recoverable) |

Trashed fictional posts were **not** permanently deleted.

---

## Phase 08.3 — Featured Images

**Status:** COMPLETE

All six published real project posts have Featured Images assigned.

| Property | Detail |
|----------|--------|
| Storage | WordPress **Media Library** (`wp-content/uploads/`) |
| Theme repository | **Not included** — not committed to GitHub |
| Aspect ratio | Portrait **4:5** presentation (1122×1402px verified at QA) |
| Frontend | All six resolve successfully — **0 broken images** at final QA |
| Placeholder reuse | **No** fictional placeholder image assigned to a real project |

Featured Images are WordPress content assets, not theme source files.

---

## Phase 08.4 — WORK Query Loop Expansion

**Status:** COMPLETE

**Commit:** `831c870` — `feat(work): expand project grid to six`

| Setting | Before | After |
|---------|--------|-------|
| `perPage` | **3** | **6** |

**Unchanged (Verified):**

| Setting | Value |
|---------|-------|
| `postType` | `project` |
| `orderBy` | `menu_order` |
| `order` | `asc` |
| Taxonomy filtering | **none** |
| `columnCount` | **3** (desktop) |
| Mobile layout | **1 column** (≤767px) |

The existing Query Loop and `np-projects-grid` block structure in `patterns/projects.php` was reused. No new grid system was created.

---

## Phase 08.5 — Project Card Alignment

**Status:** COMPLETE

**Commit:** `831c870` — responsive alignment CSS in `style.css`

### Root cause

- `.np-project-card__overlay` uses `justify-content: flex-end` — content stacks bottom-align per card.
- Different title line counts produced different stack heights.
- Hidden desktop excerpts (`opacity: 0`) originally remained in document flow with variable heights.
- Result: inconsistent vertical starting positions for category/title across cards (notably at tablet widths).

### Solution implemented

- Desktop (≥768px): collapse hidden excerpts from layout (`height: 0`); restore on `:hover` / `:focus-within`.
- Title `min-height` reserves space for multi-line wrapping plus underline pseudo-element.
- Responsive title-height tiers for 3-column widths:
  - **≥941px:** 2 lines
  - **768–940px:** 3 lines
  - **768–839px:** 4 lines
- Mobile (<768px): no title min-height rules — natural excerpt flow preserved.

### Verified results (Phase 08.6 QA)

| Viewport | Alignment |
|----------|-----------|
| Desktop 1280×900 | **0px** category/title delta (row 1) |
| Tablet 834×1024 | **0px** category/title delta (row 1) |
| Mobile 390×844 | Natural content flow — variable excerpt heights by design, not a defect |

---

## Phase 08.6 — WORK Section Copy

**Status:** COMPLETE

**Commit:** `4b6a02c` — `feat(work): update project section copy`

### Final production copy

| Element | Text |
|---------|------|
| Eyebrow | Selected Work |
| Heading | Production Systems |
| Status chip | 6 BUILDS · 2 LIVE |

Rendered uppercase via existing `text-transform: uppercase` theme styles.

### Retired placeholder strings

| Retired | Reason |
|---------|--------|
| `Project Archive` | Superseded by curated real-project framing |
| `Recent Neural Prototypes` | Fictional — contradicted verified GitHub-backed projects |
| `STATUS: [STABLE_BUILD_V2.0]` | Fictional — did not reflect LIVE / STABLE / IN PROGRESS mix |

The chip `6 BUILDS · 2 LIVE` is claim-safe: two verified live deployments (Projects 1–2 per Phase 07.2); six published portfolio entries total.

---

## Phase 08.7 — Final WORK Section QA

**Status:** COMPLETE — **PASS**

Read-only QA performed after commits `831c870` and `4b6a02c`.

### Desktop — 1280×900

- 6 cards · 3×2 grid · correct `menu_order`
- All Featured Images present · no horizontal overflow
- Card alignment **0px** delta · WORK copy correct

### Tablet — 834×1024

- 6 cards · 3 columns · correct order
- Alignment **0px** delta · no overflow

### Mobile — 390×844

- 6 cards · 1 column · excerpts visible
- No horizontal overflow · natural mobile spacing

### Additional verification

- Claim safety: **passed** — no unverified production claims
- EcoWriter: **IN PROGRESS** in excerpt
- Fictional projects: **not rendered**
- Broken images: **none**
- Issues: **no blocker / high / medium** (low-severity notes only — empty image alt, media filename typo)

---

## WORK Architecture Summary

| Layer | Final state |
|-------|-------------|
| Project CPT | 6 published real projects |
| Taxonomy | Interface / Commerce / Intelligence |
| Query Loop | `project` CPT, `perPage` 6 |
| Ordering | `menu_order` ASC |
| Desktop grid | 3 columns |
| Mobile grid | 1 column |
| Card ratio | 4:5 |
| Featured Images | 6 Media Library assets |
| Header copy | Selected Work |
| Section heading | Production Systems |
| Status chip | 6 BUILDS · 2 LIVE |

---

## Current Project Order

| # | Project | Status |
|---|---------|--------|
| 1 | PDF Carousel Footer WordPress Plugin | LIVE |
| 2 | TablePress Responsive | LIVE |
| 3 | NIKWEB.EU Portfolio — FSE Block Theme | STABLE |
| 4 | WooCommerce Checkout Simplifier | STABLE |
| 5 | Barcode Generator & Reader | STABLE |
| 6 | EcoWriter AI Agent | **IN PROGRESS** |

**Claim-safety reminders:**

- **LIVE** (Projects 1–2): verified production URLs only (metalenergy.bg, prevodi-bg.bg).
- **STABLE** (Projects 3–5): no verified public production deployment claimed.
- **IN PROGRESS** (EcoWriter): not production-deployed; no CMS publishing or scheduling claims.

---

## Phase 08 Git History

| Commit | Message | Scope |
|--------|---------|-------|
| `831c870` | `feat(work): expand project grid to six` | Query Loop `perPage` 3→6 · card alignment CSS |
| `4b6a02c` | `feat(work): update project section copy` | WORK header copy only |

WordPress content and Featured Images were applied in the Local environment — **not** in these Git commits.

---

## Phase 08 Boundary

**Phase 08 WORK implementation: COMPLETE.**

**Not implemented at Phase 08 closure (Phase 09 scope — now complete):**

- ~~Single Project template (`single-project.html`)~~ — **Implemented** (`683ec7b`)
- ~~Case Study page content~~ — **All six projects complete**
- ~~Project card title links~~ — **Implemented** (09.5)
- ~~GitHub / Live / Status custom metadata fields~~ — **Implemented** (companion plugin 09.4)
- Reusable case-study pattern — **In use** via Gutenberg `post_content`

See [Phase 09](#phase-09--single-project--case-study-architecture) for final status.

---

# Phase 09 — Single Project / Case Study Architecture

**Status:** **COMPLETE — Single Project / Case Study Architecture**

Phase 09 delivered the full single-project template stack, metadata-driven UI, six case-study pages, final presentation refinements, floating glass header, and responsive QA across all projects.

### Phase 09 sub-phase index

| Sub-phase | Title | Status |
|-----------|-------|--------|
| **09.2** | Single-project template skeleton | **Complete** |
| **09.3** | Reusable single-project patterns | **Complete** |
| **09.4** | Project metadata foundation (companion plugin) | **Complete** |
| **09.4.1** | Status meta REST fix | **Complete** |
| **09.5** | Metadata-driven UI + project linking | **Complete** |
| **09.6A** | Project metadata migration | **Complete** |
| **09.6B** | Project 1 case study | **Complete** |
| **09.6C** | Project 2 case study | **Complete** |
| **09.6D** | Project 3 case study | **Complete** |
| **09.6E** | Project 4 / Checkout Simplifier | **Complete** |
| **09.6F** | Project 5 / Barcode Generator | **Complete** |
| **09.6G** | Project 6 / EcoWriter | **Complete** |
| **09.7** | Final single-project presentation QA | **Complete** |
| **09.7.x** | Visual refinements (hero, tables, architecture flow, header) | **Complete** |
| **09.8** | Final single-project implementation commit | **Complete** — `71eff80` |
| **09.9** | Documentation sync | **Complete** |

### Final project matrix

| # | Project | Category | Status | Case Study |
|---|---------|----------|--------|------------|
| 1 | PDF Carousel Footer WordPress Plugin | Interface | LIVE | **Complete** |
| 2 | TablePress Responsive | Interface | LIVE | **Complete** |
| 3 | NIKWEB.EU Portfolio — FSE Block Theme | Interface | STABLE | **Complete** |
| 4 | WooCommerce Checkout Simplifier | Commerce | STABLE | **Complete** |
| 5 | Barcode Generator & Reader | Interface | STABLE | **Complete** |
| 6 | EcoWriter AI Agent | Intelligence | **IN PROGRESS** | **Complete** |

**Important:** **Case Study Complete** does **not** mean **Project Complete**. EcoWriter remains **IN PROGRESS** as the product/editorial status label. Do not describe EcoWriter as LIVE, COMPLETE, or PRODUCTION.

### Final single-project architecture (Verified — commit `683ec7b`, refined in `71eff80`)

**Template stack:**

```
templates/single-project.html
    ↓
single-project-hero (pattern)
    ↓
post-content (Gutenberg case study)
    ↓
single-project-links (pattern — GitHub / Live)
    ↓
single-project-nav (pattern — prev / back / next)
```

**Metadata-driven behavior:**

| Feature | Source |
|---------|--------|
| Status chip | `_np_project_status` via companion plugin |
| GitHub CTA | `_np_project_github_url` |
| Live CTA | `_np_project_live_url` |
| Claim-safe CTA logic | Empty/missing URLs suppress Live CTA rendering |

**Navigation:**

| Control | Behavior |
|---------|----------|
| Previous Project | Adjacent `project` by `menu_order` |
| Back to Work | Homepage `/#work` |
| Next Project | Adjacent `project` by `menu_order` |

Ordering uses WordPress **`menu_order`** on the `project` CPT.

**Companion plugin checkpoint:** `125ee15` — metadata fields `_np_project_status`, `_np_project_github_url`, `_np_project_live_url`.

### Final presentation features (Verified — commits `71eff80`, `e5016f3`)

| Feature | Description |
|---------|-------------|
| **Compact project hero** | Desktop/tablet **32/9** aspect ratio; mobile **16/9**; reduced hero spacing |
| **Mobile overflow prevention** | Page-level horizontal overflow eliminated at 390px (`8368dad`) |
| **Table presentation** | Shared content measure; fixed layout; Claim Safety **24/16/60**; two-column **35/65**; mobile containment |
| **Architecture flow** | Lightweight editorial inline flow; normal body typography; natural wrapping; tree-heavy lists vertical; mobile ↓ separators |
| **Floating glass header** | Inset floating panel; translucent glass layer with blur; rounded container; responsive inset |
| **Project-safe navigation anchors** | Header links use `/#about`, `/#work`, `/#stack`, `/#contact` from any page |

### Final floating header (Verified — commit `e5016f3`)

| Aspect | Implementation |
|--------|----------------|
| Container | Fixed, inset from viewport edges; max-width aligned to content composition |
| Glass layer | Semi-transparent `::before` with `backdrop-filter: blur()` and design-token fill |
| Content clearance | `--np-header-offset` on homepage and single-project main; `scroll-padding-top` for anchor targets |
| Navigation | Site-root fragment URLs (`/#section`) so header links resolve from project pages |
| Mobile menu | Glass overlay extends from floating header capsule; links use same anchor scheme |

Do **not** describe the header as a solid black full-width bar — the approved implementation is a **floating translucent glass panel**.

### Mobile overflow fix (Verified — commit `8368dad`)

Project pages tested at **390px** width with **zero page-level horizontal overflow** after overflow containment rules for post content, tables, and inline code.

### Final QA summary

Validated through browser-based visual/structural QA at:

| Viewport | Size |
|----------|------|
| Desktop | 1280 × 900 |
| Tablet | 834 × 1024 |
| Mobile | 390 × 844 |

**All six project pages:**

- HTTP 200
- One H1 per page
- Correct hero, metadata, and CTA logic
- Correct prev / back / next navigation
- No page-level horizontal overflow
- Consistent design system

**Homepage:**

- Six projects in correct `menu_order`
- Working project card links
- No page-level horizontal overflow

Structural QA does not claim pixel-perfect validation of every visual element unless explicitly verified in a sub-phase report.

---

## Phase 09.6 — Case Study Content Migration

**Status:** **COMPLETE**

| Project | Post ID | Case study | Status |
|---------|---------|------------|--------|
| 1 — PDF Carousel Footer WordPress Plugin | 17 | Inserted | **Complete** |
| 2 — TablePress Responsive | 18 | Inserted | **Complete** |
| 3 — NIKWEB.EU Portfolio — FSE Block Theme | 19 | Inserted | **Complete** |
| 4 — WooCommerce Checkout Simplifier | 20 | Inserted | **Complete** |
| 5 — Barcode Generator & Reader | 21 | Inserted | **Complete** |
| 6 — EcoWriter AI Agent | 22 | Inserted | **Complete** |

**Phase 09.6A — Project metadata population:** **Complete — PASS** (all six posts populated; verified via REST).

**Projects 1–3 migration:** Draft → insertion → visual QA completed in Phases 09.6B–09.6D (August 2026).

**Projects 5–6 migration:** Completed in Phases 09.6F–09.6G (August 2026).

---

## Phase 09.6E — WooCommerce Checkout Simplifier (Project #4)

**Status:** COMPLETE

Project #4 underwent a full product and architecture redesign in the plugin repository before portfolio case-study migration. The portfolio documents the **engineering evolution**, not only the final v2.0.0 product.

### Engineering evolution (historical record)

```
Legacy Field Remover (1.x)
    ↓
Initialization defect discovered (filter unregistered after refactor)
    ↓
Initialization fixed (1.0.x)
    ↓
Legacy checkout_fields behavior verified on classic checkout path
    ↓
Block Checkout incompatibility discovered
    ↓
WooCommerce native field visibility model researched (WC 9.6+)
    ↓
Checkout Simplifier 2.0.0 redesign
    ↓
Block Checkout functional verification
    ↓
Plugin release + Project #4 portfolio migration
```

### Phase 09.6E sub-phase record

| Sub-phase | Title | Status |
|-----------|-------|--------|
| **09.6E.1** | Legacy compatibility investigation / case-study draft | **Complete** (superseded by redesign) |
| **09.6E.1A** | Functional/source audit | **Complete — legacy path BROKEN** (init defect confirmed) |
| **09.6E.1B** | Initialization fix | **Complete — PASS** |
| **09.6E.1B.1** | Patch verification | **Complete — PASS** |
| **09.6E.1C** | Legacy checkout functional verification | **Complete — PASS** (`vibe-shoplocal.local`, classic filter path) |
| **09.6E.2A** | Block Checkout architecture audit | **Complete** |
| **09.6E.2B** | Native visibility model audit | **Complete — READY FOR IMPLEMENTATION** |
| **09.6E.2C** | Checkout Simplifier 2.0.0 implementation | **Complete — PASS** |
| **09.6E.2D** | Block Checkout functional verification | **Complete — PASS** |
| **09.6E.2D.1** | Clean-theme merchant override verification | **INCONCLUSIVE** (no clean test environment) |
| **09.6E.2E** | Plugin README + CHANGELOG | **Complete — PASS** |
| **09.6E.2F** | Plugin release commit + push | **Complete — `d45e4ce`** |
| **09.6E.2G** | Project #4 case-study draft | **Complete — APPROVED** |
| **09.6E.2H** | WordPress content migration | **Complete — PASS** |
| **09.6E.2I** | Final visual QA | **Complete — PASS** |
| **09.6E.3** | Portfolio documentation update | **Complete** (this section) |

### Plugin repository checkpoint

| Item | Value |
|------|-------|
| **Repository** | [github.com/nikdjem/woocommerce_field_remover_plugin](https://github.com/nikdjem/woocommerce_field_remover_plugin) |
| **Release commit** | `d45e4ce` — `feat: redesign WooCommerce Checkout Simplifier` |
| **Version** | **2.0.0** |
| **Product name** | WooCommerce Checkout Simplifier |
| **README** | Updated (Evolution section, Block Checkout scope) |
| **CHANGELOG** | Created (2.0.0 + legacy 1.0.x history) |

**Note:** Repository filename remains `woocommerce_field_remover_plugin` for migration compatibility. Portfolio slug unchanged.

### v2.0.0 architecture (current product)

PHP-only plugin using WooCommerce native global visibility options. **Activation-only defaults**; existing merchant settings preserved; **no runtime force override**.

**Supported fields:**

| Field | WooCommerce option | Default |
|-------|-------------------|---------|
| Company | `woocommerce_checkout_company_field` | `hidden` |
| Address Line 2 | `woocommerce_checkout_address_2_field` | `optional` |
| Phone | `woocommerce_checkout_phone_field` | `optional` |

Allowed values: `required`, `optional`, `hidden`.

**Protected fields (intentionally not configured in v2):** Country, Address Line 1, City, State, Postcode, First Name, Last Name, Email.

**Not in v2 scope:** Legacy `woocommerce_checkout_fields` manipulation; State / Shipping State removal.

### Functional verification (Verified)

**Environment:** `vibe-shoplocal.local` — WordPress 7.1, WooCommerce 11.0.1, Block Checkout, theme `vibe-store`.

| Check | Result |
|-------|--------|
| Plugin activation | Pass |
| Existing stored options preserved on activation | Pass |
| Company hidden when configured hidden | Pass |
| Address Line 2 optional when configured optional | Pass |
| Phone required when existing option required | Pass |
| Protected fields untouched (State remains present) | Pass |
| Block Checkout renders; no PHP fatal errors | Pass |
| No runtime force override by plugin | Pass (source verified) |

**Merchant override persistence (clean theme):** **INCONCLUSIVE** — Phase 09.6E.2D.1. The active `vibe-store` theme forces Company and Phone option values on every `init`. This is an **environment limitation**, not a Checkout Simplifier defect. Source review confirms the plugin performs `update_option()` only inside the activation flow.

### Portfolio Project #4 — current state

| Field | Value |
|-------|-------|
| **Post ID** | 20 |
| **Title** | WooCommerce Checkout Simplifier |
| **Previous title** | WooCommerce Field Remover Plugin |
| **Slug** | `woocommerce-field-remover-plugin` (**unchanged**) |
| **Category** | Commerce |
| **Status metadata** | STABLE |
| **GitHub** | https://github.com/nikdjem/woocommerce_field_remover_plugin |
| **Live URL** | *(empty — no Live CTA rendered)* |
| **menu_order** | 4 |
| **Featured image** | Media ID 36 (**unchanged**) |
| **post_content** | 15 H2 sections (14 major + Claim Safety); Evolution section included |
| **Excerpt** | Updated to v2 Block Checkout description |

**Visual QA (09.6E.2I):** **PASS** — hero, STABLE chip, GitHub CTA, no Live CTA, responsive behavior, tables, architecture code block, navigation, accessibility, claim safety, consistency with Projects 1–3.

**Known LOW issues (non-blocking):**

- Excerpt punctuation: em dashes normalized to hyphens by WordPress on save.
- Claim Safety table may horizontal-scroll on narrow mobile (WordPress core table behavior; acceptable).

### Phase 09 closure

**Phase 09 overall:** **COMPLETE** — single-project architecture, all six case studies, final presentation refinements, floating glass header, and responsive QA are finished.

**Documentation:** Phase 09.9 synchronized `PROJECT-DOCUMENTATION.md` and `CHANGELOG.md` with the Phase 09 implementation state. Phase 10 documentation sync completed in Phase 10.8B.

---

# Phase 10 — Homepage & Portfolio Refinement

**Status:** **COMPLETE — Homepage frozen (Phase 10.7)**

Phase 10 refined homepage positioning, copy, and section structure after Phase 09 case-study architecture was complete. The homepage is **not in progress** — it was frozen after Phase 10.7 final UX/visual audit.

**Scope:** Hero → About → Work → Stack → Build Focus → Contact → Footer

### Phase 10 sub-phase index

| Sub-phase | Title | Status |
|-----------|-------|--------|
| **10.2** | P1/P2 screenshot capture + ingestion | **Cancelled** |
| **10.3** | Screenshot system removed from case studies | **Complete** |
| **10.5** | P3/P4/P5 public case-study editorial refinement | **Complete** |
| **10.6.1** | Hero copy finalized | **Complete** |
| **10.6.2** | About copy finalized | **Complete** |
| **10.6.3** | Stack content finalized | **Complete** |
| **10.6.4** | Testimonials removed → Build Focus | **Complete** |
| **10.7** | Homepage final UX/visual audit → **FREEZE HOMEPAGE** | **Complete** |
| **10.7.1** | Footer real links + placeholder cleanup | **Complete** |
| **10.7.2** | Build Focus pattern rename + dead testimonial CSS cleanup | **Complete** |
| **10.8A** | Final repository integrity audit | **Complete** |
| **10.8B** | Documentation synchronization | **Complete** |

### Key outcomes

- Grounded Hero copy and CTAs aligned with WordPress engineering positioning
- About editorial refinement — 5+ years, AI-assisted workflows, future exploratory direction
- Evidence-based Stack labels and Exploring line
- Fictional Testimonials removed; Build Focus introduced
- Footer placeholder links removed; real GitHub and LinkedIn URLs only
- Homepage visually and UX **frozen**

### Current homepage composition

Source: `templates/front-page.html`

```
Header (template part)
  → Hero
  → About
  → Work (projects)
  → Stack
  → Build Focus
  → Contact
Footer (template part)
```

### Hero *(frozen)*

| Element | Current value |
|---------|---------------|
| **H1** | **ARCHITECTING INTELLIGENT WORDPRESS ECOSYSTEMS** *(permanently frozen — do not change)* |
| Chip | PHP · GUTENBERG · WOOCOMMERCE |
| Body | Grounded WordPress plugin/theme/store copy; mentions AI-assisted drafting as a side prototype |
| Primary CTA | Start a Project → `#contact` |
| Secondary CTA | View My Work → `#work` |

*Historical (Pre-Phase 10): sci-fi chip **System Protocol: Active**; CTAs **Initialize Project** / **View Matrix**.*

### About *(frozen)*

- **5+ years** of WordPress ecosystem experience (not “a decade” or “legacy” framing)
- **AI-assisted workflows** — not “neural processing” or “data flows”
- **Future direction (exploratory):** AI, Vibe Coding, n8n, and Claude applied to practical WordPress and WooCommerce solutions — documented as emerging portfolio direction, not production service claims
- GitHub Repository CTA → `https://github.com/nikdjem`

### Work *(frozen)*

Six case studies (WordPress `project` CPT — content in database, not theme repo):

| # | Project |
|---|---------|
| 1 | PDF Carousel Footer WordPress Plugin |
| 2 | TablePress Responsive |
| 3 | NIKWEB.EU Portfolio — FSE Block Theme |
| 4 | WooCommerce Checkout Simplifier |
| 5 | Barcode Generator & Reader |
| 6 | EcoWriter AI Agent |

Pattern: `patterns/projects.php` — Query Loop, six projects, `menu_order` ASC.

### Stack *(frozen)*

**Main tiles (in order):**

1. WordPress / PHP
2. Gutenberg / FSE
3. WooCommerce
4. JavaScript
5. AI Automations

**Exploring:** `Exploring: n8n · Claude · Vibe Coding`

Pattern: `patterns/stack.php`

*Historical (Pre-Phase 10): PHP / WP, React / JS, AI Prompting, REST API, Gutenberg — superseded in Phase 10.6.3.*

### Build Focus *(frozen)*

Replaced the former Testimonials section in Phase 10.6.4.

| Property | Value |
|----------|-------|
| Pattern file | `patterns/build-focus.php` |
| Slug | `nikolay-portfolio/build-focus` |
| Section class | `np-build-focus` |
| Eyebrow | Build Scope |
| H2 | BUILDING FOR THE WEB |

**Tiles:** WordPress Plugins · WooCommerce Extensions · FSE Block Themes · AI Automations

**Summary:** Practical WordPress and WooCommerce builds in PHP and JavaScript — modern block architecture, with emerging AI automation workflows.

CSS: scoped `.np-build-focus` grid/card rules in `style.css` (Stack-matched label-only cards).

### Testimonials — removal *(historical decision)*

The former `patterns/testimonials.php` section contained **fictional/unsupported social proof** (fake companies, quotes, and metrics). It was **removed in Phase 10.6.4** and replaced by **Build Focus**.

| Item | Pre-Phase 10 | Current |
|------|--------------|---------|
| Pattern file | `patterns/testimonials.php` | **Removed** |
| Pattern slug | `nikolay-portfolio/testimonials` | `nikolay-portfolio/build-focus` |
| CSS classes | `np-testimonials`, `np-testimonial-*` | **Removed** — `.np-build-focus` only |

Pattern rename formalized in Phase 10.7.2 (`testimonials.php` → `build-focus.php`).

*Historical design reference only:* `design/final/index.html` still contains Pre-Phase 10 Testimonials markup — not loaded at runtime.

### Footer *(current)*

| Link | URL |
|------|-----|
| GitHub | https://github.com/nikdjem |
| LinkedIn | https://www.linkedin.com/in/nikolaidjemerenovv/ |

**Removed:** Layers, Dribbble, and all placeholder `href="#"` footer links (Phase 10.7.1).

### Screenshot system *(cancelled)*

- Phase 10.2 P1/P2 screenshot capture and ingestion work was **cancelled**
- Phase 10.3 removed screenshot galleries from case-study architecture — **no screenshot galleries remain**
- `screenshot.png` in the theme directory is **untracked** and **not part of the final tracked repository** — not required portfolio content
- Case studies do not depend on theme-committed screenshots; Featured Images remain in the WordPress Media Library

### Phase 10 theme commit *(committed — `88bc077`)*

At Phase 10.8B closure, the following theme changes were prepared locally and pending commit. They were committed in `88bc077` — `Finalize homepage: Hero, About, Stack, Build Focus, footer links`:

| File | Change |
|------|--------|
| `patterns/hero.php` | Final Hero chip, body, CTAs |
| `patterns/about.php` | Final About copy |
| `patterns/stack.php` | Final Stack labels + Exploring line |
| `patterns/build-focus.php` | New Build Focus pattern |
| `patterns/testimonials.php` | Deleted |
| `templates/front-page.html` | Build Focus slug reference |
| `style.css` | Build Focus CSS; testimonial CSS removed |
| `parts/footer.html` | Real social links |

### Phase 10 closure

**Phase 10 overall:** **COMPLETE** — homepage content, Build Focus, footer links, and visual/UX freeze are finished. Documentation synchronized in Phase 10.8B and committed in `0e1098d`.

---

# Phase 11 — SEO, Accessibility, and Performance Foundation

**Status:** **COMPLETE** — committed `28953e3` (August 2026)

Phase 11 delivered the native SEO module, accessibility refinements, performance-oriented image handling, and footer copyright behavior without adding third-party SEO plugins.

### Verified deliverables

| Area | Implementation |
|------|----------------|
| SEO | `includes/seo.php` — titles, meta descriptions, Open Graph, canonical URLs, JSON-LD |
| Images | Project-hero sizes and audited crop origins in `functions.php`; optimized hero/about assets |
| Accessibility | Contact form ARIA and validation script; image lazy loading and dimensions |
| Footer | Dynamic copyright year via `wp_date('Y')` in `functions.php` / `parts/footer.html` |

Local baseline verified before Phase 12 production work.

---

# Phase 12 — Production Deployment

**Status:** **COMPLETE** — production WordPress setup, code deployment, content migration, media migration, restoration, and visual verification **COMPLETE**

Phase 12 delivered production hosting at [https://nikweb.eu](https://nikweb.eu), Git-based theme and plugin deployment, LocalWP → production project migration, and final database/media restoration. The portfolio is **operational on production** — six published projects render on the homepage Work grid and on single-project case-study pages.

### Production architecture (ongoing workflows)

Phase 12 established two separate paths. **Do not conflate them.**

#### Code / development

Applies to: WordPress theme, companion plugin, PHP, CSS, JavaScript, templates, parts, patterns, `theme.json`, plugin functionality, and all future code changes.

```
LocalWP
   ↓
Git commit
   ↓
GitHub
   ↓
cPanel Git
   ↓
Production
```

#### Content / database

Applies to: Projects, project content, project categories, project meta, pages, normal WordPress content, and settings intentionally managed in WordPress Admin.

```
WordPress Admin
   ↓
Production Database
```

#### Media

Applies to: Featured images, attachment files, and uploads added through the Media Library.

```
WordPress Media Library
   ↓
Production uploads
```

**Normal future content changes do not require GitHub deployment.** Adding, editing, or removing a project is done in WordPress Admin on production.

### Two repositories (code deployment)

| Repository | Role | Production path |
|------------|------|-----------------|
| [nikdjem/nikolay-portfolio](https://github.com/nikdjem/nikolay-portfolio) | Theme | `/home/nikwebeu/public_html/wp-content/themes/nikolay-portfolio/` |
| [nikdjem/nikolay-portfolio-projects](https://github.com/nikdjem/nikolay-portfolio-projects) | Companion plugin v1.0.2 | `/home/nikwebeu/public_html/wp-content/plugins/nikolay-portfolio-projects/` |

### cPanel Git deployment (theme)

| Item | Value |
|------|-------|
| cPanel clone path | `/home/nikwebeu/git/nikolay-portfolio` |
| Deployment config | `.cpanel.yml` (commit `327ffec`) |
| Deploy method | cPanel Git — explicit copy of runtime theme paths only |
| Deploy target | `/home/nikwebeu/public_html/wp-content/themes/nikolay-portfolio/` |

The companion plugin uses its own repository and `.cpanel.yml` (plugin repo commit `8283411`). It is **not** deployed from the theme repository.

### Production migration (September 2026)

The LocalWP → production content migration used a **custom selective migration package** (six published `project` CPT entries, featured attachments, and hand-audited WebP derivatives). The package was preflight-tested and executed successfully on production.

Final database and media restoration was completed using **All-in-One WP Migration (AIOWM)**. The AIOWM restore completed successfully. Production now visibly renders the portfolio projects correctly.

| Migration step | Status |
|----------------|--------|
| Production WordPress installation | **COMPLETE** |
| Custom migration package dry-run / execute | **COMPLETE** |
| Six project posts on production | **COMPLETE** |
| Project metadata and categories | **COMPLETE** |
| Featured images and attachment media | **COMPLETE** |
| AIOWM database + media restoration | **COMPLETE** |
| Production visual verification | **COMPLETE** |

**Important distinction:** AIOWM was used for **migration/restoration of the database and media**. Theme and plugin **files were not intended to be maintained through AIOWM**. Theme and plugin code remain **Git-based** (GitHub → cPanel Git → Production).

### All-in-One WP Migration — role and limits

**AIOWM is not part of the normal daily development or deployment workflow.**

| Use case | Normal workflow | AIOWM required? |
|----------|-----------------|-----------------|
| Theme / plugin code change | GitHub → cPanel Git → Production | **No** |
| CSS / JS / PHP change | GitHub → cPanel Git → Production | **No** |
| Add a new project | WordPress Admin → Production DB | **No** |
| Edit or remove a project | WordPress Admin → Production DB | **No** |
| Upload a featured image | WordPress Media Library → Production uploads | **No** |
| Full-site backup | AIOWM export | Optional utility |
| Disaster recovery / site restore | AIOWM import | Optional utility |
| Initial LocalWP → production migration | Custom package + AIOWM restore | **Completed (one-time)** |

Do **not** state that AIOWM is mandatory for future content updates.

### Project management workflow (production)

#### Adding a new project

```
WordPress Admin → Projects → Add New
→ enter content / meta / category / featured image → Publish
```

No AIOWM required. No GitHub commit required.

#### Removing an old project

```
WordPress Admin → Projects → Trash → Delete Permanently (if required)
```

No AIOWM required. No GitHub commit required.

#### Changing project functionality or structure

Examples: project template, Work cards, Project CPT logic, metadata fields, filtering, PHP, CSS, JavaScript.

```
LocalWP → code change → Git commit → GitHub → cPanel Git → Production
```

### Production status matrix (final)

| Area | Status | Notes |
|------|--------|-------|
| WordPress on nikweb.eu | **COMPLETE** | Provisioned and operational |
| Theme code deployment | **COMPLETE** | cPanel Git, commit `327ffec` |
| Theme activation | **COMPLETE** | `nikolay-portfolio` active |
| Companion plugin code deployment | **COMPLETE** | Separate repo; v1.0.2 |
| Companion plugin activation | **COMPLETE** | Plugin active |
| Project CPT availability | **COMPLETE** | Registered on production |
| Project content on production | **COMPLETE** | Six published projects |
| Database migration | **COMPLETE** | Custom migration package + AIOWM restore |
| Uploads / media migration | **COMPLETE** | Featured images and derivatives |
| Production visual verification | **COMPLETE** | Work grid and case-study pages render correctly |

### Production project inventory

The six LocalWP projects are published on production with the same slugs, metadata, and case-study content established in Phases 08–09:

| # | Project | Category | Editorial status |
|---|---------|----------|------------------|
| 1 | PDF Carousel Footer WordPress Plugin | interface | LIVE |
| 2 | TablePress Responsive | interface | LIVE |
| 3 | NIKWEB.EU Portfolio — FSE Block Theme | interface | STABLE |
| 4 | WooCommerce Checkout Simplifier | commerce | STABLE |
| 5 | Barcode Generator & Reader | interface | STABLE |
| 6 | EcoWriter AI Agent | intelligence | **IN PROGRESS** |

EcoWriter remains **IN PROGRESS** as the product/editorial status label on production. Do not describe EcoWriter as LIVE, COMPLETE, or PRODUCTION.

---

*This document is maintained as the project evolves. Update the relevant phase section when work is completed.*
