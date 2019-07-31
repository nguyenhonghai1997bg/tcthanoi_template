const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .js('node_modules/owl.carousel2/dist/owl.carousel.min.js', 'public/js/libraries/owl.carousel.min.js')
    .copy('node_modules/owl.carousel2/dist/assets/owl.carousel.min.css', 'public/css/libraries/owl.carousel.min.css')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/customer/header.scss', 'public/css/customer/header.css')
    .sass('resources/sass/customer/navbar.scss', 'public/css/customer/navbar.css')
    .sass('resources/sass/customer/footer.scss', 'css/customer/footer.css')
    .sass('resources/sass/index.scss', 'public/css/index.css');
