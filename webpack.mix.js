
let mix = require('laravel-mix');

mix.js('assets/scripts/main.js', 'dist/main.js')
    .sass('assets/styles/main.scss', 'dist/main.css');