# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Commands

```bash
npm run dev        # Start dev server at localhost:4321
npm run build      # Build static site to dist/
npm run preview    # Preview the built site locally
```

Node.js >= 22.12.0 is required.

## Architecture

This is an **Astro 6 static site** (personal portfolio for Rehan Lodhi) with `output: 'static'`. Deploys via GitHub Actions on push to `main` — builds with `npm run build` then rsyncs `dist/` to a VPS over SSH.

### Content sources

The site has a dual-source blog system controlled by `WORDPRESS_API_URL` in `.env`:

- **When `WORDPRESS_API_URL` is set**: `/blog` and `/blog/[slug]` fetch live posts from the WordPress REST API via `src/lib/wordpress.ts`.
- **When unset**: blog reads from local markdown files in `src/content/posts/`.

The blog page (`src/pages/blog/index.astro`) and slug page (`src/pages/blog/[slug].astro`) must handle both paths. The `src/lib/wordpress.ts` module exports helpers (`getWPPosts`, `getWPPostBySlug`, `stripHtml`, `formatWPDate`, `getCategoryNames`) for the WordPress path.

### Content collections

Defined in `src/content.config.ts` using Astro's Content Layer API:

- **`posts`** — Markdown files in `src/content/posts/`. Frontmatter: `title`, `excerpt`, `date` (string), `category`, `wpId` (optional, links to WordPress post ID).
- **`projects`** — JSON files in `src/content/projects/`. Fields: `number`, `category`, `name`, `description`, `stack[]`, `linkLabel`, `url`, `featured`, `order` (used for sort order on homepage).

### Pages

- `src/pages/index.astro` — Homepage: hero, projects grid (sorted by `order`), 5 most recent posts, contact block.
- `src/pages/about.astro` — About page.
- `src/pages/blog/index.astro` — Blog listing.
- `src/pages/blog/[slug].astro` — Individual post, statically generated from the `posts` collection.

### Layout & components

All pages wrap in `src/layouts/BaseLayout.astro`, which takes `title`, `description`, `canonicalUrl`, and `ogImage` props, sets up OG/Twitter meta tags, loads Google Fonts (Bebas Neue, IBM Plex Mono, IBM Plex Sans), and uses Astro's `<ClientRouter />` for view transitions.

Components: `Nav`, `Footer`, `ProjectCard`, `PostItem`, `ContactBlock`. Global styles live in `src/styles/global.css` using CSS custom properties (`--zinc-*` scale).

### Design conventions

- Typography: Bebas Neue for headings, IBM Plex Mono for labels/meta, IBM Plex Sans (weight 300/400/500) for body.
- Color system: zinc scale (`--zinc-50` through `--zinc-900`) as CSS variables.
- Layout uses `.block` / `.block-inner` wrappers for consistent horizontal padding and max-width.
- Styles are scoped per-component using Astro's `<style>` blocks; global overrides (e.g. post prose styles) use `:global()`.