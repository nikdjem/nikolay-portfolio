# NIKWEB.EU Portfolio — Project Documentation

**Project:** Nikolay Portfolio WordPress Theme  
**Brand:** NIKWEB.EU  
**Repository:** [nikdjem/nikolay-portfolio](https://github.com/nikdjem/nikolay-portfolio)  
**Theme path:** `wp-content/themes/nikolay-portfolio`  
**Current theme version:** 0.1.3  
**Last updated:** August 2026

---

## Document Purpose

This file is the long-form project record for the NIKWEB.EU portfolio website. It tracks decisions, phases, architecture, and evolution over time. For a short public overview, see [README.md](./README.md). For release-level changes, see [CHANGELOG.md](./CHANGELOG.md).

---

## Phase Index

| Phase | Title | Status |
|-------|-------|--------|
| **01** | [Project Foundation & Discovery](#phase-01--project-foundation--discovery) | **Documented** |
| 02 | UX & Information Architecture | Planned |
| 03 | Visual Design & Design System | Planned |
| 04 | Stitch → Cursor Workflow | Planned |
| 05 | WordPress / FSE Architecture | Planned |
| 06 | Initial Implementation | Planned |
| 07 | Navigation & Responsive Development | Planned |
| 08 | Visual QA | Planned |
| 09 | Real Project Integration | Planned |
| 10 | WORK Section Redesign | Planned |
| 11 | Single Project Case Study System | Planned |
| 12 | Final QA | Planned |
| 13 | Deployment | Planned |
| 14 | Lessons Learned | Planned |
| 15 | Future Improvements | Planned |

---

## Phase 01 — Project Foundation & Discovery

### Project Overview

NIKWEB.EU is a custom WordPress Full Site Editing (FSE) block theme built as a professional portfolio for Nikolay. The site presents a dark, editorial, tech-forward visual identity — **"The Amethyst Monolith"** — and showcases WordPress engineering capability through a structured homepage: Hero, About, Work (Projects), Stack, Testimonials, and Contact.

The project is developed locally (Local WP environment) and version-controlled on GitHub. A companion plugin (`nikolay-portfolio-projects`) provides the `project` custom post type for the Work section Query Loop.

### Primary Objectives

1. **Establish a distinctive portfolio brand** under NIKWEB.EU that communicates high-performance WordPress development.
2. **Build a maintainable FSE block theme** using WordPress 7.0, `theme.json` design tokens, and block patterns — not page builders.
3. **Create a design-to-code pipeline** from wireframe → Stitch/final design → Cursor implementation.
4. **Deliver a production-ready single-page portfolio** with responsive navigation, accessible interactions, and real project content integration.
5. **Document the process** so future phases (WORK redesign, case studies, deployment) can proceed without losing context.

### Portfolio Positioning

| Dimension | Direction |
|-----------|-----------|
| **Audience** | Potential clients, agencies, and technical collaborators evaluating WordPress/FSE capability |
| **Tone** | Authoritative, precise, "technical editorial" — not generic agency template |
| **Visual identity** | Dark amethyst / synth-cyber; zero border-radius; Space Grotesk; uppercase display type |
| **Differentiator** | Custom FSE architecture, design-system discipline, neural/tech narrative without cliché neon cyberpunk |
| **Primary CTA** | Hire Me → Contact section |
| **Secondary CTA** | Initialize Project (Hero), GitHub Repository (About) |

### Project Scope

**In scope (theme):**

- Custom FSE block theme (`nikolay-portfolio`)
- Homepage template with registered block patterns
- Header, footer template parts
- Global design tokens in `theme.json`
- Section-specific CSS in `style.css`
- Mobile/tablet responsive navigation
- Contact form (REST API with nonce, honeypot, rate limiting)
- Project archive via Query Loop + companion plugin CPT

**Out of scope (Phase 01):**

- E-commerce, blog, multi-language
- CMS-managed navigation menus (hardcoded Navigation block in header)
- Third-party page builders
- Production hosting and CI/CD (deferred to Phase 13)

### Development Philosophy

1. **Tokens first** — Colors, typography, spacing, and shadows live in `theme.json`. CSS handles only what blocks cannot express (filters, pseudo-elements, complex hover states).
2. **Minimal diffs** — Each change should be scoped. No unrelated refactors.
3. **Reuse Gutenberg** — Prefer core Navigation, Query Loop, Cover, and Group blocks over custom PHP templates.
4. **Preserve the visual language** — Sharp corners, tonal layering, grayscale imagery with hover reveal, amethyst accent (`#7b2cbf`).
5. **Document as we go** — Phases, decisions, and deviations are recorded here and in `CHANGELOG.md`.
6. **No commits unless requested** — Development may proceed with unstaged local changes during active iteration.

### Primary Development Tools

| Tool | Role |
|------|------|
| **Local WP** | Local development environment (`nikolay-portfolio.local`) |
| **WordPress 7.0** | CMS + FSE block editor |
| **Cursor** | AI-assisted IDE for theme development |
| **Git / GitHub** | Version control (`nikdjem/nikolay-portfolio`) |
| **Stitch (Google)** | Design reference → `design/final/` |
| **Edge DevTools** | Responsive QA and accessibility checks |
| **PHP 8.1+** | Theme and plugin runtime |

### Repository

- **Remote:** `https://github.com/nikdjem/nikolay-portfolio`
- **Theme URI (style.css):** `https://github.com/ndjhe/nikolay-portfolio`
- **Branch:** `main`
- **Structure (high level):**

```
nikolay-portfolio/
├── assets/          # Fonts, images, JS
├── design/          # Wireframe + final Stitch exports
├── parts/           # header.html, footer.html
├── patterns/        # Homepage section patterns
├── templates/       # front-page.html, index.html
├── functions.php
├── theme.json
├── style.css
├── PROJECT-DOCUMENTATION.md
├── CHANGELOG.md
└── README.md
```

### Initial Technical Direction

- **Architecture:** WordPress 7.0 FSE block theme — no classic PHP templates for homepage sections.
- **Design tokens:** Material You–inspired amethyst palette defined in `theme.json` (`settings.color.palette`, `spacing`, `typography`, `shadow`, `gradients`).
- **Layout:** Content width 1152px, wide 1280px, 8px spacing unit, 32px gutter.
- **Header:** Fixed glass bar (`80px` height, `top: 35px`), scroll transparency, core Navigation block with custom breakpoint at 768px.
- **Patterns:** PHP-registered block patterns (`patterns/*.php`) composed in `templates/front-page.html`.
- **Projects:** Query Loop on `project` CPT (companion plugin), 3-column grid desktop / 1-column mobile.
- **Contact:** Custom REST route in `functions.php` with client-side fetch in inline script.
- **Assets:** Self-hosted Space Grotesk (300–700), hero/about images in `assets/images/`.

### Initial Design Direction

Reference: `design/final/DESIGN.md` and `design/final/index.html`

| Principle | Implementation |
|-----------|----------------|
| **Creative north star** | "The Amethyst Monolith" — disciplined synth-cyber, not neon chaos |
| **Color** | Dark void `#030008` base; violet accents `#7b2cbf` (primary-container) |
| **Typography** | Space Grotesk; uppercase display; wide letter-spacing on eyebrows/meta |
| **Geometry** | `border-radius: 0` globally — brutalist sharp edges |
| **Depth** | Tonal layering via surface tokens; `color-mix` translucency; no hard 1px section borders |
| **Imagery** | Grayscale + reduced brightness default; partial color + scale on hover |
| **Glass** | Header/overlay: 80% background mix + `blur(24px)` |
| **Motion** | 700ms image transitions; 75–150ms UI; `prefers-reduced-motion` respected |

**Homepage section order:**

Header → Hero → About → Projects (`#work`) → Stack (`#stack`) → Testimonials → Contact → Footer

### Project Evolution

Phase 01 establishes the foundation. Subsequent work (documented in future phases) includes:

- Stitch design export and wireframe baseline in `design/`
- Full FSE theme scaffold with `theme.json` token system
- Homepage pattern implementation (Hero through Contact)
- Branding update: site title filtered to **NIKWEB.EU**
- Navigation order: About → Work → Stack → Contact + Hire Me CTA
- Scroll-based header transparency
- Mobile/tablet hamburger menu fix (backdrop-filter containing-block issue)
- Hire Me hidden from mobile overlay; hamburger ↔ X toggle
- Enlarged centered mobile nav links (28px / 2× small)
- GitHub Repository button in About section
- Ongoing preparation for **Phase 10: WORK Section Redesign**

---

## Phase 02 — UX & Information Architecture

> **Status:** Planned  
> **Goal:** Document user flows, section hierarchy, anchor strategy, and content model.

### Planned contents

- [ ] Sitemap and single-page anchor map
- [ ] User journeys (recruiter, client, peer developer)
- [ ] Content inventory per section
- [ ] CPT and taxonomy structure for projects
- [ ] Navigation IA decisions (desktop vs mobile)
- [ ] Accessibility and keyboard flow notes

---

## Phase 03 — Visual Design & Design System

> **Status:** Planned  
> **Goal:** Formalize the Amethyst Monolith system in `theme.json` and design reference files.

### Planned contents

- [ ] Token catalog (colors, type scale, spacing, shadows, gradients)
- [ ] Component specs (buttons, chips, cards, inputs)
- [ ] Stitch → token mapping
- [ ] Do's and don'ts (from `design/final/DESIGN.md`)
- [ ] Responsive breakpoint matrix

---

## Phase 04 — Stitch → Cursor Workflow

> **Status:** Planned  
> **Goal:** Document the design handoff pipeline from Stitch export to theme implementation.

### Planned contents

- [ ] Export process from Stitch
- [ ] Reference file locations (`design/final/`, `design/wireframe/`)
- [ ] Cursor agent prompts and verification checklist
- [ ] Known intentional deviations from design comp

---

## Phase 05 — WordPress / FSE Architecture

> **Status:** Planned  
> **Goal:** Document theme structure, block patterns, template hierarchy, and plugin integration.

### Planned contents

- [ ] Template and pattern map
- [ ] `theme.json` vs `style.css` responsibility split
- [ ] Companion plugin (`project` CPT) integration
- [ ] Enqueue and asset strategy
- [ ] REST API routes (contact form)

---

## Phase 06 — Initial Implementation

> **Status:** Planned  
> **Goal:** Record homepage section build-out and pattern registration.

### Planned contents

- [ ] Hero, About, Projects, Stack, Testimonials, Contact patterns
- [ ] Header and footer template parts
- [ ] Global styles and foundation CSS
- [ ] Initial responsive behavior

---

## Phase 07 — Navigation & Responsive Development

> **Status:** Planned  
> **Goal:** Document header, navigation, and responsive menu implementation.

### Planned contents

- [ ] Core Navigation block configuration
- [ ] 768px breakpoint override
- [ ] Glass header and scroll transparency
- [ ] Hamburger overlay fix (backdrop-filter pseudo-element)
- [ ] Hamburger ↔ X toggle
- [ ] Mobile link sizing and centering
- [ ] Hire Me desktop-only behavior

---

## Phase 08 — Visual QA

> **Status:** Planned  
> **Goal:** Cross-viewport visual verification against Stitch reference.

### Planned contents

- [ ] Breakpoint test matrix (390, 768, 1024, 1280, 1440)
- [ ] Deviation log (intentional vs regression)
- [ ] Overflow, contrast, and alignment audit
- [ ] Phase gate verdict

---

## Phase 09 — Real Project Integration

> **Status:** Planned  
> **Goal:** Populate Work section with real project CPT content.

### Planned contents

- [ ] Project post structure (title, excerpt, featured image, category)
- [ ] Menu order and display rules
- [ ] Image guidelines
- [ ] Content entry workflow

---

## Phase 10 — WORK Section Redesign

> **Status:** Planned  
> **Goal:** Redesign the `#work` / Projects section while preserving the NIKWEB.EU visual language.

### Planned contents

- [ ] Design audit and token reuse checklist
- [ ] Layout and card pattern changes
- [ ] Before/after comparison
- [ ] Responsive behavior
- [ ] QA sign-off

---

## Phase 11 — Single Project Case Study System

> **Status:** Planned  
> **Goal:** Build single-project templates and case study content model.

### Planned contents

- [ ] Single `project` template design
- [ ] Case study block patterns
- [ ] Navigation back to Work
- [ ] SEO and social meta

---

## Phase 12 — Final QA

> **Status:** Planned  
> **Goal:** Production readiness audit across all sections and viewports.

### Planned contents

- [ ] Functional testing (forms, links, navigation)
- [ ] Accessibility pass
- [ ] Performance notes
- [ ] Cross-browser smoke test
- [ ] Release readiness verdict

---

## Phase 13 — Deployment

> **Status:** Planned  
> **Goal:** Deploy theme to production hosting.

### Planned contents

- [ ] Hosting environment
- [ ] Domain and SSL
- [ ] Asset optimization
- [ ] Cache and CDN
- [ ] Post-deploy verification

---

## Phase 14 — Lessons Learned

> **Status:** Planned  
> **Goal:** Capture what worked, what didn't, and recommendations for future projects.

### Planned contents

- [ ] FSE block theme lessons
- [ ] Stitch → Cursor workflow retrospective
- [ ] Navigation and CSS containing-block pitfalls
- [ ] Tooling recommendations

---

## Phase 15 — Future Improvements

> **Status:** Planned  
> **Goal:** Backlog of enhancements beyond initial launch.

### Planned contents

- [ ] CMS-managed navigation
- [ ] Blog or writing section
- [ ] Animation refinements
- [ ] Additional case studies
- [ ] Internationalization
- [ ] Performance optimization (hero image compression, etc.)

---

## Key Design Tokens Reference

For WORK section and future phases, prefer these tokens over hard-coded values:

```css
/* Colors */
var(--wp--preset--color--background)          /* #030008 */
var(--wp--preset--color--surface)
var(--wp--preset--color--surface-container)
var(--wp--preset--color--on-surface)
var(--wp--preset--color--on-surface-variant)
var(--wp--preset--color--primary-container)   /* #7b2cbf */
var(--wp--preset--color--secondary)

/* Typography */
var(--wp--preset--font-family--space-grotesk)
var(--wp--preset--font-size--eyebrow)        /* 12px */
var(--wp--preset--font-size--small)          /* 14px */
var(--wp--preset--font-size--card)           /* 24px */
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

**Primary responsive breakpoint:** `768px` (theme override; core Navigation default is 600px).

---

*This document is maintained as the project evolves. Update the relevant phase section when work is completed.*
