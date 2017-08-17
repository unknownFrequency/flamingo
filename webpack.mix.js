const  mix = require('laravel-mix');

mix.autoload({
    jquery: ['$', 'window.jQuery', 'jQuery'],
    tether: ['window.Tether', 'Tether']
})
.react([
    'node_modules/tether/dist/js/tether.min.js',
    'node_modules/bootstrap/dist/js/bootstrap.js',
    'resources/assets/js/app.js'
], 'public/js/app.js')
    .sass('resources/assets/sass/websolutions.scss', 'public/css/websolutions.css')
    .sass('resources/assets/sass/app.scss', 'public/css/app.css');

// mix.extract([
//     'jquery', 'bootstrap', 'tether'
// ]);

