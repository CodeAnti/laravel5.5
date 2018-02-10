let mix = require('laravel-mix');
require('dotenv').config();

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

// global
mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .version();

// mini_program
mix.js('resources/assets/js/business/mini_program/back_end/login.js', 'public/js/business/mini_program/back_end')
    .js('resources/assets/js/business/mini_program/back_end/register.js', 'public/js/business/mini_program/back_end')
    .less('resources/assets/less/business/mini_program/back_end/login.less', 'public/css/business/mini_program/back_end/login.css')
    .version();


// copy images
mix.copyDirectory('resources/assets/images', 'public/images');

// browser sync
mix.browserSync(process.env.MIX_BROWSER_SYNC_PROXY);