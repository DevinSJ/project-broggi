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

mix.js('resources/js/app.js', 'public/assets/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/assets/css')
    .postCss('resources/css/app.css', 'public/assets/css/app.css')
    .postCss('resources/css/normalize.css', 'public/assets/css/app.css')
    .disableNotifications();
