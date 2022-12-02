import { defineConfig } from "vite";
import { viteStaticCopy } from "vite-plugin-static-copy";
import laravel from "laravel-vite-plugin";

export default defineConfig({
  base: "/",
  build: {
    outDir: "public",
    emptyOutDir: false,
  },

  plugins: [
    laravel({
      input: [
        "resources/css/bootstrap.min.css",
        "resources/css/font-awesome.min.css",
        "resources/css/feather.css",
        "resources/css/owl.carousel.min.css",
        "resources/css/magnific-popup.min.css",
        "resources/css/lc_lightbox.css",
        "resources/css/bootstrap-select.min.css",
        "resources/css/dataTables.bootstrap5.min.css",
        "resources/css/select.bootstrap5.min.css",
        "resources/css/dropzone.css",
        "resources/css/scrollbar.css",
        "resources/css/datepicker.css",
        "resources/css/flaticon.css",
        "resources/css/notiflix.min.css",
        "resources/css/style.scss",
        "resources/css/chat.scss",
        "resources/css/bootstrap-extended.scss",
        "resources/css/override.scss",
        //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        "resources/js/jquery-3.6.0.min.js",
        "resources/js/popper.min.js",
        "resources/js/bootstrap.min.js",
        "resources/js/magnific-popup.min.js",
        "resources/js/waypoints.min.js",
        "resources/js/counterup.min.js",
        "resources/js/waypoints-sticky.min.js",
        "resources/js/isotope.pkgd.min.js",
        "resources/js/imagesloaded.pkgd.min.js",
        "resources/js/owl.carousel.min.js",
        "resources/js/theia-sticky-sidebar.js",
        "resources/js/lc_lightbox.lite.js",
        "resources/js/bootstrap-select.min.js",
        "resources/js/dropzone.js",
        "resources/js/jquery.scrollbar.js",
        "resources/js/bootstrap-datepicker.js",
        "resources/js/jquery.dataTables.min.js",
        "resources/js/dataTables.bootstrap5.min.js",
        "resources/js/anm.js",
        "resources/js/notiflix.min.js",
        "resources/js/bootstrap-slider.min.js",
        "resources/js/chart.js",
        "resources/js/custom.js",
        "resources/js/app.js",
        "resources/js/init.js",
      ],
      refresh: true,
    }),
    viteStaticCopy({
      targets: [
        { src: "resources/images", dest: "" },
        { src: "resources/fonts", dest: "" },
        { src: "resources/files", dest: "" },
      ],
    }),
  ],
});
