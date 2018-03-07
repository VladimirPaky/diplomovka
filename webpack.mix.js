let mix = require('laravel-mix');

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

mix.options({ processCssUrls: false });

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css/app_sass.css')
   .less('resources/assets/less/app.less', 'public/css/app_less.css')
   .styles([
    	'public/css/app_sass.css',
    	'public/css/app_less.css'
	], 'public/css/app.css');

mix.browserSync('http://localhost/git_diplomovka/diplomovka/public/');  


