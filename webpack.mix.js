const mix  = require('laravel-mix');

mix.js([
    'node_modules/tether/dist/js/tether.min.js',
    'node_modules/bootstrap/dist/js/bootstrap.js',
    'resources/assets/js/app.js'
], 'public/js/app.js')
    .sass('resources/assets/sass/app.scss', 'public/css/app.css');
