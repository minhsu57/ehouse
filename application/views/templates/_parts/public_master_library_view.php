    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="theme-color" content="#3FB871">  <!-- Chrome, Firefox OS and Opera -->
    <meta name="msapplication-navbutton-color" content="#3FB871"> <!-- Windows Phone -->
    <meta name="apple-mobile-web-app-capable" content="yes"> <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"> <!-- iOS Safari -->

    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

    <title>Green Shop</title>
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo public_helper('lib/bootstrap/css/bootstrap.min.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo public_helper('lib/font-awesome/css/font-awesome.min.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo public_helper('owlcarousel/owl.carousel.min.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo public_helper('owlcarousel/owl.theme.green.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo public_helper('css/style.css'); ?>"/>
    
    <!-- Javascript -->
    <script type="text/javascript" src="<?php echo public_helper("lib/jquery/jquery.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo public_helper('lib/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo public_helper("owlcarousel/owl.carousel.min.js"); ?>"></script>
    <script>
    // Custom Javascript
    $(document).ready(function() {
      $slider = $('#slider');
      $slider.addClass('owl-carousel owl-theme');
      $slider.owlCarousel({
        items: 1,
        dots: true,
        nav: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        loop: true,
        dotData:true,
        navText: ["<i class=\"fa fa-angle-left fa-lg\"></i>", "<i class=\"fa fa-angle-right fa-lg\"></i>"]
    });

      $sanphammoi = $('#sanphammoi');
      $sanphammoi.addClass('owl-carousel owl-theme');
      $sanphammoi.owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 6000,
        autoplayHoverPause: true,
        nav: true,
        navText: ["<i class=\"fa fa-angle-left fa-lg\"></i>", "<i class=\"fa fa-angle-right fa-lg\"></i>"],
        responsiveClass:true,
        responsive:{
          0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
});

      $sanphamkhuyenmai = $('#sanphamkhuyenmai');
      $sanphamkhuyenmai.addClass('owl-carousel owl-theme');
      $sanphamkhuyenmai.owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 6000,
        autoplayHoverPause: true,
        dots: false,
        nav: true,
        navText: ["<i class=\"fa fa-angle-left fa-lg\"></i>", "<i class=\"fa fa-angle-right fa-lg\"></i>"],
        responsiveClass:true,
        responsive:{
          0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
});
  });
</script>