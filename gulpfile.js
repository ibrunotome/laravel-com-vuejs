const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

elixir(mix => {
    mix.sass('./resources/assets/admin/sass/admin.scss')
        .copy('./node_modules/materialize-css/fonts/roboto', './public/fonts/roboto');

    mix.browserSync({
        host: 'localhost',
        proxy: 'http://localhost:8000'
    });
});