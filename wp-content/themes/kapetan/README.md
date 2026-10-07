# Kapetan WordPress theme

Converted from the approved static build (`kapetan-homepage.html` + `kapetan-case-study.html`).
Copy and section-for-section markup are unchanged; only asset paths and internal links were
made WordPress-aware.

## Install

1. Zip this `kapetan/` folder (or upload it as-is via SFTP) into `wp-content/themes/`.
2. In **Appearance → Themes**, activate **Kapetan**.
3. In **Settings → Reading**, the theme ships a `front-page.php`, so WordPress will use it
   automatically as the homepage — no "static front page" setting is needed.

## Set up case studies

Case studies are their own custom post type (**Case Studies** in the admin menu), not a Page
with a manually-assigned template:

1. **Case Studies → Add New**, title it with the real client name.
2. Publish it. It automatically renders with `single-case_study.php` — no Page Attributes /
   Template picker involved.
3. The homepage's Results/case-study cards currently all link to the most recently published
   Case Study entry (see `kapetan_case_study_url()` in `functions.php`). Wire each card to its
   own specific entry once there's more than one.

If no Case Study entry is published yet, those links fall back to `#`.

**One-time step after this change lands on an already-active install:** go to
**Settings → Permalinks** and click **Save** once, so the new `/case-studies/` URLs work
(WordPress only rebuilds rewrite rules on theme activation or an explicit Permalinks save).

## File map

- `style.css` — theme header (required by WordPress) + the full compiled production CSS
  (brand type scale, animations, Tailwind utility output). Fonts are loaded from `/fonts`
  via relative `url()` paths, so this file works as-is with no build step.
- `header.php` / `footer.php` — shared nav, mobile menu, and footer. Internal anchors
  (`#services`, `#work`, …) resolve relative to the homepage from any page via `home_url()`.
- `front-page.php` — the homepage template (hero, services, signals, results, testimonials,
  contact CTA).
- `single-case_study.php` — the case-study template; WordPress loads it automatically for
  every entry of the **Case Studies** custom post type (see above).
- `index.php` — required WordPress fallback template; only renders if no more specific
  template matches (e.g. search results, a 404, or an unassigned page).
- `functions.php` — enqueues `style.css` and the JS below; registers theme supports, the
  `case_study` custom post type, and two nav menu locations (not wired into the markup, since
  the original design uses a fixed, hardcoded link set rather than an editable menu — register
  and assign a menu only if you want those links to become editable from **Appearance → Menus**).
- `assets/js/common.js` — mobile menu toggle, hero parallax, and the scroll-reveal
  animations; loaded on every page.
- `assets/js/front-page.js` — the audience toggle, services section tabs, and testimonial
  carousel; loaded only on the homepage.
- `assets/images/` — all pack photography/logos as WebP.
- `fonts/` — TikTok Sans + Gilmer, WOFF2 only.

## Notes / known deviations (carried over from the static build)

- No real logo vector art was ever supplied — `logo-dark.webp` / `logo-white.webp` are
  high-resolution raster substitutes from the flattened PNG renders provided.
- No separate mobile hero image was supplied — the desktop hero image is reused and
  cropped via `object-cover` on mobile (confirmed with the client as acceptable).
- All body copy on both templates is the design pack's own lorem-ipsum / bracketed
  placeholder text, per the brief's "use copy exactly as given, never invent" rule.

## Confidentiality

This theme and all included assets are confidential, proprietary materials of Left Turns LP
(Kapetan). Do not publish, index, or share outside the intended evaluation.
