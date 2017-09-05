var elixir = require('laravel-elixir');

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
    mix.sass('app.scss','public/css/app.css')
    .sass('clock.scss','public/css/clock.css')
    .scripts('clock.js','public/js/clock.js');
    mix.version(['public/css/app.css','public/css/clock.css','public/js/clock.js']);

});
