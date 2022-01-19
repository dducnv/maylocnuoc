const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ]);

if (mix.inProduction()) {
    mix.version();
}

mix.styles([
    'public/assets/frontend/css/vendor/bootstrap.min.css',
    'public/assets/frontend/css/vendor/signericafat.css',
    'public/assets/frontend/css/vendor/cerebrisans.css',
    'public/assets/frontend/css/plugins/nice-select.css',
    'public/assets/frontend/css/plugins/magnific-popup.css',
    'public/assets/frontend/css/plugins/slick.css',
    'public/assets/frontend/alertify/alertify.min.css',
    'public/assets/frontend/css/vendor/linear-icon.css',
    'public/assets/frontend/css/vendor/simple-line-icons.css',
    'public/assets/frontend/css/vendor/elegant.css',
    'public/assets/frontend/sweetalert2/sweetalert2.min.css',
    'public/assets/frontend/css/style.css'
],'public/assets/frontend/css/app.css').version();
mix.scripts([
    'public/assets/frontend/js/main.js',
    'public/assets/frontend/js/ajax.js'
],'public/assets/frontend/js/script.js').version();
mix.scripts([
    'public/assets/frontend/js/vendor/modernizr-3.11.7.min.js',
    'public/assets/frontend/js/vendor/jquery-v3.6.0.min.js',
    'public/assets/frontend/js/vendor/jquery-migrate-v3.3.2.min.js',
    'public/assets/frontend/js/vendor/popper.min.js',
    'public/assets/frontend/js/vendor/bootstrap.min.js',
],'public/assets/frontend/js/vendor/vendor.js').version();
mix.scripts([
    'public/assets/frontend/js/plugins/slick.js',
    'public/assets/frontend/js/plugins/jquery.syotimer.min.js',
    'public/assets/frontend/js/plugins/jquery.instagramfeed.min.js',
    'public/assets/frontend/js/plugins/jquery.nice-select.min.js',
    'public/assets/frontend/js/plugins/wow.js',
    'public/assets/frontend/js/plugins/jquery-ui-touch-punch.js',
    'public/assets/frontend/js/plugins/jquery-ui.js',
    'public/assets/frontend/js/plugins/magnific-popup.js',
    'public/assets/frontend/js/plugins/sticky-sidebar.js',
    'public/assets/frontend/js/plugins/easyzoom.js',
    'public/assets/frontend/js/plugins/scrollup.js',
],'public/assets/frontend/js/plugins/plugins.js').version();
