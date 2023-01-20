const mix = require("laravel-mix");
const exec = require("child_process").exec;
require("dotenv").config();

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

const glob = require("glob");
const path = require("path");

/*
 |--------------------------------------------------------------------------
 | Vendor assets
 |--------------------------------------------------------------------------
 */

function mixAssetsDir(query, cb) {
  (glob.sync("resources/" + query) || []).forEach((f) => {
    f = f.replace(/[\\\/]+/g, "/");
    cb(f, f.replace("resources", "public"));
  });
}

const sassOptions = {
  precision: 5,
  includePaths: ["node_modules", "resources/assets/"],
};

// plugins Core stylesheets
mixAssetsDir("scss/base/plugins/**/!(_)*.scss", (src, dest) =>
  mix.sass(
    src,
    dest.replace(/(\\|\/)scss(\\|\/)/, "$1css$2").replace(/\.scss$/, ".css"),
    { sassOptions }
  )
);

// pages Core stylesheets
mixAssetsDir("scss/base/pages/**/!(_)*.scss", (src, dest) =>
  mix.sass(
    src,
    dest.replace(/(\\|\/)scss(\\|\/)/, "$1css$2").replace(/\.scss$/, ".css"),
    { sassOptions }
  )
);

// Core stylesheets
mixAssetsDir("scss/base/core/**/!(_)*.scss", (src, dest) =>
  mix.sass(
    src,
    dest.replace(/(\\|\/)scss(\\|\/)/, "$1css$2").replace(/\.scss$/, ".css"),
    { sassOptions }
  )
);

// script js
mixAssetsDir("js/scripts/**/*.js", (src, dest) => mix.scripts(src, dest));
mixAssetsDir("images", (src, dest) => mix.copy(src, dest));
mixAssetsDir("fonts", (src, dest) => mix.copy(src, dest));
mixAssetsDir("files", (src, dest) => mix.copy(src, dest));
mixAssetsDir("data", (src, dest) => mix.copy(src, dest));

mix
  .sass("resources/css/style.scss", "public/css")
  .sass("resources/css/chats.scss", "public/css")
  .sass("resources/css/bootstrap-extended.scss", "public/css")
  .sass("resources/css/override.scss", "public/css")
  .sass("resources/css/workspace.scss", "public/css")
  .css("resources/css/bootstrap.min.css", "public/css")
  .css("resources/css/font-awesome.min.css", "public/css")
  .css("resources/css/feather.css", "public/css")
  .copy("resources/css/owl.carousel.min.css", "public/css")
  .css("resources/css/magnific-popup.min.css", "public/css")
  .copy("resources/css/lc_lightbox.css", "public/css")
  .css("resources/css/bootstrap-select.min.css", "public/css")
  .css("resources/css/dataTables.bootstrap5.min.css", "public/css")
  .css("resources/css/select.bootstrap5.min.css", "public/css")
  .css("resources/css/dropzone.css", "public/css")
  .css("resources/css/scrollbar.css", "public/css")
  .css("resources/css/datepicker.css", "public/css")
  .copy("resources/css/flaticon.css", "public/css")
  .css("resources/css/notiflix.min.css", "public/css")

  .js("resources/js/jquery-3.6.0.min.js", "public/js")
  .copy("resources/js/popper.min.js", "public/js")
  .copy("resources/js/bootstrap.min.js", "public/js")
  .js("resources/js/magnific-popup.min.js", "public/js")
  .js("resources/js/waypoints.min.js", "public/js")
  .js("resources/js/counterup.min.js", "public/js")
  .js("resources/js/waypoints-sticky.min.js", "public/js")
  .js("resources/js/isotope.pkgd.min.js", "public/js")
  .js("resources/js/imagesloaded.pkgd.min.js", "public/js")
  .js("resources/js/owl.carousel.min.js", "public/js")
  .js("resources/js/theia-sticky-sidebar.js", "public/js")
  .js("resources/js/lc_lightbox.lite.js", "public/js")
  .copy("resources/js/bootstrap-select.min.js", "public/js")
  .js("resources/js/dropzone.js", "public/js")
  .js("resources/js/jquery.scrollbar.js", "public/js")
  .js("resources/js/bootstrap-datepicker.js", "public/js")
  .js("resources/js/jquery.dataTables.min.js", "public/js")
  .copy("resources/js/dataTables.bootstrap5.min.js", "public/js")
  .js("resources/js/anm.js", "public/js")
  .copy("resources/js/notiflix.min.js", "public/js")
  .copy("resources/js/repeater.js", "public/js")
  .js("resources/js/bootstrap-slider.min.js", "public/js")
  .js("resources/js/chart.js", "public/js")
  .js("resources/js/custom.js", "public/js")
  .js("resources/js/app.js", "public/js")
  .js("resources/js/init.js", "public/js")
  .js("resources/js/chat.js", "public/js")
  .js("resources/js/workspace/work.js", "public/js/workspace")
  .js("resources/js/workspace/chat.js", "public/js/workspace");
