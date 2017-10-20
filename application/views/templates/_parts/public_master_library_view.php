    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="theme-color" content="#3FB871">  <!-- Chrome, Firefox OS and Opera -->
    <meta name="msapplication-navbutton-color" content="#3FB871"> <!-- Windows Phone -->
    <meta name="apple-mobile-web-app-capable" content="yes"> <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"> <!-- iOS Safari -->

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link href="<?php echo $website->favicon_icon; ?>" rel="shortcut icon" type="image/x-icon" />
    <meta http-equiv="content-language" content="vi" />
    <meta name="description" content="<?php echo $website->meta_description; ?>" />
    <meta name="keywords" content="<?php echo $website->meta_keyword; ?>" />
    <meta name="robots" content="noodp,index,follow" />
    <meta name='revisit-after' content='1 days' />

    <title><?php echo $website->page_title; ?></title>
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo public_helper('lib/bootstrap/css/bootstrap.min.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo public_helper('lib/font-awesome/css/font-awesome.min.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo public_helper('owlcarousel/owl.carousel.min.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo public_helper('owlcarousel/owl.theme.green.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo public_helper('css/animate.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo public_helper('css/style.css'); ?>"/>

    <!-- Javascript -->
    <script type="text/javascript" src="<?php echo public_helper("lib/jquery/jquery.min.js"); ?>"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.0.0.js"></script>
    <script type="text/javascript" src="<?php echo public_helper('lib/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo public_helper("owlcarousel/owl.carousel.min.js"); ?>"></script>
    
    <script type="text/javascript" src="<?php echo public_helper("js/script.js"); ?>"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.5/css/bootstrap-dialog.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.5/js/bootstrap-dialog.min.js"></script>

    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="<?php echo public_helper('fancy-box/jquery.fancybox.js?v=2.1.3') ?>"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo public_helper('fancy-box/jquery.fancybox.css?v=2.1.2') ?>" media="screen" />
    
    <script type="text/javascript">
        $(document).ready(function() {
            /*
             *  Simple image gallery. Uses default settings
             */

            $('.fancybox').fancybox();
        });
    </script>