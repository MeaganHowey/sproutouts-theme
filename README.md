# Sproutouts Theme (sproutouts-theme)

Contributors: Meagan Howey, Sproutouts Team\
Requires at least: Wordpress 6.8.1\
Requires PHP: 8.2.28\
Documentation URI: https://sproutouts.com/sproutouts-theme
Author URI: https://sproutouts.com

## Description

Official Sproutouts Wordpress Theme. Designed specifically to be used for Sproutouts projects, this theme is lightweight and made to seamlessly integrate with customized child themes and Elegant Themes plugins.

## Copyright

The Sproutouts Wordpress Theme is distributed under the terms of the GNU GPL license. You can learn more [here](https://github.com/MeaganHowey/sproutouts-theme/blob/main/LICENSE).

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

## Development

The following are conventions and instructions related to the development of the theme.

### Prefix Naming Conventions

| Element | Definition / Purpose | Example |
| ------------- | ------------- | ------------- |
| Function Names | All PHP functions should be prefixed with sp_ and use snake_case | sp_register_custom_post_type() |
| Hook Callback Functions | Functions used with add_action() or add_filter() must be prefixed and descriptive | add_filter( 'filter_name', 'sp_modify_filter' ); |
| File Names | Kebab-case, optionally prefixed with sp- if logic could be reused or is general. | sp-footer-copyright.php, functions.php |
| Folder Names | Lowercase and kebab-case. Descriptive to function or context. | integrations/, templates/ |
| Shortcode Functions | Prefixed with sp_, usually include the word shortcode | sp_shortcode_image_grid() |
| Template Part Files | Kebab-case. Use sp- prefix for custom components | sp-custom-banner.php |
| Custom CSS Class Names | Use sp- as prefi for all theme-defined css classes to avoid collisions | .sp-parallax |
| JavaScript Functions | CamelCase, prefixed with sp or wrapped in sp object namespace | spInitSlider() or sp.utils.scrollTo() |
| Wordpress Options / Transients | Use sp_ prefix for any stored option/transient key in the database. | sp_theme_options |
| Custom Post Types / Taxonomies | Use sp_ prefix. Lowercase with underscores. | sp_testimonial, sp_service_category |
| @package Name (DocBlocks) | PascalCase, short and branded. | SPTheme or SproutoutsTheme |
| Constants | UPPERCASE_WITH_UNDERSCORES | SP_THEME_VERSION |

### File Structure

The file structure includes a few key folders that are explained below:
- Assets: Includes general css and js files as well as media like images, videos, and fonts.
- Includes: Includes theme based code modules.
- Integrations: Includes integration based code modules. (e.g. integrations/divi/footer-copyright/ ** in here is both a sp-footer-copyright.php file and it's matching sp-footer-copyright.js file. JS file is generally enqueued within the matching php file.)
```
├── archive.php
├── assets
│   ├── css
│   ├── fonts
│   ├── images
│   └── js
├── footer.php
├── functions.php
├── header.php
├── includes
|   ├── setup 
│       ├── sp-theme-support.php
│       └── sp-customizer.php
│       └── sp-performance.php
├── index.php
├── integrations
│   └── divi
│       ├── mods (Code that modifies or builds on existing divi modules and functionality)
|         └── sp-change-existing-module-of-x-class
|           ├── sp-change-existing-module-of-x-class.php
|           └── sp-change-existing-module-of-x-class.js
│       └── modules (Entirely new custom Divi modules)
│         └── sp-new-module-example
|           ├── sp-new-module-example.php
|           └── sp-new-module-example.js
├── LICENSE
├── page.php
├── README.md
├── screenshot.png
├── single.php
└── style.css
```
