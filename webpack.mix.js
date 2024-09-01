// let mix = require('laravel-mix');

// Compile and minify CSS
// mix.sass('resources/sass/app.scss', 'public/css')
//    .options({
//        postCss: [
//            require('cssnano')({
//                preset: 'default',
//            }),
//        ],
//    });

// Compile and minify JavaScript
// Combine and minify CSS files
// mix.styles([
//     'public/css/bootstrap.min.css',
//     'public/css/bootstrap-icons.css',
//     'public/css/magnific-popup.css',
//     'public/css/developia.css'
// ], 'public/css/all.css')
// .minify('public/css/developiaall.css');

// // Combine and minify JS files
// mix.scripts([
//     'public/js/jquery.min.js',
//     'public/js/bootstrap.min.js',
//     'public/js/jquery.sticky.js',
//     'public/js/click-scroll.js',
//     'public/js/jquery.magnific-popup.min.js',
//     'public/js/magnific-popup-options.js',
//     'public/js/custom.js'
// ], 'public/js/all.js')
// .minify('public/js/all.js');


// mix.js(
//     'public/js/jquery.min.js',
//     'public/js/bootstrap.min.js',
//     'public/js/jquery.sticky.js',
//     'public/js/click-scroll.js',
//     'public/js/jquery.magnific-popup.min.js',
//     'public/js/magnific-popup-options.js',
//     'public/js/custom.js','js')
//     .sass('public/css/bootstrap.min.css',
//     'public/css/bootstrap-icons.css',
//     'public/css/magnific-popup.css',
//     'public/css/developia.css', 'css');

const mix = require('laravel-mix');


mix.js([
    'resources/js/jquery.min.js',
    'resources/js/bootstrap.min.js',
    'resources/js/jquery.sticky.js',
    'resources/js/click-scroll.js',
    'resources/js/jquery.magnific-popup.min.js',
    'resources/js/magnific-popup-options.js',
    'resources/js/custom.js'
], 'public/js/app.js')
   .css([
    'resources/css/bootstrap.min.css',
    'resources/css/bootstrap-icons.css',
    'resources/css/magnific-popup.css',
    'resources/css/developia.css'
   ], 'public/css/app.css')
   .version();




