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


/**************************************
*                FRONT
/**************************************/
mix
   // CSS WEB FRONT -> PLUGINS - CSS
   .styles([
      // Vendor CSS
      'resources/front/css/plugins/bootstrap.min.css',
      'resources/front/css/plugins/mega_menu.css',
      'resources/front/css/plugins/animate.css',
      'resources/front/css/plugins/font-awesome.min.css',
      'resources/front/css/plugins/bootstrap-datetimepicker.min.css',
      'resources/front/css/plugins/dataTables.bootstrap4.min.css',
      'resources/front/css/plugins/magnific-popup.css',
      'resources/front/css/plugins/mediaelementplayer.css',
      'resources/front/css/plugins/owl.carousel.min.css',
      'resources/front/css/plugins/slick-theme.css',
      'resources/front/css/plugins/themify-icons.css',
      'resources/front/css/plugins/fullcalendar.css',

   ], 'public/web/css/basic.css', { outputStyle: 'compressed' })

   // CSS WEB FRONT -> SETTINGS REVOLUTION 
   .styles([
      'resources/front/revolution/css/settings.css',
   ], 'public/web/css/settings.css', { outputStyle: 'compressed' })

   // CSS WEB FRONT -> TYPOGRAPHY
   .styles([
      'resources/front/css/typography.css',
   ], 'public/web/css/typography.css', { outputStyle: 'compressed' })

   // CSS WEB FRONT -> PLUGINS - CSS
   .styles([
      // Vendor CSS
      'resources/front/css/shortcodes/accordion.css',
      'resources/front/css/shortcodes/action-box.css',
      'resources/front/css/shortcodes/blockquote.css',
      'resources/front/css/shortcodes/bootstrap-typography.css',
      'resources/front/css/shortcodes/button.css',
      'resources/front/css/shortcodes/clients.css',
      'resources/front/css/shortcodes/contact-form.css',
      'resources/front/css/shortcodes/countdown.css',
      'resources/front/css/shortcodes/counter.css',
      'resources/front/css/shortcodes/divider.css',
      'resources/front/css/shortcodes/dropcap.css',
      'resources/front/css/shortcodes/feature-text.css',
      'resources/front/css/shortcodes/list-style.css',
      'resources/front/css/shortcodes/nice-select.css',
      'resources/front/css/shortcodes/owl-carousel.css',
      'resources/front/css/shortcodes/page-title.css',
      'resources/front/css/shortcodes/pie-chart.css',
      'resources/front/css/shortcodes/pricing.css',
      'resources/front/css/shortcodes/progress-bar.css',
      'resources/front/css/shortcodes/section-title.css',
      'resources/front/css/shortcodes/shortcodes.css',
      'resources/front/css/shortcodes/social-icons.css',
      'resources/front/css/shortcodes/tabs.css',
      'resources/front/css/shortcodes/team.css',
      'resources/front/css/shortcodes/testimonial.css',
      'resources/front/css/shortcodes/side-panel.css',
      'resources/front/css/shortcodes/onload-modal.css',

   ], 'public/web/css/shortcodes.css', { outputStyle: 'compressed' })

   // CSS WEB FRONT -> STYLE & RESPONSIVE
   .styles([
      'resources/front/css/style.css',
      'resources/front/css/responsive.css',

   ], 'public/web/css/style.css', { outputStyle: 'compressed' })

   // FONTS
   .copy([
      'resources/front/fonts/',
   ], 'public/web/fonts')


   // JS WEB FRONT -> BASISCS
   .scripts([
      'resources/front/js/jquery-3.3.1.min.js',
      'resources/front/js/plugins-jquery.js',

   ], 'public/web/js/basic.js', { outputStyle: 'compressed' })

   // JS WEB FRONT REVOLUTION
   .scripts([
      'resources/front/revolution/js/jquery.themepunch.tools.min.js',
      'resources/front/revolution/js/jquery.themepunch.revolution.min.js',
      // Extensiones
      'resources/front/revolution/js/extensions/revolution.extension.actions.min.js',
      'resources/front/revolution/js/extensions/revolution.extension.carousel.min.js',
      'resources/front/revolution/js/extensions/revolution.extension.kenburn.min.js',
      'resources/front/revolution/js/extensions/revolution.extension.layeranimation.min.js',
      'resources/front/revolution/js/extensions/revolution.extension.migration.min.js',
      'resources/front/revolution/js/extensions/revolution.extension.navigation.min.js',
      'resources/front/revolution/js/extensions/revolution.extension.parallax.min.js',
      'resources/front/revolution/js/extensions/revolution.extension.slideanims.min.js',
      'resources/front/revolution/js/extensions/revolution.extension.video.min.js',
      // Custom Revolution
      'resources/front/revolution/js/revolution-custom.js',

   ], 'public/web/js/revo.js', { outputStyle: 'compressed' })

   // JS WEB FRONT CUSTOM JS
   .scripts([
      'resources/front/js/custom.js'

   ], 'public/web/js/custom.js', { outputStyle: 'compressed' })
   .version()
;

/*************
* END FRONT
/************/



// mix.copy([
//    'resources/ezy_theme/css/webfonts',
// ], 'public/assets/web/webfonts');

