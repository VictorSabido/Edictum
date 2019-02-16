const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.sass('resources/sass/app.scss', 'public/css');
// mix.styles([
//    // Vendor CSS
//    'resources/ezy_theme/vendor/bootstrap/css/bootstrap.min.css',
//    'resources/ezy_theme/vendor/font-awesome/css/fontawesome-all.min.css',
//    'resources/ezy_theme/vendor/animate/animate.min.css',
//    'resources/ezy_theme/vendor/linear-icons/css/linear-icons.min.css',
//    'resources/ezy_theme/vendor/owl.carousel/assets/owl.carousel.min.css',
//    'resources/ezy_theme/vendor/owl.carousel/assets/owl.theme.default.min.css',
//    'resources/ezy_theme/vendor/magnific-popup/magnific-popup.min.css',
//    'resources/ezy_theme/master/style-switcher/bootstrap-colorpicker/css/bootstrap-colorpicker.css',
//    // Theme CSS
//    'resources/ezy_theme/css/theme.css',
//    'resources/ezy_theme/css/theme-elements.css',
//    // Current Page CSS 
//    'resources/ezy_theme/vendor/rs-plugin/css/settings.css',
//    'resources/ezy_theme/vendor/rs-plugin/css/layers.css',
//    'resources/ezy_theme/vendor/rs-plugin/css/navigation.css',
//    // Skin CSS
//    'resources/ezy_theme/css/skins/default.css',

// ], 'public/assets/web/css/app.css', { outputStyle: 'compressed' });

// mix.copy([
//    'resources/ezy_theme/vendor/modernizr',
// ], 'public/assets/web/modernizr');

// mix.copy([
//    'resources/ezy_theme/css/fonts',
// ], 'public/assets/web/fonts');

// mix.copy([
//    'resources/ezy_theme/css/webfonts',
// ], 'public/assets/web/webfonts');

// mix.scripts([
//    'reources/ezy_theme/vendor/jquery/jquery.min.js',
//    'reources/ezy_theme/vendor/jquery.appear/jquery.appear.min.js',
//    'reources/ezy_theme/vendor/jquery.easing/jquery.easing.min.js',
//    'reources/ezy_theme/vendor/jquery-cookie/jquery-cookie.min.js',
//    'reources/ezy_theme/vendor/bootstrap/js/bootstrap.bundle.min.js',
//    'reources/ezy_theme/vendor/common/common.min.js',
//    'reources/ezy_theme/vendor/jquery.validation/jquery.validation.min.js',
//    'reources/ezy_theme/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js',
//    'reources/ezy_theme/vendor/jquery.gmap/jquery.gmap.min.js',
//    'reources/ezy_theme/vendor/jquery.lazyload/jquery.lazyload.min.js',
//    'reources/ezy_theme/vendor/isotope/jquery.isotope.min.js',
//    'reources/ezy_theme/vendor/owl.carousel/owl.carousel.min.js',
//    'reources/ezy_theme/vendor/magnific-popup/jquery.magnific-popup.min.js',
//    'reources/ezy_theme/vendor/vide/vide.min.js',
//    'reources/ezy_theme/vendor/vivus/vivus.min.js',
//    'reources/ezy_theme/master/style-switcher/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js',
//    // Theme Base, Components and Settings
//    'reources/ezy_theme/js/theme.js',
//    // Current Page Vendor and Views
//    'reources/ezy_theme/vendor/rs-plugin/js/jquery.themepunch.tools.min.js',
//    'reources/ezy_theme/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js',
//    // Theme Custom
//    'reources/ezy_theme/js/custom.js',
//    // Theme Initialization Files
//    'reources/ezy_theme/js/theme.init.js',
//    // 'node_modules/gentelella/build/js/custom.js',
// ], 'public/assets/web/js/app.js', { outputStyle: 'compressed' });

