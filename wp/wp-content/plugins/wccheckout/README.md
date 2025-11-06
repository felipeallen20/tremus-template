# Checkout For Woocommerce

The plugin uses a mixture of pnpm and composer dependencies. Each theme contains it's own set of dependencies. The output for the plugin uses `wp-scripts`.
Two build scripts have been included in `bin/build_*` to run the plugin.

These scripts trigger composer install with dump autoload, and run pnpm install and build in all required directories.
### Development installation instructions

* `git clone` this repo
* run `pnpm build_dev` to trigger build script
* create `.env` file with `CFW_DEV_MODE=true` to enable development mode (source maps and non minified files)

### Normal use installation instructions

* run `pnpm build_prod` to trigger a production build and output

N.B. this will run tests unless using the `--skip-tests` flag also.

For tests, it uses `wp-env`, you may need to setup a `.wp-env.override.json` file and/or use the following env variables depending on your system:
```
WP_ENV_HOST=localhost
WP_ENV_PORT=8994
WP_ENV_TESTS_PORT=8995
ENABLE_WEBPACK_NOTIFICATIONS=false
```