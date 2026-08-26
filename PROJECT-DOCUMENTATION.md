# NIKWEB.EU Portfolio — Project Documentation

**Project:** Nikolay Portfolio WordPress Theme  
**Brand:** NIKWEB.EU  
**Repository:** [nikdjem/nikolay-portfolio](https://github.com/nikdjem/nikolay-portfolio)  
**Theme path:** `wp-content/themes/nikolay-portfolio`  
**Theme version:** 0.1.3
**Last updated:** August 2026

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
| **08** | [Real Project Content Implementation](#phase-08--real-project-content-implementation) | **Ready — implementation not started** |

---

## Repository State (Current)

This section records the Git state after Phase 07 discovery documentation. **Phase 08 implementation has not started.**

| Item | Value |
|------|-------|
| **Baseline commit** | `886bdcb` — `feat(home): complete phase 06 visual refinement` |
| **Branch** | `main` |
| **Working tree** | **Clean** (verified during Phase 08.1 preflight) |
| **Sync with origin** | **Yes** — `main...origin/main` at preflight audit |
| **Phase 07** | Discovery complete — documented |
| **Phase 08** | Ready — implementation not started |

Phase 06 uncommitted refinements (navigation, branding, About, CSS) were incorporated into commit `886bdcb`. The WORK section Query Loop, `project` CPT, and card styling remain in place but still display placeholder/fictional content until Phase 08.

**[REQUIRES VERIFICATION]:** Current WordPress `project` post inventory — Local database was unavailable during Phase 08.1 preflight; existing posts must be verified when Local is running.

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

**Companion plugin:** Separate repository `https://github.com/nikdjem/nikolay-portfolio-projects.git`, commit `54c163e` — registers `project` CPT and `project_category` taxonomy for the Work section Query Loop.

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
- Production hosting and domain plan
- Exact WordPress patch version (7.0.4 cited in development notes, not stored in Git)

### Known Documentation Gaps

- Pre-Git planning notes
- WordPress admin configuration (static front page assignment)
- Database content for placeholder projects
- Formal QA sign-off documents (audit verdicts exist in development session notes only)

---

## Phase 02 — UX & Information Architecture

**Status:** Complete

### Verified — Implemented Homepage Structure

Single-page portfolio composed in `templates/front-page.html`:

| Order | Section | Anchor | Pattern slug |
|-------|---------|--------|--------------|
| 1 | Hero | _(none)_ | `nikolay-portfolio/hero` |
| 2 | About | `#about` | `nikolay-portfolio/about` |
| 3 | Work (Projects) | `#work` | `nikolay-portfolio/projects` |
| 4 | Stack | `#stack` | `nikolay-portfolio/stack` |
| 5 | Testimonials | _(none)_ | `nikolay-portfolio/testimonials` |
| 6 | Contact | `#contact` | `nikolay-portfolio/contact` |

Header and footer are template parts (`parts/header.html`, `parts/footer.html`).

**CTA hierarchy:**

| CTA | Location | Target |
|-----|----------|--------|
| Hire Me | Header (desktop nav) | `#contact` |
| Initialize Project | Hero primary button | `#contact` |
| View Matrix | Hero secondary button | `#work` |
| GitHub Repository | About section | `https://github.com/nikdjem` (uncommitted) |

**Mobile navigation:** Core Navigation block with `overlayMenu: mobile`, hamburger toggle, overlay below header. Theme overrides core 600px breakpoint to **768px** in CSS.

**Work ↔ project CPT:** Section id `#work`; Query Loop queries `project` post type; companion plugin rewrite slug is `work`. **No single-project theme template exists** — only `front-page.html` and `index.html` are in `templates/`. Plugin sets `publicly_queryable: true` but theme does not yet render individual case studies.

**No "Services" section** — the fourth nav item is **Stack**, not Services.

### Original Wireframe UX

Source: `design/wireframe/index.html`, `design/wireframe/DESIGN.md`

**Section order:** Hero → Bio → Project Archive → Capabilities → Testimonials → Contact

**Navigation labels:** Hero / Philosophy / Projects / Stack (placeholder `#` hrefs; no Contact in desktop nav)

**Brand:** "Amethyst Portfolio"

**CTA:** "Hire" button

Wireframe uses 1px section dividers — **not implemented** in final theme (aligned with final design "no-line" rule).

### Final Stitch UX

Source: `design/final/index.html`

**Section order:** Hero → About → Work (projects) → Stack → Testimonials → Contact

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
│   ├── testimonials.php
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

**Theme consumption:** Query Loop in `patterns/projects.php` — `postType: project`, `perPage: 3`, `orderBy: menu_order`, 3-column grid.

**Single-project template:** **Does not exist.** No `single-project.html` or equivalent in `templates/`. Individual project URLs are not yet part of the theme presentation layer.

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
| `3a6654f` | Testimonials pattern |
| `eb312ae` | Contact pattern + REST endpoint |
| `0315115` | Footer template part |
| `a6c0a14` | Responsive visual alignment |
| `53e66a1` | Hero heading layout fix |

### Section Summaries

**Hero** (`patterns/hero.php`): Full-bleed Cover, local `assets/images/hero.jpg`, status chip, display heading with gradient word, Initialize Project + View Matrix CTAs.

**About** (`patterns/about.php`): Two-column biography, local `assets/images/about.jpg`, grayscale image treatment. Uncommitted: GitHub Repository button; experience stat badge removed.

**WORK** (`patterns/projects.php`): Section `#work`, Query Loop, 3 project cards, status chip, section heading "Recent Neural Prototypes". Content is **placeholder/fictional** — not final portfolio content.

**Stack** (`patterns/stack.php`): Technology grid — 5 columns desktop, 2 columns mobile.

**Testimonials** (`patterns/testimonials.php`): Two-column quote grid.

**Contact** (`patterns/contact.php`): REST-powered form, honeypot, styled inputs, submit button.

**Footer** (`parts/footer.html`): Text links, copyright.

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
| 4 | WooCommerce Field Remover Plugin | commerce | STABLE |
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

- WooCommerce Field Remover deployed on a live store
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

**Planned change (Phase 08 — not implemented):**

- `perPage`: **3 → 6**
- Replace placeholder WORK section heading/copy with real-project language

---

### Case Study Architecture

| Item | Status |
|------|--------|
| Individual project URLs | **Technically possible** — `project` CPT is `publicly_queryable` (companion plugin) |
| `single-project.html` template | **Does not exist** — only `front-page.html` and `index.html` in theme |
| Reusable case-study pattern | **Does not exist** |
| Project metadata fields (GitHub, live URL, status) | **Do not exist** in CPT — status is editorial convention only |
| Case-study page implementation | **Future Phase 08+ task** |

**Not a blocker:** The absence of a single-project/case-study template does **not** block the initial six-project WORK grid. Phase 08 focuses on WordPress content, featured images, and Query Loop expansion first.

---

### Phase 08.1 — Content Implementation Preflight

**Status:** COMPLETE — read-only audit

A read-only preflight audit was performed before Phase 08 implementation. **No theme or database changes were made.**

#### Findings

| Item | Result |
|------|--------|
| Repository baseline | **Clean** at `886bdcb`; synced with `origin/main` |
| WORK Query Loop `perPage` | **3** (plan: 6) |
| Query Loop post type | `project` CPT |
| Ordering | `menu_order` ASC |
| Desktop grid | 3 columns |
| Mobile grid | 1 column |
| Card ratio | 4:5 |
| `project_category` taxonomy | **Available** (companion plugin) |
| `single-project.html` template | **Does not exist** |
| Project featured images in repository | **None verified** — `assets/images/` contains only `hero.jpg`, `about.jpg` |
| Local WordPress database | **Unavailable** during audit (WP-CLI connection failed — Local site likely stopped) |
| WordPress project inventory | **[REQUIRES VERIFICATION]** when Local is running |
| Theme/database modifications during preflight | **None** |

**Related note (outside theme repo):** Companion plugin at `wp-content/plugins/nikolay-portfolio-projects` showed uncommitted modification to `nikolay-portfolio-projects.php` at HEAD `54c163e` — separate Git repository; not part of theme baseline `886bdcb`.

**Verdict:** READY WITH HIGH-PRIORITY INPUTS — featured images, live/staging screenshots, EcoWriter scope verification, and running Local database required before Phase 08 implementation.

---

# Phase 08 — Real Project Content Implementation

**Status:** READY — IMPLEMENTATION NOT STARTED

Phase 08 will implement the approved real-project content defined in Phase 07. **Phase 08 discovery/preflight (Phase 08.1) is complete.** Phase 08 **implementation has not started** — no project posts created, no placeholders removed, no Query Loop changes committed.

---

### Planned Implementation Sequence

1. Start Local / verify database
2. Audit current project posts
3. Identify fictional posts
4. Remove/trash approved placeholders (Translation Agency, SynthPress Engine, Lumina Commerce, Neural Blocks — verify presence first)
5. Create/update six real project posts
6. Assign categories (`interface` ×4, `commerce` ×1, `intelligence` ×1)
7. Set `menu_order` 1–6 per approved order
8. Add approved excerpts (25–45 words each)
9. Prepare/upload six featured images (4:5 aspect)
10. Update Query Loop `perPage` 3 → 6 in `patterns/projects.php`
11. Replace placeholder WORK section copy
12. Visual QA (2×3 desktop grid, 6×1 mobile)
13. Content QA (titles, excerpts, categories, menu_order)
14. Claim-safety QA (no unverified live URLs or metrics; EcoWriter IN PROGRESS)
15. Review Git diff
16. Commit and push after approval

---

### Phase 08 Boundaries

| Scope | Status |
|-------|--------|
| Phase 07 discovery (07.1–07.3) | **Complete — documented** |
| Phase 08.1 preflight | **Complete — read-only audit** |
| Phase 08 implementation | **NOT STARTED** |
| WordPress project posts created/deleted | **NOT YET** |
| Query Loop `perPage` change | **NOT YET** |
| Featured images uploaded | **NOT YET** |
| Case-study templates/patterns | **Future task** (not required for initial WORK grid) |

**Publication gate:** Do not go live until HIGH-priority inputs (six featured images, live screenshots for Projects 1–2, EcoWriter scope audit, WooCommerce staging captures) are supplied and the claim-safety register is cleared.

---

*This document is maintained as the project evolves. Update the relevant phase section when work is completed.*
