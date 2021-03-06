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

mix.js('resources/js/seotags/main.js', 'public/js/seotags.js')
    // .sass('resources/sass/app.scss', 'public/css')
    .stylus('resources/css/estilos.styl', 'public/css/estilos.css');
