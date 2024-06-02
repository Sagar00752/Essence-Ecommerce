<!DOCTYPE html>
<html lang="en">

<head>

    <style>
        .added{
            color: red !important
        }
        </style>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Essence - Fashion Ecommerce Template</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- ##### Header Area Start ##### -->
    <header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="#">Shop</a>
                                <div class="megamenu">
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Dresses Collection</li>
                                        <li><a href="/shop">Dresses</a></li>
                                        <li><a href="/shop">Blouses &amp; Shirts</a></li>
                                        <li><a href="/shop">T-shirts</a></li>
                                        <li><a href="/shop">Rompers</a></li>
                                    </ul>
                                    <div class="single-mega cn-col-4">
                                        <img src="img/bg-img/bg-6.jpg" alt="">
                                    </div>
                                </div>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="single-product-details.html">Product Details</a></li>
                                    <li><a href="/checkout">Checkout</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="single-blog.html">Single Blog</a></li>
                                    <li><a href="regular-page.html">Regular Page</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>

            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- Search Area -->
                <div class="search-area">
                    <form action="#" method="post">
                        <input type="search" name="search" id="headerSearch" placeholder="Type for search">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                <!-- Favourite Area -->
                <div class="favourite-area">
                    <a class="wishlistcount"
                     href="/wishlist">
                     <img src="img/core-img/heart.svg" alt="">
                    <span class="whislistcount"></span>
                    </a>
                </div>
                <!-- User Login Info -->
                <div class="user-login-info">
                    <a href="#"><img src="img/core-img/user.svg" alt=""></a>
                </div>
                <!-- Cart Area -->
                <div class="cart-area">
                    <a href="#" id="essenceCartBtn"><img src="img/core-img/bag.svg" alt=""> <span class='cartcount'></span></a>
                </div>
            </div>

        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Right Side Cart Area ##### -->
    <div class="cart-bg-overlay"></div>

    <div class="right-side-cart-area">

        <!-- Cart Button -->
        <div class="cart-button">
            <a href="#" id="rightSideCart"><img src="img/core-img/bag.svg" alt=""> <span class="cartcount"></span></a>
        </div>

        <div class="cart-content d-flex">

            <!-- Cart List Area -->
            <div class="cart-list">

                <!-- Single Cart Item -->
                {{-- <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="img/product-img/product-1.jpg" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: Red</p>
                            <p class="price">$45.00</p>
                        </div>
                    </a>
                </div>

                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="img/product-img/product-2.jpg" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: Red</p>
                            <p class="price">$45.00</p>
                        </div>
                    </a>
                </div>

                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="img/product-img/product-3.jpg" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: Red</p>
                            <p class="price">$45.00</p>
                        </div>
                    </a>
                </div> --}}
            </div>

            <!-- Cart Summary -->
            <div class="cart-amount-summary">

                <h2>Summary</h2>
                <ul class="summary-table">
                    <li><span>subtotal:</span> <span class="cartsum">$274.00</span></li>
                    <li><span>delivery:</span> <span>Free</span></li>
                    <li><span>discount:</span> <span class="discount">-15%</span></li>
                    <li><span>total:</span> <span class="totalprice">$232.00</span></li>
                </ul>
                <div class="checkout-btn mt-100">
                    <a href="/checkout" class="btn essence-btn">check out</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Right Side Cart End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>dresses</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Shop Grid Area Start ##### -->
    <section class="shop_grid_area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="shop_sidebar_area">

                        <!-- ##### Single Widget ##### -->
                        <div class="widget catagory mb-50">
                            <!-- Widget Title -->
                            <h6 class="widget-title mb-30">Catagories</h6>
                            {{-- <style>
                                .catagory a.all{
                                        background-color: red;
                                }
                                </style> --}}

                            <!--  Catagories  -->
                            <div class="catagories-menu" class="all">
                                <ul id="menu-content2" >
                                    <!-- Single Item -->
                                    <li >
                                        <a href="#">clothing</a>
                                        <ul class="sub-menu collapse show"  class="catagory"   id="clothing">
                                            <li><a href="#"class="cls_cat active" data-id="all">All</a></li>
                                            <style>
                                                </style>
                                            @foreach ($dress as $dres)
                                            <li><a href="#"class="cls_cat"  data-id={{$dres->id}}>{{$dres->dresses}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- ##### Single Widget ##### -->
                        <div class="widget price mb-50">
                            <!-- Widget Title -->
                            <h6 class="widget-title mb-30">Filter by</h6>
                            <!-- Widget Title 2 -->
                            <p class="widget-title2 mb-30">Price</p>

                            <div class="widget-desc">
                                <div class="slider-range">
                                    <div data-min="0" data-max="10000" data-unit="rs" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all slider" data-value-min="0" data-value-max="10000" data-label-result="Range:">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    </div>
                                    <div class="range-price">Range: rs0 - rs10000</div>
                                </div>
                            </div>
                        </div> <div class="single-cart-item">
                            <a href="#" class="product-image">

                                <!-- Cart Item Desc -->
                                <div class="cart-item-desc">
                                  <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                                    <span class="badge">Mango</span>


                                </div>
                            </a>
                        </div>

                        <!-- ##### Single Widget ##### -->
                        <div class="widget color mb-50">
                            <!-- Widget Title 2 -->
                            <p class="widget-title2 mb-30">Color</p>
                            <div class="widget-desc active1">
                                <ul class="d-flex">
                                    <li><a href="#" class="color1 sag2 active" id="none"></a></li>
                                    <li><a href="#" class="color2 sag2" id="grey"></a></li>
                                    <li><a href="#" class="color3 sag2" id="black"></a></li>
                                    <li><a href="#" class="color4 sag2" id="blue"></a></li>
                                    <li><a href="#" class="color5 sag2" id="red"></a></li>
                                    <li><a href="#" class="color6 sag2" id="yellow"></a></li>
                                    <li><a href="#" class="color7 sag2" id="orange"></a></li>
                                    <li><a href="#" class="color8 sag2" id="brown"></a></li>
                                    <li><a href="#" class="color9 sag2" id="green"></a></li>
                                    <li><a href="#" class="color10 sag2" id="purple"></a></li>
                                </ul>
                            </div>
                        </div>


                        <!-- ##### Single Widget ##### -->
                        <div class="widget brands mb-50">
                            <!-- Widget Title 2 -->
                            <p class="widget-title2 mb-30">Brands</p>
                            <div class="widget-desc" >
                                <ul>
                                    <li ><a href="#" class="conclass active1" data_id=all>All</a></li>
                                    @foreach ($items as $item)
                                    <li ><a href="#" class="conclass" data_id={{$item->product_id}}>{{$item->brand}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-8 col-lg-9">
                    <div class="shop_grid_product_area">
                        <div class="row">
                            <div class="col-12">
                                <div class="product-topbar d-flex align-items-center justify-content-between">
                                    <!-- Total Products -->
                                    <div class=" total_len">
                                        <p><span><span class="total-products"></span> products found</span></p>
                                    </div>
                                    <!-- Sorting -->
                                    <div class="product-sorting d-flex active">
                                        <p>Sort by:</p>
                                        <form action="#" method="get">
                                            <select name="select" id="sortByselect" class="active cls_sorting">
                                                <option value="value0" class="sort" data-id="default">Newest</option>
                                                <option value="value1" class="sort" data-id="new">Newest</option>
                                                <option value="value2"  class="sort" data-id="high">Price: high to low</option>
                                                <option value="value3"  class="sort" data-id="low">Price: low to high</option>
                                            </select>
                                            <input type="submit" class="d-none" value="">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="shop_data">

                            <!-- Single Product -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="img/product-img/product-1.jpg" alt="">
                                        <!-- Hover Thumb -->
                                        <img class="hover-img" src="img/product-img/product-2.jpg" alt="">

                                        <!-- Product Badge -->
                                        <div class="product-badge offer-badge">
                                            <span>-30%</span>
                                        </div>
                                        <!-- Favourite -->
                                        <div class="product-favourite">
                                            <a href="#" class="favme fa fa-heart "></a>
                                        </div>
                                    </div>

                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <span>topshop</span>
                                        <a href="single-product-details.html">
                                            <h6>Knot Front Mini Dress</h6>
                                        </a>
                                        <p class="product-price"><span class="old-price">$75.00</span> $55.00</p>

                                        <!-- Hover Content -->
                                        <div class="hover-content">
                                            <!-- Add to Cart -->
                                            <div class="add-to-cart-btn">
                                                <a href="#" class="btn essence-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="img/product-img/product-2.jpg" alt="">
                                        <!-- Hover Thumb -->
                                        <img class="hover-img" src="img/product-img/product-3.jpg" alt="">

                                        <!-- Favourite -->
                                        <div class="product-favourite">
                                            <a href="#" class="favme fa fa-heart"></a>
                                        </div>
                                    </div>

                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <span>topshop</span>
                                        <a href="single-product-details.html">
                                            <h6>Knot Front Mini Dress</h6>
                                        </a>
                                        <p class="product-price">$80.00</p>

                                        <!-- Hover Content -->
                                        <div class="hover-content">
                                            <!-- Add to Cart -->
                                            <div class="add-to-cart-btn">
                                                <a href="#" class="btn essence-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="img/product-img/product-3.jpg" alt="">
                                        <!-- Hover Thumb -->
                                        <img class="hover-img" src="img/product-img/product-4.jpg" alt="">

                                        <!-- Product Badge -->
                                        <div class="product-badge new-badge">
                                            <span>New</span>
                                        </div>

                                        <!-- Favourite -->
                                        <div class="product-favourite">
                                            <a href="#" class="favme fa fa-heart addclass"></a>
                                        </div>
                                    </div>

                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <span>topshop</span>
                                        <a href="single-product-details.html">
                                            <h6>Knot Front Mini Dress</h6>
                                        </a>
                                        <p class="product-price">$80.00</p>

                                        <!-- Hover Content -->
                                        <div class="hover-content">
                                            <!-- Add to Cart -->
                                            <div class="add-to-cart-btn">
                                                <a href="#" class="btn essence-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="img/product-img/product-4.jpg" alt="">
                                        <!-- Hover Thumb -->
                                        <img class="hover-img" src="img/product-img/product-5.jpg" alt="">

                                        <!-- Favourite -->
                                        <div class="product-favourite">
                                            <a href="#" class="favme fa fa-heart"></a>
                                        </div>
                                    </div>

                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <span>topshop</span>
                                        <a href="single-product-details.html">
                                            <h6>Knot Front Mini Dress</h6>
                                        </a>
                                        <p class="product-price">$80.00</p>

                                        <!-- Hover Content -->
                                        <div class="hover-content">
                                            <!-- Add to Cart -->
                                            <div class="add-to-cart-btn">
                                                <a href="#" class="btn essence-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="img/product-img/product-5.jpg" alt="">
                                        <!-- Hover Thumb -->
                                        <img class="hover-img" src="img/product-img/product-6.jpg" alt="">

                                        <!-- Product Badge -->
                                        <div class="product-badge offer-badge">
                                            <span>-30%</span>
                                        </div>

                                        <!-- Favourite -->
                                        <div class="product-favourite">
                                            <a href="#" class="favme fa fa-heart"></a>
                                        </div>
                                    </div>

                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <span>topshop</span>
                                        <a href="single-product-details.html">
                                            <h6>Knot Front Mini Dress</h6>
                                        </a>
                                        <p class="product-price"><span class="old-price">$75.00</span> $55.00</p>

                                        <!-- Hover Content -->
                                        <div class="hover-content">
                                            <!-- Add to Cart -->
                                            <div class="add-to-cart-btn">
                                                <a href="#" class="btn essence-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="img/product-img/product-6.jpg" alt="">
                                        <!-- Hover Thumb -->
                                        <img class="hover-img" src="img/product-img/product-7.jpg" alt="">

                                        <!-- Favourite -->
                                        <div class="product-favourite">
                                            <a href="#" class="favme fa fa-heart"></a>
                                        </div>
                                    </div>

                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <span>topshop</span>
                                        <a href="single-product-details.html">
                                            <h6>Knot Front Mini Dress</h6>
                                        </a>
                                        <p class="product-price">$80.00</p>

                                        <!-- Hover Content -->
                                        <div class="hover-content">
                                            <!-- Add to Cart -->
                                            <div class="add-to-cart-btn">
                                                <a href="#" class="btn essence-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="img/product-img/product-7.jpg" alt="">
                                        <!-- Hover Thumb -->
                                        <img class="hover-img" src="img/product-img/product-8.jpg" alt="">

                                        <!-- Product Badge -->
                                        <div class="product-badge new-badge">
                                            <span>New</span>
                                        </div>

                                        <!-- Favourite -->
                                        <div class="product-favourite">
                                            <a href="#" class="favme fa fa-heart"></a>
                                        </div>
                                    </div>

                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <span>topshop</span>
                                        <a href="single-product-details.html">
                                            <h6>Knot Front Mini Dress</h6>
                                        </a>
                                        <p class="product-price">$80.00</p>

                                        <!-- Hover Content -->
                                        <div class="hover-content">
                                            <!-- Add to Cart -->
                                            <div class="add-to-cart-btn">
                                                <a href="#" class="btn essence-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="img/product-img/product-8.jpg" alt="">
                                        <!-- Hover Thumb -->
                                        <img class="hover-img" src="img/product-img/product-9.jpg" alt="">

                                        <!-- Favourite -->
                                        <div class="product-favourite">
                                            <a href="#" class="favme fa fa-heart"></a>
                                        </div>
                                    </div>

                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <span>topshop</span>
                                        <a href="single-product-details.html">
                                            <h6>Knot Front Mini Dress</h6>
                                        </a>
                                        <p class="product-price">$80.00</p>

                                        <!-- Hover Content -->
                                        <div class="hover-content">
                                            <!-- Add to Cart -->
                                            <div class="add-to-cart-btn">
                                                <a href="#" class="btn essence-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="img/product-img/product-9.jpg" alt="">
                                        <!-- Hover Thumb -->
                                        <img class="hover-img" src="img/product-img/product-1.jpg" alt="">

                                        <!-- Favourite -->
                                        <div class="product-favourite">
                                            <a href="#" class="favme fa fa-heart"></a>
                                        </div>
                                    </div>

                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <span>topshop</span>
                                        <a href="single-product-details.html">
                                            <h6>Knot Front Mini Dress</h6>
                                        </a>
                                        <p class="product-price">$80.00</p>

                                        <!-- Hover Content -->
                                        <div class="hover-content">
                                            <!-- Add to Cart -->
                                            <div class="add-to-cart-btn">
                                                <a href="#" class="btn essence-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Pagination -->
                    <nav aria-label="navigation">
                        <ul class="pagination mt-50 mb-70">
                            {{-- <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">21</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li> --}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Shop Grid Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row">
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area d-flex mb-30">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="#"><img src="img/core-img/logo2.png" alt=""></a>
                        </div>
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <ul>
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area mb-30">
                        <ul class="footer_widget_menu">
                            <li><a href="#">Order Status</a></li>
                            <li><a href="#">Payment Options</a></li>
                            <li><a href="#">Shipping and Delivery</a></li>
                            <li><a href="#">Guides</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Use</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row align-items-end">
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area">
                        <div class="footer_heading mb-30">
                            <h6>Subscribe</h6>
                        </div>
                        <div class="subscribtion_form">
                            <form action="#" method="post">
                                <input type="email" name="mail" class="mail" placeholder="Your email here">
                                <button type="submit" class="submit"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area">
                        <div class="footer_social_area">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>




<div class="row mt-5">
                <div class="col-md-12 text-center">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>, distributed by <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>

        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Classy Nav js -->
    <script src="js/classy-nav.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>



<script>

$("body").on("click",".product-remove",function(){
    var cartdel =$(this).attr('data-id')
    $(this).parents('.single-cart-item').remove();

    $.ajax({
        url:'/cancel',
        type:'post',
        data:{
            'cartdel':cartdel,
            _token:'{{csrf_token()}}'
        },
        success:function(response){
        }
    })
})

</script>


<script>
    var fpage=1;
    var lpage=8;
    $(document).ready(function(){
        postdata();
    })
    $("body").on("click",".slider-range-price ",function(){
        postdata();
})
    $('.conclass').click(function(){
        $(".conclass").removeClass('active1');
        $(this).addClass('active1');
        postdata()
    })

    $(".list").click(function(){
    setTimeout(() => {
        postdata()
    }, 1000);
    })

$('.sag2').click(function(){
    $(".sag2").removeClass('active')
    $(this).addClass('active');
    postdata()

});
$(".cls_cat").click(function(){
    $('.cls_cat').removeClass('active');
    $(this).addClass('active');
    postdata()
});
function checkpage(data){
    fpage = $(data).attr('data-page');
    postdata();
}
 $("#headerSearch").keypress(function(){
    postdata();
    });
    function postdata() {
        var id  = $(".cls_cat.active").attr('data-id');
        var search = $("#headerSearch").val()
    // console.log(id);
    var color=$(".sag2.active").attr('id')
    var abc= $(".current").text();
    var sag=$('.conclass.active1').attr('data_id');
        var html='';
    var arr=[];
    var wx='';

    $.ajax({
        url:"/postdata",
        type:"Post",
        data:{
            "start":start,
            "end":end,
            'page':fpage,
            "id":id,
            "color12":color,
            "sort":abc,
            "brand":sag,
            "search":search,
            _token:'{{csrf_token()}}'
        },
        success:function(response){
          var  data=response.item.data;
          var wishliststatus=response.wishliststatus;
          lpage=response.item.last_page;
          if(response.count=="0"){
              $(".shop_data").html("no products found");
            $(".pagination").hide();
          }else{
            $(".pagination").show()
            checkpaginate()
          $(data).each(function(i,e){
              $(wishliststatus).each(function(i,e){
            arr.push(e.id);
        })
        if(arr.includes(e.id)){
            wx="added"
        }
            html+=
            '<div class="shop_data">'+
                '<p class="sag123"></p>'+
                '<div class="single-product-wrapper">'+
                    '<div class="col-12 col-sm-6 col-lg-4">'+

                                    '<div class="product-img">'+
                                        '<img src="img/'+e.image+'"alt="">'+
                                        '<div class="product-badge offer-badge">'+
                                            '<span>'+e.discount+'</span>'+
                                        '</div>'+
                                        '<div class="product-favourite color">'+
                                            '<a href="#" dete-id='+e.id+'  class="favme fa fa-heart '+wx+'"></a>'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="product-description">'+
                                        '<span>'+e.product_desc+'</span>'+
                                        '<a href="single-product-details.html">'+
                                            '<h6>'+e.product_name+'</h6>'+
                                        '</a>'+
                                        '<p class="product-price"><span class="old-price">'+e.discount+'</span> '+e.price+'</p>'+
                                        '<div class="hover-content">'+
                                          '<div class="add-to-cart-btn">'+
                                                '<a data-id='+e.id+' class="btn essence-btn clscartbtn">Add to Cart</a>'+
                                            '</div>'+
                                       ' </div>'+
                                    '</div>'+
                                    ' </div>';


        })
        $('.shop_data').html(html);
        $('.total-products').html(response.count);
        $('.whislistcount').html(response.count1);
    }
}
    });
// })
 }
 function checkpaginate(){
    var html="";
fpage =parseInt(fpage);
lpage=parseInt(lpage);

if(fpage==1){
    html+='<li class="page-item"><a class="page-link"><i class="fa fa-angle-left"></i></a></li>';
}else{
    html+='<li class="page-item"><a class="page-link" onClick="checkpage(this)" data-page="'+(fpage-1)+'"><i class="fa fa-angle-left"></i></a></li>';
 }
 for(i=1;i<=lpage;i++){
    html+='<li class="page-item"><a class="page-link"  onClick="checkpage(this)" data-page='+i+'>'+i+'</a></li>';
 }
 if(lpage==fpage){
    html+='<li class="page-item"><a class="page-link"><i class="fa fa-angle-right"></i></a></li>';
 }else{
    html+='<li class="page-item"><a class="page-link"onClick="checkpage(this)" data-page="'+(fpage+1)+'"><i class="fa fa-angle-right"></i></a></li>';
 }
 $('.pagination').html(html);
}
$("body").on("click",".clscartbtn",function(){
    var size=prompt("enter size");
    var quantity=prompt("enetr quantity")
  var cartid = $(this).attr('data-id');

var total_discount=0;
var total_price=0;
    // console.log(cartid);
    $.ajax({
        url:"/getcart",
        type:"Post",
        data:{
            "cartid":cartid,
            "size":size,
            "quantity":quantity,
            _token:'{{csrf_token()}}'
        },
        success:function(response){
            var cart=response.cart;
            var c_sum=response.c_sum;
            var discount=response.discount
            console.log(cart);
            var html="";
            $(cart).each(function(i,e){

                //console.log(value)
                html+=
                '<div class="single-cart-item">'+
                    '<a href="#" class="product-image">'+
                        '<img src="img/'+e.image+'" class="cart-thumb" alt="">'+
                        '<div class="cart-item-desc">'+
                          '<span class="product-remove" data-id='+e.id+'><i class="fa fa-close cartdel"  aria-hidden="true"></i></span>'+
                            '<span class="badge">'+e.brand+'</span>'+
                            '<h6>Button Through Strap Mini Dress</h6>'+
                            '<p class="color">'+e.color+'</p>'+
                            '<p class="price">'+e.price+'</p>'+
                        '</div>'+
                    '</a>'+
                '</div>';

            });


            $('.cart-list').html(html);
            if(discount==0){
                $discount.html(0);
            }else {
            $(cart).each(function(i,e){
                dis=e.discount;
                pis=e.price;

                total_discount=parseInt(total_discount)+(parseInt(dis));
                total_price=parseInt(total_price)+(pis);
                final_discount=parseFloat(total_price)*(parseFloat(total_discount/100));
                afterdiscount=(total_price)-(final_discount);

            })
            $('.cartsum').html(total_price);
            $('.discount').html(final_discount);
            $('.totalprice').html(afterdiscount);
        }
    }
    })
})


$("body").on("click",".favme",function(){
  var val='';
  var ids=$(this).attr('dete-id')
  if($(this).hasClass('added')){
    $(this).removeClass('added')
     val=0;
  }else{
    $(this).addClass('added')
    val=1;
  }

    $.ajax({
        url:'/wishlistpost',
        type:'post',
        data:{
            "wishid":ids,
            "val":val,
            _token:'{{csrf_token()}}'
        },
        success:function(response){
        }
    })
})

$(document).ready(function(){
    $.ajax({
        url:"/displaydata",
        type:"Post",
        data:{
            _token:'{{csrf_token()}}'
        },
        success:function(response){
            var cart=response.cart;
            console.log(cart);
            var html="";
            $(cart).each(function(i,e){

                //console.log(value)
                html+=
                '<div class="single-cart-item">'+
                    '<a href="#" class="product-image">'+
                        '<img src="img/'+e.image+'" class="cart-thumb" alt="">'+
                        '<div class="cart-item-desc">'+
                          '<span class="product-remove" data-id='+e.id+'><i class="fa fa-close cartdel"  aria-hidden="true"></i></span>'+
                            '<span class="badge">'+e.brand+'</span>'+
                            '<h6>Button Through Strap Mini Dress</h6>'+
                            '<p class="color">'+e.color+'</p>'+
                            '<p class="price">'+e.price+'</p>'+
                        '</div>'+
                    '</a>'+
                '</div>';



            });


            $('.cart-list').html(html);
            $('.cartcount').html(response.count)


        }
})
})
$('.user-login-info').click(function(){
    $.ajax({
        url:'/logout',
        type:'post',
        data:{
             _token:'{{csrf_token()}}'
        },
        success:function(response){
            $status=response.status
            console.log($status);
            if($status==200){
                window.location.href =  "/login";
            };
        }
    })
})


</script>
</body>

</html>
