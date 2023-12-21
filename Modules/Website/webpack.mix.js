const mix = require('laravel-mix');
const moduleName = 'website';
require('laravel-mix-merge-manifest');

// mix.mergeManifest();
mix.setPublicPath('../../public').mergeManifest();

mix.js(__dirname + '/Resources/js/app.js', '../../public/js/' + moduleName + '/init.js')
    .combine([
      'public/js/' + moduleName + '/init.js',
       'resources/assets/js/jquery.min.js',
       'resources/assets/js/popper.min.js',
       'resources/assets/js/bootstrap.min.js',
       'resources/assets/js/wow.min.js',
       'resources/assets/js/owl.carousel.min.js',
       'resources/assets/js/lightcase.min.js',
       'resources/assets/js/scrollIt.min.js',
       'resources/assets/js/script.js'
	], '../../public/js/' + moduleName + '/vendor.js')
  .combine([
    'resources/assets/css/fontawesome.min.css',
	'resources/assets/css/themify-icons.css',
    'resources/assets/css/flaticon.css',
    'resources/assets/css/bootstrap.min.css',
    'resources/assets/css/animate.min.css',
    'resources/assets/css/owl.carousel.min.css',
    'resources/assets/css/lightcase.min.css',
    'resources/assets/css/style.css',
	], '../../public/css/' + moduleName + '/vendor.css');
    
