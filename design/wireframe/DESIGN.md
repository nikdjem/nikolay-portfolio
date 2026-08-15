---
name: Amethyst Blueprint
colors:
  surface: '#f8f9fa'
  surface-dim: '#d9dadb'
  surface-bright: '#f8f9fa'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#f3f4f5'
  surface-container: '#edeeef'
  surface-container-high: '#e7e8e9'
  surface-container-highest: '#e1e3e4'
  on-surface: '#191c1d'
  on-surface-variant: '#44474a'
  inverse-surface: '#2e3132'
  inverse-on-surface: '#f0f1f2'
  outline: '#75777b'
  outline-variant: '#c5c6ca'
  surface-tint: '#5b5f63'
  primary: '#0c1014'
  on-primary: '#ffffff'
  primary-container: '#212529'
  on-primary-container: '#888c91'
  inverse-primary: '#c3c7cc'
  secondary: '#575f67'
  on-secondary: '#ffffff'
  secondary-container: '#d8e1ea'
  on-secondary-container: '#5b646b'
  tertiary: '#091117'
  on-tertiary: '#ffffff'
  tertiary-container: '#1e262c'
  on-tertiary-container: '#858d95'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#e0e3e8'
  primary-fixed-dim: '#c3c7cc'
  on-primary-fixed: '#181c20'
  on-primary-fixed-variant: '#43474c'
  secondary-fixed: '#dbe4ed'
  secondary-fixed-dim: '#bfc8d0'
  on-secondary-fixed: '#141d23'
  on-secondary-fixed-variant: '#3f484f'
  tertiary-fixed: '#dbe3ec'
  tertiary-fixed-dim: '#bfc7d0'
  on-tertiary-fixed: '#151c22'
  on-tertiary-fixed-variant: '#40484e'
  background: '#f8f9fa'
  on-background: '#191c1d'
  surface-variant: '#e1e3e4'
typography:
  headline-xl:
    fontFamily: Space Grotesk
    fontSize: 48px
    fontWeight: '700'
    lineHeight: '1.1'
    letterSpacing: -0.02em
  headline-lg:
    fontFamily: Space Grotesk
    fontSize: 32px
    fontWeight: '600'
    lineHeight: '1.2'
    letterSpacing: -0.01em
  headline-lg-mobile:
    fontFamily: Space Grotesk
    fontSize: 24px
    fontWeight: '600'
    lineHeight: '1.2'
  headline-md:
    fontFamily: Space Grotesk
    fontSize: 20px
    fontWeight: '600'
    lineHeight: '1.4'
  body-lg:
    fontFamily: Inter
    fontSize: 18px
    fontWeight: '400'
    lineHeight: '1.6'
  body-md:
    fontFamily: Inter
    fontSize: 16px
    fontWeight: '400'
    lineHeight: '1.6'
  label-sm:
    fontFamily: Inter
    fontSize: 12px
    fontWeight: '600'
    lineHeight: '1'
    letterSpacing: 0.05em
spacing:
  unit: 8px
  container-max: 1280px
  gutter: 24px
  margin-mobile: 16px
  margin-desktop: 48px
---

## Brand & Style
This design system employs a **Blueprint Technical** aesthetic, functioning as a high-fidelity "architectural skeleton" for the Amethyst portfolio. The brand personality is analytical, precise, and structural, focusing on information architecture and spatial relationships rather than decorative flair. 

The design style leans heavily into **Modern Minimalism** mixed with **Functional Brutalism**. It utilizes a strictly neutral palette to emphasize layout hierarchy. Visual interest is generated through geometric precision, standardized line weights, and technical annotations, evoking the feeling of a professional CAD drawing or a high-end wireframe.

## Colors
The color palette is strictly functional, designed to differentiate "void" from "structure."

- **Primary (#212529):** Reserved for high-contrast text and primary interactive states (CTAs).
- **Secondary (#6C757D):** Used for supporting text, iconography, and secondary borders.
- **Tertiary (#ADB5BD):** The standard line weight color for wireframe borders and structural divisions.
- **Neutral (#F8F9FA):** The "Canvas" color, providing a clean, non-distracting backdrop for the skeleton.
- **Surface (#E9ECEF):** Used for container fills and component backgrounds to denote depth without using shadows.

## Typography
The typography system balances technical precision with legibility. **Space Grotesk** is used for headlines to provide a subtle geometric, futuristic character suitable for a portfolio. **Inter** is used for all functional and body text to ensure maximum clarity.

All labels should utilize uppercase styling with slight letter spacing to mimic technical drafting annotations. Links and interactive text should be underlined or set in the Primary color to denote actionability.

## Layout & Spacing
The design system follows a strict **12-column fluid grid** for desktop and a **4-column grid** for mobile. 

- **The 8px Rule:** All margins, paddings, and component heights must be multiples of 8px to maintain mathematical harmony.
- **Section Dividers:** Instead of whitespace alone, use 1px solid horizontal lines (#ADB5BD) to separate major page sections, reinforcing the "blueprint" feel.
- **Alignment:** All elements should snap to the grid. Use consistent padding (e.g., 24px) inside all cards and containers.

## Elevation & Depth
In this design system, depth is conveyed through **Tonal Layering** and **Borders**, never through shadows.

- **Level 0 (Canvas):** #F8F9FA (The base background).
- **Level 1 (Containers/Cards):** #E9ECEF with a 1px solid #ADB5BD border.
- **Level 2 (Active Elements):** #DEE2E6 with a 1px solid #6C757D border.
- **Visual Markers:** Interactive elements do not "float"; they are "etched" into the layout. Use simple 1px offsets for hover states to simulate a slight mechanical shift.

## Shapes
The shape language is strictly **Sharp (0px)**. All containers, buttons, input fields, and image placeholders must have square corners. This reinforces the technical drafting aesthetic and ensures that the "skeleton" feels rigid and structural.

## Components

### Buttons
- **Primary:** Solid #212529 fill with #F8F9FA text. No rounded corners.
- **Secondary:** Transparent fill, 1px solid #212529 border, #212529 text.
- **Ghost:** Transparent fill, no border, #6C757D text.

### Image Placeholders
All imagery must be represented by a rectangle with a 1px solid #ADB5BD border and two diagonal lines crossing from corner to corner (the standard wireframe "X"). A centered "Label-sm" can indicate the aspect ratio or image type.

### Input Fields
Rectangular boxes with a 1px #ADB5BD border. On focus, the border thickens to 2px #212529. Placeholder text should be in #ADB5BD.

### Cards
Cards are defined by a 1px #ADB5BD border. Backgrounds should be #E9ECEF to distinguish them from the main canvas. Internal padding is fixed at 24px.

### Navigation
The navigation bar is a simple horizontal strip at the top, separated by a 1px solid #ADB5BD bottom border. Links are arranged with 32px horizontal spacing.

### Status Indicators
Small squares (8px x 8px) with solid fills. Use #6C757D for inactive and #212529 for active/selected states.