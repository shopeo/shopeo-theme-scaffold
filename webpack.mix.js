let mix = require('laravel-mix');

mix.js('assets/src/js/app.js', 'assets/js').sass('assets/src/scss/style.scss', '', [], [require('postcss-import'), require('autoprefixer'),]).sass('assets/src/scss/style-rtl.scss', '', [], [require('postcss-import'), require('rtlcss'), require('autoprefixer'),]);