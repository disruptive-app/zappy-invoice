// webpack.mix.js

let mix = require('laravel-mix');

mix.js('resources/dist/js/materialize.min.js', 'public/js')
.js('resources/dist/js/admin.js', 'public/js')
.js('resources/dist/js/init.js', 'public/js')
.sass('resources/dist/sass/admin.scss', 'public/css')
    .postCss('resources/css/app.css', 'public/css');