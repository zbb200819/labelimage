<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="stylesheet" href="styles/main.css">
    <!-- build:js scripts/vendor/modernizr.js -->
    <script src="bower_components/modernizr/modernizr.js"></script>
    <!-- endbuild -->
  </head>
  <body id="prestations">
    <header>
      <a href="index.html" class="logo fadeIn"></a>
      <nav>
        <ul>
          <li class="anim-from-bottom"><span></span><a href="#">Accueil</a></li>
          <li class="anim-from-bottom active"><span></span><a href="#">Nos prestations</a></li>
          <li class="anim-from-bottom"><span></span><a href="#">Tarifs</a></li>
          <li class="anim-from-bottom"><span></span><a href="#">Actualites</a></li>
          <li class="anim-from-bottom"><span></span><a href="#">Contact</a></li>
        </ul>
      </nav>
    </header>
    
    <div class="loader">
      <span class="croix spin"></span>
    </div>

    <div class="container-fluid outer">
      <span class="croix"></span>
      <section class="toPresta">
        <a href="scan.html"></a>
        <h1>Scan</h1>
        <img src="images/bg-scan-nb.jpg" class='nb' alt="Scan">
        <img src="images/bg-scan.jpg" alt="Scan">
      </section>
      <section class="toPresta">
        <a href="traitement.html"></a>
        <h1>Traitement</h1>
        <img src="images/bg-traitement-nb.jpg" class='nb' alt="traitement">
        <img src="images/bg-traitement.jpg" alt="traitement">
      </section>
      <section class="toPresta">
        <a href="tirages"></a>
        <h1>Tirages</h1>
        <img src="images/bg-tirages-nb.jpg" class='nb' alt="tirages">
        <img src="images/bg-tirages.jpg" alt="tirages">
      </section>
      <section class="toPresta">
        <a href="finitions"></a>
        <h1>Finitions</h1>
        <img src="images/bg-finitions-nb.jpg" class='nb' alt="finitions">
        <img src="images/bg-finitions.jpg" alt="finitions">
      </section>
    </div>


    <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

        <!-- build:js scripts/main.js -->
        <script src="bower_components/jquery/jquery.js"></script>
        <script src="bower_components/gsap/src/minified/jquery.gsap.min.js"></script>
        <script src="bower_components/gsap/src/minified/TweenMax.min.js"></script>
        <script src="bower_components/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>
        <script src="bower_components/gsap/src/minified/plugins/CSSRulePlugin.min.js"></script>
        <script src="bower_components/ScrollMagic/scrollmagic/uncompressed/ScrollMagic.js"></script>
        <script src="bower_components/ScrollMagic/scrollmagic/uncompressed/plugins/jquery.ScrollMagic.js"></script>
        <script src="bower_components/ScrollMagic/scrollmagic/uncompressed/plugins/animation.gsap.js"></script>
        <script src="bower_components/ScrollMagic/scrollmagic/uncompressed/plugins/debug.addIndicators.js"></script>
        <!-- <script src="scripts/chromeSmoothScroll.js"></script>-->
        <script src="scripts/main.js"></script>
        <script src="scripts/hello.js"></script>
        <!-- endbuild -->
        <script>
          $(document).ready(function() {
            ratioImage();
            $(window).on('resize', ratioImage);

            function ratioImage() {
              $('.toPresta').each(function(){
                var box = $(this),
                    image = $(this).find('img');
                if ( box.height() > image.height() ) {
                  TweenMax.set(image, {minHeight:'100%'});
                } 
                if ( box.width() > image.width() ) {
                  TweenMax.set(image, {minWidth:'100%'});
                }
              });
            }
            $(document).on({
              mouseenter: function () {
                var bgNb = $(this).find('.nb');
                TweenMax.to(bgNb, 1, {opacity:0,ease:Power3.easeInOut});
              },

              mouseleave: function () {
                var bgNb = $(this).find('.nb');
                TweenMax.to(bgNb, 1, {opacity:1,ease:Power3.easeInOut});
              }
            }, '.toPresta');

          })
        </script>
        <!-- build:js scripts/vendor/bootstrap.js 
        <script src="bower_components/bootstrap/js/affix.js"></script>
        <script src="bower_components/bootstrap/js/alert.js"></script>
        <script src="bower_components/bootstrap/js/dropdown.js"></script>
        <script src="bower_components/bootstrap/js/tooltip.js"></script>
        <script src="bower_components/bootstrap/js/modal.js"></script>
        <script src="bower_components/bootstrap/js/transition.js"></script>
        <script src="bower_components/bootstrap/js/button.js"></script>
        <script src="bower_components/bootstrap/js/popover.js"></script>
        <script src="bower_components/bootstrap/js/carousel.js"></script>
        <script src="bower_components/bootstrap/js/scrollspy.js"></script>
        <script src="bower_components/bootstrap/js/collapse.js"></script>
        <script src="bower_components/bootstrap/js/tab.js"></script>
        endbuild -->
</body>
</html>
