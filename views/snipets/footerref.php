
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


<!----LIBRARIES-->
<script src="<?php echo URL; ?>public/angular/angular.js"></script>
<script src="<?php echo URL; ?>public/angular/angular-route.js"></script>
<script src="<?php echo URL; ?>public/js/dirPagination.js"></script>
<script src="<?php echo URL; ?>public/angular/angular-sanitize.js"></script>
<script src="<?php echo URL; ?>public/angular/angular-cookies.js"></script>

<!----MODULE-->
<script src="<?php echo URL.'public/js/controllers/module.js';?>"></script>

<!--- CONTROLLERS---->
<?php if(isset($js)){foreach($js as $jsfile){
echo "<script src=".URL.$jsfile."></script>";
}
}
?>
<script src="<?php echo URL.'public/js/controllers/directives.js';?>"></script>


</body></html>
