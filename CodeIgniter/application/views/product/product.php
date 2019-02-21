<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>groham | HTML Ecommerce Template</title>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
   

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css');?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/eleganticon.css');?>">

    <!-- MAGNIFIC POPUP -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css');?>">

    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.css');?>">

    <!--Jquery ui-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery-ui.css');?>">

    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css');?>">

    <!-- STYLESHEET -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/home/style.css');?>">


    <!-- GOOGLE FONTS -->
    <link href='<?php echo base_url('https://fonts.googleapis.com/css?family=Open+Sans:300,500,600,700');?> ' rel='stylesheet' type='text/css'>
    <link href='<?php echo base_url('https://fonts.googleapis.com/css?family=Raleway:600,700');?> ' rel='stylesheet' type='text/css'>
    <link href='<?php echo base_url('https://fonts.googleapis.com/css?family=Montserrat:400,700');?> ' rel='stylesheet' type='text/css'>
    <link href='<?php echo base_url('https://fonts.googleapis.com/css?family=Cookie:400');?> ' rel='stylesheet' type='text/css'>

    <!-- FAVICON -->
    <link rel="icon" href="assets/img/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo base_url('assets/img/apple-touch-icon.png');?> ">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('assets/img/apple-touch-icon-72x72.png');?> ">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('assets/img/apple-touch-icon-114x114.png');?> ">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="home01">
    <!--Header-->
    <div class="header">
        <!--Header-Top-->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="left"> Welcome to Groham <span><i class="fa fa-phone"></i>Call us</span> +49 1234 5678 9 </div>
                        <!--/.left-->
                    </div>
                    <!--/.col-md-6-->
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="right">
                            <ul>
                                <li class="cart">
                                    <a href="#"> <img alt="cart" src="<?php echo base_url('assets/img/cart.png');?> "> cart <span>2</span> </a>
                                    <div class="cart-list hidden-xs">
                                        <h5 class="title">your shopping cart <span>(2 items)</span></h5>
                                        <div class="cart-item">
                                            <div class="cart-item-img">
                                                <img class="img-responsive" alt="Single product" src="<?php echo base_url('assets/img/small_gallery/03.jpg');?> ">
                                            </div>

                                            <div class="product-info">
                                                <h5>New Yorker Suit</h5>
                                                <div class="star-rating">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i>
                                                        </li>
                                                        <li><i class="fa fa-star"></i>
                                                        </li>
                                                        <li><i class="fa fa-star"></i>
                                                        </li>
                                                        <li><i class="fa fa-star"></i>
                                                        </li>
                                                        <li><i class="fa fa-star-half-full"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <br>
                                                <div class="price"> <del> $399 </del> $259 </div>
                                                <div class="cart-delete-button"> <a href="#" class="delete-btn btn">delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-item">
                                            <div class="cart-item-img">
                                                <img class="img-responsive" alt="Single product" src="<?php echo base_url('assets/img/small_gallery/04.jpg');?> ">
                                            </div>

                                            <div class="product-info">
                                                <h5>New Yorker Suit</h5>
                                                <div class="star-rating">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i>
                                                        </li>
                                                        <li><i class="fa fa-star"></i>
                                                        </li>
                                                        <li><i class="fa fa-star"></i>
                                                        </li>
                                                        <li><i class="fa fa-star"></i>
                                                        </li>
                                                        <li><i class="fa fa-star-half-full"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <br>
                                                <div class="price"> <del> $399 </del> $259 </div>
                                                <div class="cart-delete-button"> <a href="#" class="delete-btn btn">delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="order-total">
                                            <h5 class="title">Order Total</h5> </div>
                                        <div class="last-line">
                                            <h4> <span class="amount">$166</span></h4>
                                            <a href="checkout.html" class="groham-btn btn black-bordered">Checkout</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="toggle"> <span>USD</span> <i class="fa fa-angle-down"></i>
                                    <ul>
                                        <li><a href="#">USD</a>
                                        </li>
                                        <li><a href="#">EUR</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">my account</a>
                                </li>
                            </ul>
                        </div>
                        <!--/.right-->
                    </div>
                    <!--/.col-md-6-->
                </div>
                <!--/.row-->
            </div>
            <!--/.container-->
        </div>
        <!--/.header-top-->
        <!--Header-Middle-->
        <div class="header-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-12 site-logo">
                        <div class="logo">
                            <a href="home01.html"><img src="<?php echo base_url('assets/img/logo.png');?>  " alt="logo" />
                            </a>
                        </div>
                        <div class="cart-text"> <img src="<?php echo base_url('assets/img/cart-2.png');?> " alt="cart-2"> Free delivery on all US orders over $99 | Free Returns </div>
                    </div>
                    <!--/.site-logo-->
                    <div class="col-md-4 col-sm-4 col-xs-12 header-search">
                        <div class="search default">
                            <form class="searchform" action="#" method="get">
                                <div class="input-group">
                                    <input type="search" id="dsearch" name="s" class="form-control" placeholder="Search for something..."> <span class="input-group-btn">
                                        <button class="btn btn-default" type="button" id="submit-btn"><span class="arrow_right"></span>
                                    </button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <!--/.search-->
                    </div>
                    <!--/.header-search-->
                </div>
                <!--/.row-->
            </div>
            <!--/.container-->
        </div>
        <!--/.header-middle-->
        <!--Navbar-->
        <div class="navbar groham-nav megamenu">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                            <ul class="dropdown-menu">
                                <li class=""><a href="home01.html">Home 1</a>
                                </li>
                                <li><a href="home02.html">Home 2</a>
                                </li>
                                <li><a href="home03.html">Home 3</a>
                                </li>

                            </ul>
                        </li>
                        <li class="dropdown megamenu-fw second"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <h5 class="title">Shop Pages</h5>
                                            <ul>
                                                <li><a href="shop-list.html">Shop List</a>
                                                </li>
                                                <li><a href="shop-list-sidebar.html">Shop List With Sidebar</a>
                                                </li>
                                                <li><a href="shop-grid.html">Shop Grid</a>
                                                </li>
                                                <li><a href="shop-grid-sidebar.html">Shop Grid With Sidebar</a>
                                                </li>


                                            </ul>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <h5 class="title">Shop Pages</h5>
                                            <ul>

                                                <li class="active"><a href="single-product.html">Product Details </a>
                                                </li>

                                                <li><a href="single-product-sidebar.html">Product Details With Sidebar</a>
                                                </li>

                                                <li><a href="cart.html">Cart</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <h5 class="title">Other Pages</h5>
                                            <ul>
                                                <li><a href="about01.html">About 1</a>
                                                </li>
                                                <li><a href="about02.html">About 2</a>
                                                </li>

                                                <li><a href="login.html">Login</a>
                                                </li>
                                                <li><a href="checkout.html">Checkout</a>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="col-md-3 col-sm-6 menuimg"> <img src="<?php echo base_url('assets/img/blog_listed1.jpg');?> " alt="" class="img-responsive"> </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li><a href="shop-grid.html">Men</a>
                        </li>
                        <li class="dropdown megamenu-fw"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">SHOP</a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <h5 class="title">our fashion shop</h5>
                                            <ul>
                                                <li class=""><a href="home01.html">Home Website</a>
                                                </li>
                                                <li><a href="about01.html">About Us</a>
                                                </li>

                                                <li><a href="shop-grid.html">Fashion Trends</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <h5 class="title">Men's Wear</h5>
                                            <ul>
                                                <li><a href="shop-grid.html">Shorts<span class="sell">Sell</span></a>
                                                </li>
                                                <li><a href="shop-grid.html">Suits & Blazers</a>
                                                </li>
                                                <li><a href="shop-grid.html">Swimwear</a>
                                                </li>
                                                <li><a href="shop-grid.html">Trousers & Chinos<span class="new">New</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <h5 class="title">Women's Wear</h5>
                                            <ul>
                                                <li><a href="shop-grid.html">Jackets<span class="sell">Sell</span></a>
                                                </li>
                                                <li><a href="shop-grid.html">Bouses</a>
                                                </li>
                                                <li><a href="shop-grid.html">Night Wear<span class="hot">Hot</span></a>
                                                </li>
                                                <li><a href="shop-grid.html">Jeans & Trousers</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3 col-sm-6 menuimg"> <img src="<?php echo base_url('assets/img/blog_listed1.jpg');?>  " alt="" class="img-responsive"> </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li><a href="shop-grid.html">Women</a>
                        </li>
                        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                            <ul class="dropdown-menu">
                                <li><a href="blog.html">Blog</a>
                                </li>

                                <li><a href="blog-archive.html">Blog Archive</a>
                                </li>
                                <li><a href="blog-single.html">Blog Single</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!--/.navbar-->
    </div>
    <!--/.header-->

    <!--Site-Content-->
    <div id="#content" class="site-content">
        <div class="container">
            <!--page title-->
            <div class="page_title_area row">
                <div class="col-md-12">
                    <div class="bredcrumb">
                        <ul>
                            <li><a href="#">Home</a>
                            </li>
                            <li class="active"><a href="#">SHOP single page</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/.page title-->
            <div class="single-produce-page no-sidebar">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="single-product-details clearfix">
                            <div class="col-md-5">
                                <div class="single-slider-item">
                                    <ul class="owl-slider">
                                        <li class="item">
                                            <img src="<?php echo base_url('assets/img/gallery_men/single-shop-details/big/image1xxl.jpg');?>" alt="" class="img-responsive">
                                        </li>
                                        <li class="item">
                                            <img src="<?php echo base_url('assets/img/gallery_men/single-shop-details/big/image2xxl.jpg');?>" alt="" class="img-responsive">
                                        </li>
                                        <li class="item">
                                            <img src="<?php echo base_url('assets/img/gallery_men/single-shop-details/big/image4xxl.jpg');?> " alt="" class="img-responsive">
                                        </li>
                                        <li class="item">
                                            <img src="<?php echo base_url('assets/img/gallery_men/single-shop-details/big/image3xxl.jpg');?> " alt="" class="img-responsive">
                                        </li>
                                    </ul>
                                    <ul class="thumbnails-wrapper" id="thumbnails-wrapper">
                                        <li class="thumbnails">
                                            <a href="#"><img src="<?php echo base_url('assets/img/gallery_men/single-shop-details/small/shop-1-1.jpg');?> " alt="" class="img-responsive">
                                            </a>
                                        </li>
                                        <li class="thumbnails">
                                            <a href="#"><img src="<?php echo base_url('assets/img/gallery_men/single-shop-details/small/shop-1-2.jpg');?> " alt="" class="img-responsive">
                                            </a>
                                        </li>
                                        <li class="thumbnails">
                                            <a href="#"><img src="<?php echo base_url('assets/img/gallery_men/single-shop-details/small/shop-1-3.jpg');?> " alt="" class="img-responsive">
                                            </a>
                                        </li>
                                        <li class="thumbnails">
                                            <a href="#"><img src="<?php echo base_url('assets/img/gallery_men/single-shop-details/small/shop-1-4.jpg');?> " alt="" class="img-responsive">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="right-content">
                                    <div class="product-info">
                                        <h2>red Stripe T-Shirt</h2>
                                        <h4 class="product-name">T-Shirt</h4>
                                        <div class="price">
                                            $40 <del> $50 </del>
                                        </div>
                                        <div class="product-description">
                                            <h5 class="small-title">DESCRIPTION</h5>
                                            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                        </div>
                                        <div class="item-color">
                                            <h5 class="small-title">select a colour</h5>
                                            <div class="colors-content">
                                                <input type="checkbox" name="color" id="olive1" />
                                                <label for="olive1" class="olive"></label>
                                                <input type="checkbox" name="color" id="chocolate1" />
                                                <label for="chocolate1" class="chocolate"></label>
                                                <input type="checkbox" name="color" id="deeppink1" />
                                                <label for="deeppink1" class="deeppink"></label>
                                                <input type="checkbox" checked name="color" id="blue1" />
                                                <label for="blue1" class="blue"></label>
                                            </div>
                                        </div>
                                        <div class="item-size">
                                            <h5 class="small-title">choose a size</h5>
                                            <div class="size-content">
                                                <input type="radio" name="size" id="xs1" value="xs" />
                                                <label for="xs1"><span>XS</span>
                                                </label>
                                                <input type="radio" name="size" id="s1" value="s" />
                                                <label for="s1"><span>s</span>
                                                </label>
                                                <input type="radio" checked="checked" name="size" id="m1" value="m" />
                                                <label for="m1"><span>m</span>
                                                </label>
                                                <input type="radio" name="size" id="l1" value="l" />
                                                <label for="l1"><span>l</span>
                                                </label>
                                                <input type="radio" name="size" id="xl1" value="xl" />
                                                <label for="xl1"><span>xl</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <span class="item-number"><b>Product Number:</b>  #41121120</span>
                                            <br>
                                            <span class="item-cat"><b>Category:</b>  Men's Suits</span>
                                            <br>
                                            <span class="item-tag"><b>Tags:</b>  elegant, men, shirt, clean</span>
                                        </div>
                                        <div class="actions">
                                            <ul>
                                                <li><a class="add-cart" href="single-product.html"><span><span class="icon_plus"></span></span> add to cart</a>
                                                </li>
                                                <li><a href="#"><span class="icon_heart_alt"></span></a>
                                                </li>
                                                <li><a class="zoom" href="<?php echo base_url('assets/img/gallery_men/single-shop-details/big/image1xxl.jpg');?> "><span class="arrow_expand"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="product-tab">
                                <ul class="nav nav-tabs">
                                    <li class="nav active"><a data-toggle="tab" href="#tab1">PRODUCT DESCRIPTION</a>
                                    </li>
                                    <li><a data-toggle="tab" href="#tab2">CUSTOMER REVIEWS</a>
                                    </li>
                                    <li><a data-toggle="tab" href="#tab3">SHIPPING INFORMATION</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div id="tab1" class="tab-pane active">
                                        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren, kasd magna no rebum. sanctus sea sed takimata ut vero voluptua. est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur.</p>
                                        <ul class="list-tab">
                                            <li>A tailored, modern cut with a roomier fit than our suit, for the guy with an athletic build</li>
                                            <li>Notch lapel</li>
                                            <li>Italian cotton.</li>
                                            <li>Two-button closure.</li>
                                            <li>Nonfunctional buttons at cuffs.</li>
                                            <li>Dry clean.</li>
                                            <li>Import</li>
                                        </ul>
                                    </div>
                                    <div id="tab2" class="tab-pane">

                                        <div class="single-post-page">
                                            <div class="row">

                                                <!-- Comment-Area -->
                                                <div id="comments" class="comments-area">
                                                    <div class="comment-section">

                                                        <ol class="comment-list">
                                                            <li class="comment">
                                                                <div class="comment-body">
                                                                    <div class="comment-author vcard">
                                                                        <div class="author-img">
                                                                            <img alt="" src="<?php echo base_url('assets/img/author/02.jpg');?> ">
                                                                        </div>
                                                                    </div>
                                                                    <!--/.comment-author-->
                                                                    <div class="comment-details">
                                                                        <div class="comment-metadata">
                                                                            <b class="author-name">Martin Jackson</b>
                                                                            <span class="date">April 14,2015 at 11:04</span>
                                                                        </div>
                                                                        <!--/.comment-metadata -->

                                                                        <div class="comment-content">
                                                                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                                                        </div>
                                                                        <!--/.comment-content -->
                                                                        <div class="reply">
                                                                            <a class="comment-reply-link" href="#">Reply</a>
                                                                        </div>
                                                                        <!--/.reply -->
                                                                    </div>
                                                                    <!-- /.comment-details -->
                                                                </div>
                                                                <!-- .comment-body -->
                                                                <ol class="children">
                                                                    <li class="comment">
                                                                        <div class="comment-body">
                                                                            <div class="comment-author vcard">
                                                                                <div class="author-img">
                                                                                    <img alt="author" src="<?php echo base_url('assets/img/author/01.jpg');?> ">
                                                                                </div>
                                                                            </div>
                                                                            <!--/.comment-author -->
                                                                            <div class="comment-details">
                                                                                <div class="comment-metadata">
                                                                                    <b class="author-name">Jonathan Doe</b>
                                                                                    <span class="date">April 14,2015  at 11:04</span>
                                                                                    <a href="#" class="user-name">author</a>
                                                                                </div>
                                                                                <!--/.comment-metadata -->
                                                                                <div class="comment-content">
                                                                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.
                                                                                    </p>
                                                                                </div>
                                                                                <!--/.comment-content -->
                                                                                <div class="reply">
                                                                                    <a class="comment-reply-link" href="#">Reply</a>
                                                                                </div>
                                                                                <!--/.reply -->
                                                                            </div>
                                                                            <!--/.comment-details -->

                                                                        </div>
                                                                        <!--/.comment-body -->
                                                                    </li>
                                                                </ol>
                                                            </li>

                                                            <li class="comment">
                                                                <div class="comment-body">
                                                                    <div class="comment-author vcard">
                                                                        <div class="author-img">
                                                                            <img alt="" src="<?php echo base_url('assets/img/author/03.png');?> ">
                                                                        </div>
                                                                    </div>
                                                                    <!--/.comment-author -->
                                                                    <div class="comment-details">
                                                                        <div class="comment-metadata">
                                                                            <b class="author-name">Kevin Harting</b>
                                                                            <span class="date">April 14,2015 at 11:04</span>
                                                                        </div>
                                                                        <!--/.comment-metadata -->

                                                                        <div class="comment-content">
                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras et ma uriseg haset lorem ultricies ferm entum ras vitae nibh nisl. Forem ipsum dolor sit amet. </p>
                                                                        </div>
                                                                        <!--/.comment-content -->
                                                                        <div class="reply">
                                                                            <a class="comment-reply-link" href="#">Reply</a>
                                                                        </div>
                                                                        <!--/.reply -->
                                                                    </div>
                                                                    <!-- /.comment-details -->
                                                                </div>
                                                                <!--/.comment-body -->
                                                                <ol class="children">
                                                                    <li class="comment">
                                                                        <div class="comment-body">
                                                                            <div class="comment-author vcard">
                                                                                <div class="author-img">
                                                                                    <img alt="author" src="<?php echo base_url('assets/img/author/04.jpg');?> ">
                                                                                </div>
                                                                            </div>
                                                                            <!--/.comment-author -->
                                                                            <div class="comment-details">
                                                                                <div class="comment-metadata">
                                                                                    <b class="author-name">Nicole Sperus</b>
                                                                                    <span class="date">April 14,2015 at 11:04</span>
                                                                                </div>
                                                                                <!--/.comment-metadata -->

                                                                                <div class="comment-content">
                                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras et ma uriseg haset lorem ultricies ferm entum ras vitae nibh nisl. Forem ipsum dolor sit amet.</p>
                                                                                </div>
                                                                                <!--/.comment-content -->
                                                                                <div class="reply">
                                                                                    <a class="comment-reply-link" href="#">Reply</a>
                                                                                </div>
                                                                                <!--/.reply -->
                                                                            </div>
                                                                            <!-- /.comment-details -->
                                                                        </div>
                                                                        <!--/.comment-body -->
                                                                    </li>
                                                                </ol>
                                                            </li>
                                                        </ol>
                                                        <!--/.comment-list -->
                                                    </div>
                                                    <!--/.comment section-->


                                                </div>
                                                <!--/.comment's area-->



                                            </div>
                                            <!--/.comment's area-->
                                        </div>
                                    </div>
                                    <div id="tab3" class="tab-pane">
                                        <h3>Tab 3</h3>
                                        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren, kasd magna no rebum. sanctus sea sed takimata ut vero voluptua. est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="related-products">
                                <div class="heading-title">
                                    <h3 class="title-text">related products</h3>
                                </div>
                                <div class="related-product-content">
                                    <div class="col-md-3 col-sm-6 col-xs-6">
                                        <div class="product-single">
                                            <div class="product-thumb">
                                                <img class="img-responsive" alt="Single product" src="<?php echo base_url('assets/img/gallery_men/01.jpg');?>  ">
                                                <div class="actions">
                                                    <ul>
                                                        <li><a class="add-cart" href="single-product.html"><span><span class="icon_plus"></span></span> add to cart</a>
                                                        </li>
                                                        <li><a href="#"><span class="icon_heart_alt"></span></a>
                                                        </li>
                                                        <li><a class="zoom" href="<?php echo base_url('assets/img/gallery_men/01.jpg');?> "><span class="arrow_expand"></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!--/.product-thumb-->
                                            <div class="product-info">
                                                <h2>White Stripe T-Shirt</h2>
                                                <h4 class="product-name">T-Shirt</h4>
                                                <div class="price">
                                                    $40 <del> $50 </del>
                                                </div>
                                            </div>
                                            <!--/.product-info-->
                                        </div>
                                        <!--/.product-single-->
                                    </div>
                                    <!--/.col-md-4-->
                                    <div class="col-md-3 col-sm-6 col-xs-6">
                                        <div class="product-single">
                                            <div class="product-thumb">
                                                <img class="img-responsive" alt="Single product" src="<?php echo base_url('assets/img/gallery_men/03.jpg');?>">
                                                <div class="actions">
                                                    <ul>
                                                        <li><a class="add-cart" href="single-product.html"><span><span class="icon_plus"></span></span> add to cart</a>
                                                        </li>
                                                        <li><a href="#"><span class="icon_heart_alt"></span></a>
                                                        </li>
                                                        <li><a class="zoom" href="<?php echo base_url('assets/img/gallery_men/03.jpg');?> "><span class="arrow_expand"></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!--/.product-thumb-->
                                            <div class="product-info">
                                                <h2>White Stripe T-Shirt</h2>
                                                <h4 class="product-name">T-Shirt</h4>
                                                <div class="price">
                                                    $40 <del> $50 </del>
                                                </div>
                                            </div>
                                            <!--/.product-info-->
                                        </div>
                                        <!--/.product-single-->
                                    </div>
                                    <!--/.col-md-4-->
                                    <div class="col-md-3 col-sm-6 col-xs-6">
                                        <div class="product-single">
                                            <div class="product-thumb">
                                                <img class="img-responsive" alt="Single product" src="<?php echo base_url('assets/img/gallery_men/05.jpg');?> ">
                                                <div class="actions">
                                                    <ul>
                                                        <li><a class="add-cart" href="single-product.html"><span><span class="icon_plus"></span></span> add to cart</a>
                                                        </li>
                                                        <li><a href="#"><span class="icon_heart_alt"></span></a>
                                                        </li>
                                                        <li><a class="zoom" href="<?php echo base_url('assets/img/gallery_men/05.jpg');?> "><span class="arrow_expand"></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!--/.product-thumb-->
                                            <div class="product-info">
                                                <h2>White Stripe T-Shirt</h2>
                                                <h4 class="product-name">T-Shirt</h4>
                                                <div class="price">
                                                    $40 <del> $50 </del>
                                                </div>
                                            </div>
                                            <!--/.product-info-->
                                        </div>
                                        <!--/.product-single-->
                                    </div>
                                    <!--/.col-md-4-->
                                    <div class="col-md-3 col-sm-6 col-xs-6">
                                        <div class="product-single">
                                            <div class="product-thumb">
                                                <img class="img-responsive" alt="Single product" src="<?php echo base_url('assets/img/gallery_men/08.jpg');?> ">
                                                <div class="actions">
                                                    <ul>
                                                        <li><a class="add-cart" href="single-product.html"><span><span class="icon_plus"></span></span> add to cart</a>
                                                        </li>
                                                        <li><a href="#"><span class="icon_heart_alt"></span></a>
                                                        </li>
                                                        <li><a class="zoom" href="<?php echo base_url('assets/img/gallery_men/08.jpg');?>"><span class="arrow_expand"></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!--/.product-thumb-->
                                            <div class="product-info">
                                                <h2>White Stripe T-Shirt</h2>
                                                <h4 class="product-name">T-Shirt</h4>
                                                <div class="price">
                                                    $40 <del> $50 </del>
                                                </div>
                                            </div>
                                            <!--/.product-info-->
                                        </div>
                                        <!--/.product-single-->
                                    </div>
                                    <!--/.col-md-4-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.container-->
    </div>
    <!--/.about-content-->

    <!--Footer-->
    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-6 col-xs-6">
                        <div class="widget widget-contect">
                            <h3 class="widget-title">Contact Information</h3>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor dolore magna, dolere estus muvelas.</p>
                            <p><strong>Address</strong> 78 Fashion Street, Beverly Hill Abony, NYC 12045</p>
                            <p><strong>Phone:</strong> (800) 0123 4567 890</p>
                            <p><strong>Fax:</strong> (800) 0123 4567 892</p>
                            <p><strong>E-mail:</strong> groham@fashion-template.com</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-6">
                        <div class="widget widget-services">
                            <h3 class="widget-title">our services</h3>
                            <ul class="widget-list">
                                <li><a href="#">Winter sales</a>
                                </li>
                                <li><a href="#">New products</a>
                                </li>
                                <li><a href="#">Best sellers</a>
                                </li>
                                <li><a href="#">Shorts</a>
                                </li>
                                <li><a href="#">Our stores</a>
                                </li>
                                <li><a href="#">About us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-6">
                        <div class="widget widget-tag">
                            <h3 class="widget-title">my account</h3>
                            <ul class="widget-list">
                                <li><a href="#">My orders</a>
                                </li>
                                <li><a href="#">My shopping cart</a>
                                </li>
                                <li><a href="#">My credit slips</a>
                                </li>
                                <li><a href="#">My addresses</a>
                                </li>
                                <li><a href="#">My personal profile</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="widget widget-company-info">
                            <h3 class="widget-title">company information</h3>
                            <ul class="widget-list">
                                <li><a href="#">Brands we sale</a>
                                </li>
                                <li><a href="#">Our locations</a>
                                </li>
                                <li><a href="#">Contact us</a>
                                </li>
                            </ul>
                            <ul class="card-list">
                                <li>
                                    <a href="#"><img src="<?php echo base_url('assets/img/card/01.png');?> " alt="card">
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php echo base_url('assets/img/card/prymant-3.png');?> " alt="card">
                                    </a>

                                </li>
                                <li>
                                    <a href="#"><img src="<?php echo base_url('assets/img/card/prymant-1.png');?> " alt="card">
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php echo base_url('assets/img/card/prymant-2.png');?> " alt="card">
                                    </a>
                                </li>
                                <li>

                                    <a href="#"><img src="<?php echo base_url('assets/img/card/prymant-4.png');?> " alt="card">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.footer-top-->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="footer-logo">
                        <a href="home01.html"><img src="<?php echo base_url('assets/img/logo.png');?> " alt="logo">
                        </a>
                    </div>
                    <ul class="social">
                        <li><a href="#">facebook</a>
                        </li>
                        <li><a href="#">twitter</a>
                        </li>
                        <li><a href="#">pinterest</a>
                        </li>
                        <li><a href="#">instagram</a>
                        </li>
                        <li><a href="#">linked in</a>
                        </li>
                        <li><a href="#">google+</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/.footer-bottom-->
        <div class="copyright home01">
            <div class="container">
                <p class="text-center">&copy; 2016 by Groham - Fashion Template | All rights reserved</p>
            </div>
        </div>
        <!--/.copyright-->
    </footer>
    <!--/.footer-->

    <!--==============================
     Footer js pluging -->
    <!-- jQuery -->

    <script src="<?php echo base_url('assets/js/jquery-1.12.0.min.js');?> "></script>
    <!-- modernizr -->
    <script src="<?php echo base_url('assets/js/vendor/modernizr-2.8.3.min.js');?> "></script>
    <!-- Bootstrap -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?> "></script>
    <!-- wow js-->
    <script type="text/javascript" src="<?php echo base_url('assets/js/wow.min.js');?> "></script>
    <!-- venobox js-->
    <script type="text/javascript" src="<?php echo base_url('assets/js/venobox.min.js');?>"></script>
    <!-- mouse hover js-->
    <script src="<?php echo base_url('assets/js/jquery.directional-hover.js');?> "></script>
    <!-- owl js -->
    <script src="<?php echo base_url('assets/js/owl.carousel.min.js');?> "></script>
    <!--Jquery ui-->
    <script src="<?php echo base_url('assets/js/jquery-ui.js');?>"></script>
    <!-- magnific popup -->
    <script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js');?> "></script>
    <!-- smoothscroll -->
    <script src="<?php echo base_url('assets/js/smoothscroll.js');?> "></script>
    <!-- settings -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/setting.js');?> "></script>
</body>
</html>