
  <!-- JS Global Compulsory -->
  <script src="<?php echo URL;?>public/js/jquery.min.js"></script>
  <script src="<?php echo URL;?>public/js/jquery-migrate.min.js"></script>
  <script src="<?php echo URL;?>public/js/jquery.easing.js"></script>
  <script src="<?php echo URL;?>public/js/popper.min.js"></script>
  <script src="<?php echo URL;?>public/js/bootstrap.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="<?php echo URL;?>public/js/appear.js"></script>
  <script src="<?php echo URL;?>public/js/hs.megamenu.js"></script>
  <script src="<?php echo URL;?>public/js/slick.js"></script>
  <script src="<?php echo URL;?>public/js/typed.min.js"></script>

  <!-- JS Unify -->
  <script src="<?php echo URL;?>public/js/hs.core.js"></script>
  <script src="<?php echo URL;?>public/js/hs.carousel.js"></script>
  <script src="<?php echo URL;?>public/js/hs.header.js"></script>
  <script src="<?php echo URL;?>public/js/hs.hamburgers.js"></script>
  <script src="<?php echo URL;?>public/js/hs.tabs.js"></script>
  <script src="<?php echo URL;?>public/js/hs.text-slideshow.js"></script>
  <script src="<?php echo URL;?>public/js/hs.go-to.js"></script>

  <!-- JS Customization -->
  <script src="<?php echo URL;?>public/js/custom.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
        // initialization of carousel
        $.HSCore.components.HSCarousel.init('.js-carousel');

        $('#clients').slick('setOption', 'responsive', [{
          breakpoint: 768,
          settings: {
            slidesToShow: 2
          }
        }], true);

        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');

        // initialization of text animation (typing)
        $(".u-text-animation.u-text-animation--typing").typed({
          strings: [
            "awesome",
            "creative",
            "unify"
          ],
          typeSpeed: 60,
          loop: true,
          backDelay: 1500
        });

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');
      });

      $(window).on('load', function () {
        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of HSMegaMenu component
        $('.js-mega-menu').HSMegaMenu({
          event: 'hover',
          pageContainer: $('.container'),
          breakpoint: 991
        });
      });

      $(window).on('resize', function () {
        setTimeout(function () {
          $.HSCore.components.HSTabs.init('[role="tablist"]');
        }, 200);
      });
  </script>



  <div id="resolutionCaution" class="text-left g-max-width-600 g-bg-white g-pa-20" style="display: none;">
    <button type="button" class="close" onclick="Custombox.modal.close();">
      <i class="hs-icon hs-icon-close"></i>
    </button>
    <h4 class="g-mb-20">Screen resolution less than 1400px</h4>
  </div>

  <div id="copyModal" class="text-left modal-demo g-bg-white g-color-black g-pa-20" style="display: none;"></div>

  <!-- CSS -->
  <link rel="stylesheet" href="<?php echo URL;?>public/css/jquery.mCustomScrollbar.min.css">
  <link rel="stylesheet" href="<?php echo URL;?>public/css/chosen.css">
  <link rel="stylesheet" href="<?php echo URL;?>public/css/prism.css">
  <link rel="stylesheet" href="<?php echo URL;?>public/css/custombox.min.css">
  <link rel="stylesheet" href="<?php echo URL;?>public/css/spectrum.css">
  <link rel="stylesheet" href="<?php echo URL;?>public/css/sp-dark.css">
  <link rel="stylesheet" href="<?php echo URL;?>public/css/style-switcher.css">
  <!-- End CSS -->

  <!-- Scripts -->
  <script src="<?php echo URL;?>public/js/chosen.jquery.js"></script>
  <script src="<?php echo URL;?>public/js/ImageSelect.jquery.js"></script>
  <script src="<?php echo URL;?>public/js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="<?php echo URL;?>public/js/custombox.min.js"></script>
  <script src="<?php echo URL;?>public/js/clipboard.min.js"></script>

  <!-- Prism -->
  <script src="<?php echo URL;?>public/js/prism.js"></script>
  <script src="<?php echo URL;?>public/js/prism-markup.min.js"></script>
  <script src="<?php echo URL;?>public/js/prism-css.min.js"></script>
  <script src="<?php echo URL;?>public/js/prism-clike.min.js"></script>
  <script src="<?php echo URL;?>public/js/prism-javascript.min.js"></script>
  <script src="<?php echo URL;?>public/js/prism-toolbar.min.js"></script>
  <script src="<?php echo URL;?>public/js/prism-copy-to-clipboard.min.js"></script>
  <!-- End Prism -->

  <script src="<?php echo URL;?>public/js/hs.scrollbar.js"></script>
  <script src="<?php echo URL;?>public/js/hs.select.js"></script>
  <script src="<?php echo URL;?>public/js/hs.modal-window.js"></script>
  <script src="<?php echo URL;?>public/js/hs.markup-copy.js"></script>

  <script src="<?php echo URL;?>public/js/jquery.cookie.js"></script>
  <script src="<?php echo URL;?>public/js/spectrum.js"></script>
  <script src="<?php echo URL;?>public/js/style-switcher.js"></script>
  <!-- End Scripts -->
  <!-- End Style Switcher -->




<div class="sp-container sp-hidden sp-light sp-input-disabled sp-palette-buttons-disabled sp-palette-disabled sp-initial-disabled"><div class="sp-palette-container"><div class="sp-palette sp-thumb sp-cf"></div><div class="sp-palette-button-container sp-cf"><button type="button" class="sp-palette-toggle">less</button></div></div><div class="sp-picker-container"><div class="sp-top sp-cf"><div class="sp-fill"></div><div class="sp-top-inner"><div class="sp-color" style="background-color: rgb(121, 255, 0);"><div class="sp-sat"><div class="sp-val"><div class="sp-dragger" style="top: 0px; left: 0px;"></div></div></div></div><div class="sp-clear sp-clear-display" title="Clear Color Selection" style="display: none;"></div><div class="sp-hue"><div class="sp-slider" style="top: 0px;"></div></div></div><div class="sp-alpha"><div class="sp-alpha-inner"><div class="sp-alpha-handle" style="left: 0px;"></div></div></div></div><div class="sp-input-container sp-cf"><input class="sp-input" type="text" spellcheck="false"></div><div class="sp-initial sp-thumb sp-cf"></div><div class="sp-button-container sp-cf"><a class="sp-cancel" href="https://htmlstream.com/preview/unify-v2.2/unify-main/home/home-page-10.html#">cancel</a><button type="button" class="sp-choose">choose</button></div></div></div></body></html>
