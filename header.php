<?php
    $BUSINESS_NAME = "Glow Beauty Emporium";
    $PHONE_NUMBER_FULL = "+447886221372";
    $PHONE_NUMBER_DISPLAY = "+44 (0) 7886 221372";
    $EMAIL_ADDRESS = "enquiries@glowbeautyemporium.com";
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $BUSINESS_NAME; ?> - Premium Hair Treatments & Cosmetics</title>
    <meta name="author" content="Vecuro">
    <meta name="description" content="<?php echo $BUSINESS_NAME; ?> - Premium Human Hair, Wigs, Extensions, and Hair Care Cosmetics.">
    <meta name="keywords"
        content="hair, hair salon, hair treatment, hair extension, wigs, braided wigs, female cosmetics, human hair, hair accessories, beauty emporium">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Marcellus&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="preloader"><button class="vs-btn preloaderCls">Cancel Preloader</button>
        <div class="preloader-inner">
            <div class="loader"></div>
        </div>
    </div><svg viewBox="0 0 150 150" class="svg-hidden">
        <path id="textPath" d="M 0,75 a 75,75 0 1,1 0,1 z"></path>
    </svg>
    <div class="vs-menu-wrapper">
        <div class="vs-menu-area text-center"><button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo"><a href="index.php"><img src="assets/img/icons/logo.png" alt="<?php echo $BUSINESS_NAME; ?>"></a></div>
            <div class="vs-mobile-menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li class="menu-item-has-children"><a href="service.php">Services</a>
                        <ul class="sub-menu">
                            <li><a href="service.php">All Hair Services</a></li>
                            <li><a href="appointment.php">Book Appointment</a></li>
                            <li><a href="price-plan.php">Pricing</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="shop.php">Shop</a>
                        <ul class="sub-menu">
                            <li><a href="shop.php">All Products</a></li>
                            <li><a href="shop_details.php">Product Details</a></li>
                            <li><a href="cart.php">Basket</a></li>
                            <li><a href="checkout.php">Checkout</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="blog.php">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog.php">News & Articles</a></li>
                            <li><a href="blog-details.php">Blog Details</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="sidemenu-wrapper d-none d-lg-block">
        <div class="sidemenu-content"><button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget">
                <div class="footer-logo"><img src="assets/img/icons/logo.png" alt="logo"></div>
                <div class="info-media1">
                    <div class="media-icon"><i class="fal fa-map-marker-alt"></i></div><span class="media-label">2 St Peters Street, Huddersfield HD1 1LN, United Kingdom</span>
                </div>
                <div class="info-media1">
                    <div class="media-icon"><i class="far fa-phone-alt"></i></div><span class="media-label"><a
                            href="tel:<?php echo $PHONE_NUMBER_FULL; ?>" class="text-inherit"><?php echo $PHONE_NUMBER_DISPLAY; ?></a></span>
                </div>
                <div class="info-media1">
                    <div class="media-icon"><i class="fal fa-envelope"></i></div><span class="media-label"><a
                            class="text-inherit" href="mailto:<?php echo $EMAIL_ADDRESS; ?>"><?php echo $EMAIL_ADDRESS; ?></a></span>
                </div>
            </div>
            <div class="widget">
                <h3 class="widget_title">Latest Hair News</h3>
                <div class="recent-post-wrap">
                    <div class="recent-post">
                        <div class="media-img"><a href="blog-details.php"><img
                                    src="assets/img/widget/recent-post-1-1.jpg" alt="Blog Image"></a></div>
                        <div class="media-body">
                            <h4 class="post-title"><a class="text-inherit" href="blog-details.php">Top Hair Care Trends for 2024</a></h4>
                            <div class="recent-post-meta"><a href="blog.php"><i class="fas fa-calendar-alt"></i>Sept 15, 2024</a></div>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="media-img"><a href="blog-details.php"><img
                                    src="assets/img/widget/recent-post-1-2.jpg" alt="Blog Image"></a></div>
                        <div class="media-body">
                            <h4 class="post-title"><a class="text-inherit" href="blog-details.php">Guide to Choosing the Best Wig Style</a></h4>
                            <div class="recent-post-meta"><a href="blog.php"><i class="fas fa-calendar-alt"></i>Sept 01, 2024</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="vs-header header-layout2">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-sm-auto text-center">
                        <p class="header-text">RECEIVE FREE SHIPPING ON HAIR COSMETICS OVER £50</p>
                    </div>
                    <div class="col-auto d-none d-sm-block">
                        <div class="social-style1"><a href="#"><i class="fab fa-facebook-f"></i></a> <a
                                href="#"><i class="fab fa-twitter"></i></a> <a href="#"><i
                                    class="fab fa-instagram"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrap">
            <div class="sticky-active">
                <div class="menu-area">
                    <div class="menu-inner">
                        <div class="container">
                            <div class="row justify-content-between align-items-center gx-60">
                                <div class="col">
                                    <div class="header-logo"><a href="index.php"><img src="assets/img/icons/logo.png" width="100"
                                                alt="<?php echo $BUSINESS_NAME; ?>"></a></div>
                                </div>
                                <div class="col-auto">
                                    <nav class="main-menu menu-style1 d-none d-lg-block">
                                        <ul>
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="shop.php">Shop</a></li>
                                            <li><a href="service.php">Services</a></li>
                                            <li><a href="about.php">About Us</a></li>
                                            <li><a href="contact.php">Contact Us</a></li>
                                            <li><a href="gallery.php">Gallery</a></li>
                                            <li><a href="blog.php">Blog</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="col-auto">
                                    <div class="header-icons"></button> <a href="appointment.php"
                                            class="vs-btn style8 d-none d-xl-inline-block">Book Now</a> <button
                                            class="bar-btn sideMenuToggler d-none d-xl-inline-block"><span
                                                class="bar"></span> <span class="bar"></span> <span
                                                class="bar"></span></button> <button
                                            class="vs-menu-toggle d-inline-block d-lg-none" type="button"><i
                                                class="fal fa-bars"></i></button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>