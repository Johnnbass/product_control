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
    .sass('resources/scss/app.scss', 'public/css')
    .sass('resources/scss/header.scss', 'public/css/header.css')
    .sass('resources/scss/footer.scss', 'public/css/footer.css')
    .sass('resources/scss/pages/home.scss', 'public/css/home.css')
    .sass('resources/scss/pages/products.scss', 'public/css/products.css')
    .sass('resources/scss/pages/reports.scss', 'public/css/reports.css')
    .sass('resources/scss/pages/tags.scss', 'public/css/tags.css')
    .copyDirectory('resources/img', 'public/img');
