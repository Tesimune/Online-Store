
const mix = require('laravel-mix');
const tailwincss = require('tailwindcss')
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
    .vue()
    .sass('resources/sass/app.scss', 'public/css')
    .options({
      processCssUrls: false,
      postCss: [tailwincss('./tailwind.config.js')]
    })
    .disableSuccessNotifications();
    // .postCss("resources/css/app.css", "public/css", [
    //   require("tailwindcss"),
    // ]);