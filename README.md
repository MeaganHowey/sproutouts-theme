# Sproutouts Theme
Contributors: Meagan Howey (sproutoutsmeaganhowey)
Requires at least: 6.9
Requires PHP: 8.3
License: GPLv3 or later
License URI: https://github.com/MeaganHowey/sproutouts-theme/blob/main/LICENSE
Author URI: https://sproutouts.com/

## Description
Wordpress Theme developed and used by Sproutouts

## Copyright
Sproutouts Theme Wordpress Theme is distributed under the terms of the GNU GPL. This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

## Conventions
This theme's conventions are based on [Wordpress Best Practices](https://developer.wordpress.org/coding-standards/).

### Base Rules
- Readability over Brevity
- Comment liberally
- Names should be descriptive and clear
- Avoid touching the database directly
- Validate files using tools like [W3C Validator](https://validator.w3.org/) and [JSHint](https://jshint.com/)

### Naming Conventions

#### Namespaces

PHP: namespace Sproutouts\Sproutouts_Theme\Sub_Namespace
JS: var SproutoutsTheme = {} (I believe we will only need the product name as a namespace, as I am not anticipating subnamespaces for JS and having a parent class gets ugly quick.)

| Element | Prefix/Namespace | Structure | Example |
|---------|--------|-----------|---------|
| Folders | none | lower-kebab-case | testimonials |
| Files (non-main) | sp-st | lower-kebab-case | sp-st-example.php |
| Global Variables | sp_st (PHP) / spSt (JS) | lower_snake_case (PHP) / camelCase (JS) | sp_st_example_global_variable (PHP) / spStExampleGlobalVariable (JS) |
| Variables | Namespace | lower_snake_case (PHP) / camelCase (JS) | example_variable (PHP) / exampleVariable (JS) |
| Constants | Namespace | SCREAMING_SNAKE_CASE | SP_ST_EXAMPLE_CONSTANT |
| Classes | Namespace | Capital_Snake_Case (PHP) / CapitalCamelCase (JS) | Class_Name (PHP) ClassName (JS) |
| Functions | Namespace | lower_snake_case (PHP) / camelCase (JS) | example_function() (PHP) / exampleFunction() (JS) |
| Hooks | sp_st (PHP) / spSt (JS) | lower_snake_case (PHP) / camelCase (JS) | sp_st_example_hook_function (PHP) / spStExampleHookFunction (JS) |




