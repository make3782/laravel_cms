let mix				= require('laravel-mix'),
	assetsDir		= 'resources/assets/',
	nodeDir			= 'node_modules/',
	publicDir		= 'public/',
	distDir			= 'public/dist/',
	composerDir		= 'vendor/',

	// 前端站点所需JS
	applicationJs	= [
		nodeDir + 'jquery/dist/jquery.min.js',
		nodeDir + 'webfontloader/webfontloader.js',
		nodeDir   + 'jquery-floating-social-share/dist/jquery.floating-social-share.min.js',
		assetsDir + 'js/application.js'
	];

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

mix.less(assetsDir + 'less/application.less', distDir + 'css/application.css')
   .js(applicationJs, distDir + 'js/application.js');

if (mix.inProduction()) {
	mix.version();
}
