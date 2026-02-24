# Vendor packages and autoload

This plugin uses Composer and loads `vendor/autoload.php` for:

- **yahnis-elsts/plugin-update-checker** (PucFactory) – update checks from GitHub.

## Adding or changing vendor packages

1. Run `composer require <package>` or edit `composer.json` and run `composer update`.
2. For packages that might be loaded by other plugins (e.g. PUC), keep the `class_exists()` guard before `require_once ... vendor/autoload.php` so only one autoload runs.

## Linting (WordPress PHP standards)

- Run: `composer run lint` or `./vendor/bin/phpcs`
- Auto-fix: `composer run lint:fix` or `./vendor/bin/phpcbf`
