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
   .sass('resources/sass/app.scss', 'public/css')
   .copyDirectory('resources/js/datatables', 'public/js/datatables')
   .copyDirectory('node_modules/datatables.net', 'public/vendor/datatables.net')
   .copyDirectory('node_modules/datatables.net-bs4', 'public/vendor/datatables.net-bs4')
   .copyDirectory('node_modules/datatables.net-buttons', 'public/vendor/datatables.net-buttons')
   .copyDirectory('node_modules/datatables.net-buttons-bs4', 'public/vendor/datatables.net-buttons-bs4')
   .copyDirectory('node_modules/datatables.net-fixedcolumns', 'public/vendor/datatables.net-fixedcolumns')
   .copyDirectory('node_modules/datatables.net-fixedcolumns-bs4', 'public/vendor/datatables.net-fixedcolumns-bs4');

mix.browserSync('http://mercancia.test');