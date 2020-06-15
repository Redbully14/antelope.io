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
mix.setPublicPath('public/assets');

mix.copyDirectory('resources/js', 'public/assets/js');
mix.copyDirectory('resources/css', 'public/assets/css');
mix.copyDirectory('resources/fonts', 'public/assets/fonts');
mix.copyDirectory('resources/images', 'public/assets/images');