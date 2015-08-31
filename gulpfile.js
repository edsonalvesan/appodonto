var elixir = require('laravel-elixir');

require('laravel-elixir-livereload');

elixir(function(mix) {
    //mix.less('app.less');
    mix.livereload();
});
