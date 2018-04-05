var Encore = require('@symfony/webpack-encore');

Encore
    // the project directory where compiled assets will be stored
    .setOutputPath('public/build/')
    // the public path used by the web server to access the previous directory
    .setPublicPath('/build')
    .cleanupOutputBeforeBuild()
    .enableSourceMaps(!Encore.isProduction())
    // uncomment to create hashed filenames (e.g. app.abc123.css)
    // .enableVersioning(Encore.isProduction())

    // uncomment to define the assets of the project
    .addEntry('js/app', './assets/vendor/jquery/jquery.min.js')
    .addEntry('js/app', './assets/vendor/bootstrap/js/bootstrap.bundle.min.js')
    .addEntry('js/app', './assets/vendor/jquery-easing/jquery.easing.min.js')
    .addEntry('js/app', './assets/vendor/scrollreveal/scrollreveal.min.js')
    .addEntry('js/app', './assets/vendor/magnific-popup/jquery.magnific-popup.min.js')
    .addEntry('js/app', './assets/js/creative.js')
    .addEntry('js/app', './assets/js/main.js')
    .addStyleEntry('css/app', './assets/vendor/bootstrap/css/bootstrap.min.css')
    .addStyleEntry('css/app', './assets/vendor/font-awesome/css/font-awesome.min.css')
    // uncomment if you use Sass/SCSS files
    // .enableSassLoader()

    // uncomment for legacy applications that require $/jQuery as a global variable
    // .autoProvidejQuery()
;

module.exports = Encore.getWebpackConfig();
