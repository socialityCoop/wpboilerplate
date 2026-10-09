# Project Instructions

This project is a Roots Bedrock WordPress site using the UnderStrap parent theme and `understrap-child`.

## WordPress development

- Follow Bootstrap conventions and use the existing project structure before introducing new patterns.
- Put functionality that is not tied to template presentation in the site-specific plugin at `web/app/plugins/site-specific-plugin`. This includes shortcodes, custom post types, custom fields, helper functions, and related hooks. Follow the plugin's existing structure.
- Keep custom code small and avoid duplicating existing WordPress, WooCommerce, or plugin functionality. Prefer core/plugin APIs over new wrapper functions.
- Install third-party WordPress plugins and themes with Composer whenever they are available through `https://repo.wp-packages.org`.
- Use Advanced Custom Fields for custom fields. Install it with `composer require wp-plugin/advanced-custom-fields` when it is not already available. Use ACF directly; do not add fallback wrappers around `get_field()`.
- Use WPML for multilingual functionality. Ask the user to provide the plugin when it is not available.

## Theme, CSS, and JavaScript

- Keep template-specific presentation in `web/app/themes/understrap-child` and use the existing theme structure.
- Use SCSS and the existing SCSS variables for colors and fonts. Compile styles only by running `npm run css-compile` from `web/app/themes/understrap-child`.
- Use jQuery for JavaScript in this project, and use the `$` selector inside the established jQuery wrapper rather than the `jQuery` alias or vanilla JavaScript for equivalent behavior.
- Keep class names concise and reuse existing classes where practical.

## Content, templates, and translations

- Do not hard-code user-facing strings. Keep inline source text in English and use WordPress translation functions such as `__()`, `_e()`, `esc_html__()`, or `esc_attr__()` with the project's text domain.
- Keep translation files in `web/app/languages` and update the relevant `.po` and `.mo` files when adding translatable strings. Do not invent fallback text.
- Do not explicitly build custom page layouts in `page-*.php` files. Use WPBakery Page Builder and its existing stock shortcodes. Ask the user to provide WPBakery if it is unavailable. Do not use Elementor or Gutenberg for these layouts.
- Create a custom shortcode or WPBakery element only when no existing shortcode can meet the requirement.
- Add footer content as widgets, not custom fields.

## WooCommerce

- Prefer WooCommerce and WordPress core structures over custom product metadata:
  - descriptions and short descriptions for text
  - categories and tags for taxonomies
  - product attributes for structured options
  - SKU for product identifiers
  - built-in length, width, and height fields for dimensions
- If the correct storage model is unclear, ask the user and present the options: `taxonomy`, `attribute`, `custom meta`, or `core field`.

## Project tools and validation

- Use WP-CLI and the configured WordPress MCP server when they are appropriate.
- Before finishing code changes, run the narrowest relevant checks. Available Composer scripts include `composer lint` and `composer test`; use `composer lint:fix` only when formatting changes are requested or clearly needed.
