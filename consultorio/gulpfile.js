const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

/*elixir(mix => {
    mix.sass('app.scss')
       .webpack('app.js');
});*/

elixir(function (mix) {
	//mix.sass(['app.scss'], 'public/css/properties.css');
	mix.sass(['lib/bootstrap.min.scss', 'lib/font-awesome.min.scss', 'lib/jquery-ui.min.scss',
		'lib/nprogress.scss', 'lib/basic.min.scss',
		'lib/dropzone.min.scss', 'lib/custom.min.scss',
		'lib/image-picker.scss'], 
			'public/css/libs/libs.css');
	mix.sass('app.scss');
	mix.scripts(['libs/jquery.min.js', 'libs/jquery-ui.min.js', 'libs/bootstrap.min.js',
		'libs/fastclick.js', 'libs/nprogress.js',
		'libs/moment.min.js', 'libs/fullcalendar.min.js',
		'libs/es.js', 'libs/jquery.smartWizard.js', 'libs/dropzone.min.js',// 'libs/dropzone-amd-module.min.js',
		'libs/image-picker.js', 'libs/validator.js', 'libs/jquery-numeric.js'],
			'public/js/lib/libs.js'); 

	mix.scripts(['libs/custom_calendar.js', 'libs/basic_func.js', 'libs/custom.min.js', 'libs/_inventario.js'],
			'public/js/app.js');

	/*mix.scripts(['libs/custom_calendar.js', 'libs/basic_func.js'],
			'public/js/libs/libs.js');*/

});

/*
'libs/jquery.min.js', 'libs/bootstrap.min.js', 'libs/fastclick.js',
				'libs/nprogress.js', 'libs/moment.min.js', 'libs/fullcalendar.min.js',
				'libs/custom.js', 
*/
