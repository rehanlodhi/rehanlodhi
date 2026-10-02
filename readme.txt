== Rehan Lodhi ==

Contributors: Rehan Lodhi
Requires at least: 6.9
Tested up to: 6.9
Requires PHP: 5.7
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


== Description ==

My personal theme for portfolio


== Changelog ==

= 1.6.1 =
* Set font-display: optional on the web fonts so they never swap in mid-load, removing font-swap layout shift
* Preload the web fonts so they are requested with the HTML instead of after the CSS
* Inline theme.css on the front end to remove a render-blocking request

= 1.6.0 =
* Narrow single post content to 850px, independent of the site's 1080px default
* Convert the Display font-size scale to explicit rem values with fluid min/max ranges
* Add Blog Title and Post H2 font-size presets and apply Post H2 as the default H2 size
* Switch the global heading default from uppercase to capitalize, with explicit uppercase kept on the homepage sections (hero, projects, writing, contact)
* Add default code block styling (mono font, 14px, zinc-100 background, zinc-300 border, consistent padding)

= 1.5.0 =
* Bump actions/checkout and actions/setup-node to v7, pin Node to 24 LTS in the release workflow
* Switch release build from npm install to npm ci for reproducible installs
* Add a shared concurrency group so release and rollback can't interleave on the production symlink
* Remove deploy.yml (no staging workflow currently in use)
* Package releases with wp dist-archive + .distignore instead of ad-hoc rsync excludes

= 1.4.0 =
* Add align:full to hero, projects, writing, and contact sections so their background band spans the full viewport width
* Fix root padding so the theme's global-padding mechanism actually applies a value instead of resolving to nothing
* Simplify page.html down to header/post-content/footer

= 1.3.0 =
* Add generic page.html template so new Pages created in wp-admin actually render their content

= 1.2.0 =
* Load compiled theme CSS into the block editor iframe so patterns render the same in the editor as on the front end

= 1.1.0 =
* Rebuild about page: hero statement, competency list, narrative bio, tech stack, and CTA
* Replace static homepage project cards with a live Query Loop
* Fix project card tags to render as separate boxes
* Update homepage hero subtitle

= 1.0.0 =
* Initial release


== Copyright ==

Rehan Lodhi WordPress Theme, (C) 2026 Rehan Lodhi
Rehan Lodhi is distributed under the terms of the GNU GPL.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

