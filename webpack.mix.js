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
   		'public/css/app_less.css',
    	'public/css/app_sass.css'
    	
	], 'public/css/app.css')

   .sass('resources/assets/sass/app_user.scss', 'public/css/app_user_sass.css')
   .less('resources/assets/less/app_user.less', 'public/css/app_user_less.css')
   .styles([
   		'public/css/app_user_less.css',
    	'public/css/app_user_sass.css'
	], 'public/css/app_user.css');

mix.browserSync({proxy: 'localhost/git_diplomovka/diplomovka/public/', port: '3002'});  


