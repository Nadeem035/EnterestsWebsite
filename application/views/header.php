<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TR1H8FGNE6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-TR1H8FGNE6');
    </script>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">

    <title><?=$meta_title?></title>
    <meta name="description" content="<?=$meta_desc?>">
    <meta name="keywords" content="<?=$meta_key?>">
    <meta name="robots" content="<?=(isset($meta_robots)) ? 'noindex, nofollow' : 'index, follow'?>">
    <meta name="author" content="Enterests">
    <meta property="og:title" content="<?=$meta_title?>">
    <meta property="og:description" content="<?=$meta_desc?>">
    <meta property="og:image" content="<?=$meta_img?>">
    <meta property="og:url" content="<?=$meta_url?>">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?=$meta_title?>">
    <meta name="twitter:description" content="<?=$meta_desc?>">
    <meta name="twitter:image" content="<?=$meta_img?>">
    <link rel="canonical" href="<?=BASEURL?>" />

    <link rel="apple-touch-icon" sizes="180x180" href="<?=IMG?>favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=IMG?>favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=IMG?>favicon/favicon-16x16.png">
    <link rel="manifest" href="<?=IMG?>favicon/site.webmanifest">


    <meta name="msapplication-TileColor" content="#fa7070">
    <meta name="theme-color" content="#fa7070">

    <!-- Dependency Styles -->
    <link rel="stylesheet" href="<?=DEPENDENCIES?>bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?=DEPENDENCIES?>fontawesome/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="<?=DEPENDENCIES?>swiper/css/swiper.min.css" type="text/css">
    <link rel="stylesheet" href="<?=DEPENDENCIES?>wow/css/animate.min.css" type="text/css">
    <link rel="stylesheet" href="<?=DEPENDENCIES?>magnific-popup/css/magnific-popup.min.css" type="text/css">
    <link rel="stylesheet" href="<?=DEPENDENCIES?>components-elegant-icons/css/elegant-icons.min.css" type="text/css">
    <link rel="stylesheet" href="<?=DEPENDENCIES?>simple-line-icons/css/simple-line-icons.min.css" type="text/css">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="<?=CSS?>app.min.css" type="text/css">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Satisfy&amp;display=swap" rel="stylesheet">

    <?=$schemaMarkupData?>

</head>

<body id="home-version-1" class="home-color-two" data-style="default">

    <a href="#main_content" data-type="section-switch" class="return-to-top" aria-label="Go to top">
        <i class="fa fa-chevron-up"></i>
    </a>

    <div class="page-loader">
        <div class="loader">
            <!-- Loader -->
            <div class="blobs">
                <div class="blob-center"></div>
                <div class="blob"></div>
                <div class="blob"></div>
                <div class="blob"></div>
                <div class="blob"></div>
                <div class="blob"></div>
                <div class="blob"></div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
                <defs>
                    <filter id="goo">
                        <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                        <feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
                        <feBlend in="SourceGraphic" in2="goo" />
                    </filter>
                </defs>
            </svg>

        </div>
    </div><!-- /.page-loader -->

    <div id="main_content">


        <!--=========================-->
        <!--=        Navbar         =-->
        <!--=========================-->
        <header class="site-header header-two header_trans-fixed" data-top="992">
            <div class="container">
                <div class="header-inner">
                    <div class="site-mobile-logo">
                        <a href="<?=BASEURL?>" class="logo">
                            <img src="https://res.cloudinary.com/df039hpk2/image/upload/v1743704452/logo_vbbmws.webp" alt="site logo" class="main-logo">
                            <img src="https://res.cloudinary.com/df039hpk2/image/upload/v1743704452/logo_vbbmws.webp" alt="site logo" class="sticky-logo">
                        </a>
                    </div><!-- /.site-mobile-logo -->

                    <div class="toggle-menu">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                    <!-- /.toggle-menu -->
                    <nav class="site-nav nav-two">
                        <div class="close-menu">
                            <span>Close</span>
                            <i class="ei ei-icon_close"></i>
                        </div>

                        <div class="site-logo">
                            <a href="<?=BASEURL?>" class="logo">
                                <img src="https://res.cloudinary.com/df039hpk2/image/upload/v1743704452/logo_vbbmws.webp" alt="site logo" class="main-logo" style="width: 75px;">
                                <img src="https://res.cloudinary.com/df039hpk2/image/upload/v1743704452/logo_vbbmws.webp" alt="site logo" class="sticky-logo" style="width: 75px;">
                            <!-- <strong style="color: #7052fb;font-size: 30px;">enterests</strong> -->
                            </a>
                        </div>

                        <div class="menu-wrapper <?=$menu_class?>" data-top="992">
                            <ul class="site-main-menu">
                                <li><a href="<?=BASEURL?>">Home</a></li>
                                <li><a href="<?=BASEURL?>#homePageAddonsSectionId">Addons</a></li>
                                <li><a href="<?=BASEURL?>#homePagePricingSectionId">Pricing</a></li>
                                <li><a href="<?=BASEURL.'contact-us'?>">Contact</a></li>
                            </ul>

                            <div class="nav-right">
                                <a href="<?=DEMO_LINK?>" class="nav-btn" aria-label="Demo Account" target="_blank">Free Demo</a>
                            </div>
                        </div>
                        <!-- /.menu-wrapper -->
                    </nav><!-- /.site-nav -->

                </div><!-- /.header-inner -->
            </div><!-- /.container -->
        </header><!-- /.site-header -->