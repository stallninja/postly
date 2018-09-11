const mix = require("laravel-mix");
const webpack = require("webpack");

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

mix
    .options({
        postCss: [require('tailwindcss')('./tailwind.js')]
    })
    .setPublicPath("public")
    .js("resources/js/postly.js", "public/js")
    .less("resources/less/postly.less", "public/css")
    // .sourceMaps()
    .version();
