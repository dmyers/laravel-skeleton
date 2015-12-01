var elixir = require('laravel-elixir');

require('laravel-elixir-livereload');

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

elixir(function(mix) {
    mix.livereload();
    
    mix.copy('node_modules/font-awesome/fonts', 'public/fonts');
    
    mix.sass('app.scss');
    
    mix.browserify('app.js');
    
    mix.version(['js/app.js', 'css/app.css']);
});
