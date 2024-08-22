@extends('layouts.base')
@section('content')
@push('styles')
<style>

</style>
@endpush
<section class="pt-0 poster-section">
    <div class="poster-image slider-for custome-arrow classic-arrow">
        <div>
            <img src="{{asset('assets/images/furniture-images/poster/1.png')}}" class="img-fluid blur-up lazyload" alt="aziz">
        </div>
        <div>
            <img src="assets/images/furniture-images/poster/2.png" class="img-fluid blur-up lazyload" alt="">
        </div>
        <div>
            <img src="assets/images/furniture-images/poster/3.png" class="img-fluid blur-up lazyload" alt="">
        </div>
    </div>
    <div class="slider-nav image-show">
        <div>
            <div class="poster-img">
                <img src="assets/images/furniture-images/poster/t2.jpg" class="img-fluid blur-up lazyload" alt="">
                <div class="overlay-color">
                    <i class="fas fa-plus theme-color"></i>
                </div>
            </div>
        </div>
        <div>
            <div class="poster-img">
                <img src="assets/images/furniture-images/poster/t1.jpg" class="img-fluid blur-up lazyload" alt="">
                <div class="overlay-color">
                    <i class="fas fa-plus theme-color"></i>
                </div>
            </div>

        </div>
        <div>
            <div class="poster-img">
                <img src="assets/images/furniture-images/poster/t3.jpg" class="img-fluid blur-up lazyload" alt="">
                <div class="overlay-color">
                    <i class="fas fa-plus theme-color"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="left-side-contain">
        <div class="banner-left">
            <h4>Sale <span class="theme-color">35% Off</span></h4>
            <h1>New Latest <span>Dresses</span></h1>
            <p>BUY ONE GET ONE <span class="theme-color">FREE</span></p>
            <h2>$79.00 <span class="theme-color"><del>$65.00</del></span></h2>
            <p class="poster-details mb-0">Only <span class="theme-color">Foldam </span> Offers You These Offers.</p>
        </div>
    </div>

    <div class="right-side-contain">
        <div class="social-image">
            <h6>Fashion</h6>
        </div>

        <div class="social-image">
            <h6>get it now</h6>
        </div>

        <div class="social-image">
            <h6>deserve better</h6>
        </div>
    </div>
</section>
<!-- banner section start -->

<section class="ratio2_1 banner-style-2">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6">
                <div class="collection-banner p-bottom p-center text-center">
                    <a href="#" class="banner-img">
                        <img src="assets/images/fashion/banner/1.jpg" class="bg-img blur-up lazyload" alt="fashion">
                    </a>
                    <div class="banner-detail">
                        <a href="javacript:void(0)" class="heart-wishlist">
                            <i class="far fa-heart"></i>
                        </a>
                        <span class="font-dark-30">26% <span>OFF</span></span>
                    </div>
                    <a href="shop-left-sidebar.html" class="contain-banner">
                        <div class="banner-content with-big">
                            <h2 class="mb-2">New Hoodie</h2>
                            <span>BUY ONE GET ONE FREE</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="collection-banner p-bottom p-center text-center">
                    <a href="shop-left-sidebar.html" class="banner-img">
                        <img src="assets/images/fashion/banner/2.jpg" class="bg-img blur-up lazyload" alt="">
                    </a>
                    <div class="banner-detail">
                        <a href="javacript:void(0)" class="heart-wishlist">
                            <i class="far fa-heart"></i>
                        </a>
                        <span class="font-dark-30">50% <span>OFF</span></span>
                    </div>
                    <a href="shop-left-sidebar.html" class="contain-banner">
                        <div class="banner-content with-big">
                            <h2 class="mb-2">Women Fashion</h2>
                            <span>New offer 50% off</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="collection-banner p-bottom p-center text-center">
                    <a href="shop-left-sidebar.html" class="banner-img">
                        <img src="assets/images/fashion/banner/3.jpg" class="bg-img blur-up lazyload" alt="">
                    </a>
                    <div class="banner-detail">
                        <a href="javacript:void(0)" class="heart-wishlist">
                            <i class="far fa-heart"></i>
                        </a>
                        <span class="font-dark-30">36% <span>OFF</span></span>
                    </div>
                    <a href="shop-left-sidebar.html" class="contain-banner">
                        <div class="banner-content with-big">
                            <h2 class="mb-2">New Jacket</h2>
                            <span>BUY ONE GET ONE FREE</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner section end -->

<section class="ratio_asos overflow-hidden">
    <div class="container p-sm-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="title-3 text-center">
                    <h2>New Arrival</h2>
                    <h5 class="theme-color">Our Collection</h5>
                </div>
            </div>
        </div>
        <style>
            .r-price {
                display: flex;
                flex-direction: row;
                gap: 20px;
            }

            .r-price .main-price {
                width: 100%;
            }

            .r-price .rating {
                padding-left: auto;
            }

            .product-style-3.product-style-chair .product-title {
                text-align: left;
                width: 100%;
            }

            @media (max-width:600px) {

                .product-box p,
                .product-box a {
                    text-align: left;
                }

                .product-style-3.product-style-chair .main-price {
                    text-align: right !important;
                }
            }
        </style>
        <div class="row g-sm-4 g-3">

            <div class="col-xl-2 col-lg-2 col-6">
                <div class="product-box">
                    <div class="img-wrapper">
                        <a href="#">
                            <img src="assets/images/fashion/product/front/polo.jpg"
                                class="w-100 bg-img blur-up lazyload" alt="polo">
                        </a>
                        <div class="circle-shape"></div>
                        <span class="background-text">Furniture</span>
                        <div class="label-block">
                            <span class="label label-theme">30% Off</span>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn">
                                        <i data-feather="shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-style-3 product-style-chair">
                        <div class="product-title d-block mb-0">
                            <div class="r-price">
                                <div class="theme-color">$5</div>
                                <div class="main-price">
                                    <ul class="rating mb-1 mt-0">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p class="font-light mb-sm-2 mb-0">Polo</p>
                            <a href="#" class="font-default">
                                <h5>Polo Original  flocking  in small pique</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-6">
                <div class="product-box">
                    <div class="img-wrapper">
                        <a href="#">
                            <img src="assets/images/fashion/product/front/10.jpg"
                                class="w-100 bg-img blur-up lazyload" alt="10">
                        </a>
                        <div class="circle-shape"></div>
                        <span class="background-text">Furniture</span>
                        <div class="label-block">
                            <span class="label label-theme">25% Off</span>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn">
                                        <i data-feather="shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-style-3 product-style-chair">
                        <div class="product-title d-block mb-0">
                            <div class="r-price">
                                <div class="theme-color">$3</div>
                                <div class="main-price">
                                    <ul class="rating mb-1 mt-0">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p class="font-light mb-sm-2 mb-0">Dolores Et</p>
                            <a href="product/details.html" class="font-default">
                                <h5>Quia Non Soluta Aut</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-6">
                <div class="product-box">
                    <div class="img-wrapper">
                        <a href="#">
                            <img src="assets/images/fashion/product/front/17.jpg"
                                class="w-100 bg-img blur-up lazyload" alt="17">
                        </a>
                        <div class="circle-shape"></div>
                        <span class="background-text">Furniture</span>
                        <div class="label-block">
                            <span class="label label-theme">20% Off</span>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn">
                                        <i data-feather="shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-style-3 product-style-chair">
                        <div class="product-title d-block mb-0">
                            <div class="r-price">
                                <div class="theme-color">$8</div>
                                <div class="main-price">
                                    <ul class="rating mb-1 mt-0">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p class="font-light mb-sm-2 mb-0">Blanditiis Error</p>
                            <a href="#" class="font-default">
                                <h5>Nulla Sapiente Sunt Ipsam</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-6">
                <div class="product-box">
                    <div class="img-wrapper">
                        <a href="#">
                            <img src="assets/images/fashion/product/front/3.jpg"
                                class="w-100 bg-img blur-up lazyload" alt="3">
                        </a>
                        <div class="circle-shape"></div>
                        <span class="background-text">Furniture</span>
                        <div class="label-block">
                            <span class="label label-theme">40% Off</span>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn">
                                        <i data-feather="shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-style-3 product-style-chair">
                        <div class="product-title d-block mb-0">
                            <div class="r-price">
                                <div class="theme-color">$4</div>
                                <div class="main-price">
                                    <ul class="rating mb-1 mt-0">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p class="font-light mb-sm-2 mb-0">Qui Ut</p>
                            <a href="product/details.html" class="font-default">
                                <h5>Fuga Officia Quaerat Fugiat</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-6">
                <div class="product-box">
                    <div class="img-wrapper">
                        <a href="#">
                            <img src="assets/images/fashion/product/front/blouson.jpg"
                                class="w-100 bg-img blur-up lazyload" alt="blouson">
                        </a>
                        <div class="circle-shape"></div>
                        <span class="background-text">Furniture</span>
                        <div class="label-block">
                            <span class="label label-theme">10% Off</span>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn">
                                        <i data-feather="shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-style-3 product-style-chair">
                        <div class="product-title d-block mb-0">
                            <div class="r-price">
                                <div class="theme-color">$11</div>
                                <div class="main-price">
                                    <ul class="rating mb-1 mt-0">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p class="font-light mb-sm-2 mb-0">Blouson</p>
                            <a href="#" class="font-default">
                                <h5>Checked Harrington jacket in water-repellent fabric</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-6">
                <div class="product-box">
                    <div class="img-wrapper">
                        <a href="#">
                            <img src="assets/images/fashion/product/front/12.jpg"
                                class="w-100 bg-img blur-up lazyload" alt="12">
                        </a>
                        <div class="circle-shape"></div>
                        <span class="background-text">Furniture</span>
                        <div class="label-block">
                            <span class="label label-theme">20% Off</span>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn">
                                        <i data-feather="shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-style-3 product-style-chair">
                        <div class="product-title d-block mb-0">
                            <div class="r-price">
                                <div class="theme-color">$19</div>
                                <div class="main-price">
                                    <ul class="rating mb-1 mt-0">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p class="font-light mb-sm-2 mb-0">Cupiditate Minus</p>
                            <a href="product/details.html" class="font-default">
                                <h5>Nihil Beatae Sit Sed</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-6">
                <div class="product-box">
                    <div class="img-wrapper">
                        <a href="#">
                            <img src="assets/images/fashion/product/front/veste-t.jpg"
                                class="w-100 bg-img blur-up lazyload" alt="vest-t">
                        </a>
                        <div class="circle-shape"></div>
                        <span class="background-text">Furniture</span>
                        <div class="label-block">
                            <span class="label label-theme">14% Off</span>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn">
                                        <i data-feather="shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-style-3 product-style-chair">
                        <div class="product-title d-block mb-0">
                            <div class="r-price">
                                <div class="theme-color">$4</div>
                                <div class="main-price">
                                    <ul class="rating mb-1 mt-0">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p class="font-light mb-sm-2 mb-0">Veste</p>
                            <a href="product/details.html" class="font-default">
                                <h5>Short Sportsuit jacket with removable hood</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-6">
                <div class="product-box">
                    <div class="img-wrapper">
                        <a href="#">
                            <img src="assets/images/fashion/product/front/robe.jpg"
                                class="w-100 bg-img blur-up lazyload" alt="">
                        </a>
                        <div class="circle-shape"></div>
                        <span class="background-text">Furniture</span>
                        <div class="label-block">
                            <span class="label label-theme">25% Off</span>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn">
                                        <i data-feather="shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-style-3 product-style-chair">
                        <div class="product-title d-block mb-0">
                            <div class="r-price">
                                <div class="theme-color">$18</div>
                                <div class="main-price">
                                    <ul class="rating mb-1 mt-0">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p class="font-light mb-sm-2 mb-0">Robe</p>
                            <a href="product/details.html" class="font-default">
                                <h5>women's long polo-style dress</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-6">
                <div class="product-box">
                    <div class="img-wrapper">
                        <a href="#">
                            <img src="assets/images/fashion/product/front/23.jpg"
                                class="w-100 bg-img blur-up lazyload" alt="23">
                        </a>
                        <div class="circle-shape"></div>
                        <span class="background-text">Furniture</span>
                        <div class="label-block">
                            <span class="label label-theme">30% Off</span>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn">
                                        <i data-feather="shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-style-3 product-style-chair">
                        <div class="product-title d-block mb-0">
                            <div class="r-price">
                                <div class="theme-color">$20</div>
                                <div class="main-price">
                                    <ul class="rating mb-1 mt-0">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p class="font-light mb-sm-2 mb-0">Blanditiis Error</p>
                            <a href="product/details.html" class="font-default">
                                <h5>Iste Qui Voluptatibus Sunt</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-6">
                <div class="product-box">
                    <div class="img-wrapper">
                        <a href="#">
                            <img src="assets/images/fashion/product/front/robet.jpg"
                                class="w-100 bg-img blur-up lazyload" alt="robet">
                        </a>
                        <div class="circle-shape"></div>
                        <span class="background-text">Furniture</span>
                        <div class="label-block">
                            <span class="label label-theme">8% Off</span>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn">
                                        <i data-feather="shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-style-3 product-style-chair">
                        <div class="product-title d-block mb-0">
                            <div class="r-price">
                                <div class="theme-color">$7</div>
                                <div class="main-price">
                                    <ul class="rating mb-1 mt-0">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p class="font-light mb-sm-2 mb-0">Robet</p>
                            <a href="#" class="font-default">
                                <h5>Women Robet </h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-6">
                <div class="product-box">
                    <div class="img-wrapper">
                        <a href="#">
                            <img src="assets/images/fashion/product/front/chemise.jpg"
                                class="w-100 bg-img blur-up lazyload" alt="chemise">
                        </a>
                        <div class="circle-shape"></div>
                        <span class="background-text">Furniture</span>
                        <div class="label-block">
                            <span class="label label-theme">10% Off</span>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn">
                                        <i data-feather="shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-style-3 product-style-chair">
                        <div class="product-title d-block mb-0">
                            <div class="r-price">
                                <div class="theme-color">$5</div>
                                <div class="main-price">
                                    <ul class="rating mb-1 mt-0">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p class="font-light mb-sm-2 mb-0">Chemise</p>
                            <a href="product/details.html" class="font-default">
                                <h5>Slim fit polo shirt in stretch mini piqué</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-6">
                <div class="product-box">
                    <div class="img-wrapper">
                        <a href="product/details.html">
                            <img src="assets/images/fashion/product/front/31.jpg"
                                class="w-100 bg-img blur-up lazyload" alt="31">
                        </a>
                        <div class="circle-shape"></div>
                        <span class="background-text">Furniture</span>
                        <div class="label-block">
                            <span class="label label-theme">09% Off</span>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn">
                                        <i data-feather="shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-style-3 product-style-chair">
                        <div class="product-title d-block mb-0">
                            <div class="r-price">
                                <div class="theme-color">$21</div>
                                <div class="main-price">
                                    <ul class="rating mb-1 mt-0">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p class="font-light mb-sm-2 mb-0">Robe_t</p>
                            <a href="product/details.html" class="font-default">
                                <h5>Robe Women</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- category section start -->

<section class="category-section ratio_40">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="title title-2 text-center">
                    <h2>Our Category</h2>
                    <h5 class="text-color">Our collection</h5>
                </div>
            </div>
        </div>
        <div class="row gy-3">
            <div class="col-xxl-2 col-lg-3">
                <div class="category-wrap category-padding category-block theme-bg-color">
                    <div>
                        <h2 class="light-text">Top</h2>
                        <h2 class="top-spacing">Our Top</h2>
                        <span>Categories</span>
                    </div>
                </div>
            </div>
            <div class="col-xxl-10 col-lg-9">
                <div class="category-wrapper category-slider1 white-arrow category-arrow">
                    <div>
                        <a href="#" class="category-wrap category-padding">
                            <img src="assets/images/fashion/category/1.jpg" class="bg-img blur-up lazyload"
                                alt="category image">
                            <div class="category-content category-text-1">
                                <h3 class="theme-color">Shoes</h3>
                                <span class="text-dark">Fashion</span>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#" class="category-wrap category-padding">
                            <img src="assets/images/fashion/category/2.jpg" class="bg-img blur-up lazyload"
                                alt="category image">
                            <div class="category-content category-text-1">
                                <h3 class="theme-color">Mens</h3>
                                <span class="text-dark">Fashion</span>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#" class="category-wrap category-padding">
                            <img src="assets/images/fashion/category/sweatshirt.jpg" class="bg-img blur-up lazyload"
                                alt="category image">
                            <div class="category-content category-text-1">
                                <h3 class="theme-color">Women's</h3>
                                <span class="text-dark">Fashion</span>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#" class="category-wrap category-padding">
                            <img src="assets/images/fashion/category/robe-polo.jpg" class="bg-img blur-up lazyload"
                                alt="category image">
                            <div class="category-content category-text-1">
                                <h3 class="theme-color">Childs</h3>
                                <span class="text-dark">Fashion</span>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#" class="category-wrap category-padding">
                            <img src="assets/images/fashion/accessoire/2.jpg" class="bg-img blur-up lazyload"
                                alt="category image">
                            <div class="category-content category-text-1">
                                <h3 class="theme-color">Accessoires</h3>
                                <span class="text-dark">Fashion</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- category section end -->


<section class="product-slider overflow-hidden">
    <div>
        <div class="container">
            <div class="row g-3">
                <div class="col-lg-4">
                    <div class="title-3 pb-4 title-border">
                        <h2>Most Popular</h2>
                        <h5 class="theme-color">Our Collection</h5>
                    </div>

                    <div class="product-slider round-arrow">
                        <div>
                            <div class="row g-3">
                                <div class="col-lg-12 col-md-6 col-12">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/images/furniture-images/product/a.jpg"
                                                class="blur-up lazyload" alt="a">
                                        </a>
                                        <div class="product-details">
                                            <a href="#">
                                                <h6 class="font-light">Brasly Bracelets</h6>
                                                <h3>Brasly Bracelets Fashion Roman Crystal Heart Women's</h3>
                                                <h4 class="font-light mt-1"><del>$41</del> <span
                                                        class="theme-color">$39</span>
                                                </h4>
                                                <div class="cart-wrap">
                                                    <ul>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Buy">
                                                            <a href="javascript:void(0)" class="addtocart-btn"
                                                                data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                <i data-feather="shopping-cart"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#quick-view">
                                                                <i data-feather="eye"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.php" class="wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6 col-12">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/images/furniture-images/product/b.jpg"
                                                class="blur-up lazyload" alt="b">
                                        </a>
                                        <div class="product-details">
                                            <a href="#">
                                                <h6 class="font-light">Necklace Charm </h6>
                                                <h3>Women Necklace Charm Jewelry</h3>
                                                <h4 class="font-light mt-1"><del>$38</del> <span
                                                        class="theme-color">$35</span>
                                                </h4>
                                                <div class="cart-wrap">
                                                    <ul>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Buy">
                                                            <a href="javascript:void(0)" class="addtocart-btn"
                                                                data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                <i data-feather="shopping-cart"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#quick-view">
                                                                <i data-feather="eye"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.php" class="wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6 col-12">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/images/furniture-images/product/c.jpg"
                                                class="blur-up lazyload" alt="">
                                        </a>
                                        <div class="product-details">
                                            <a href="#">
                                                <h6 class="font-light">FNew Necklace</h6>
                                                <h3>New Necklace woman Chain pendant Golden heart</h3>
                                                <h4 class="font-light mt-1"><del>$44</del> <span
                                                        class="theme-color">$39</span>
                                                </h4>
                                                <div class="cart-wrap">
                                                    <ul>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Buy">
                                                            <a href="javascript:void(0)" class="addtocart-btn"
                                                                data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                <i data-feather="shopping-cart"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#quick-view">
                                                                <i data-feather="eye"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.php" class="wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6 col-12">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/images/furniture-images/product/d.jpg"
                                                class="blur-up lazyload" alt="d">
                                        </a>
                                        <div class="product-details">
                                            <a href="#">
                                                <h6 class="font-light">Beautiful Breed</h6>
                                                <h3>Beautiful Breed for Women</h3>
                                                <h4 class="font-light mt-1"><del>$23</del> <span
                                                        class="theme-color">$17</span>
                                                </h4>
                                                <div class="cart-wrap">
                                                    <ul>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Buy">
                                                            <a href="javascript:void(0)" class="addtocart-btn"
                                                                data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                <i data-feather="shopping-cart"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#quick-view">
                                                                <i data-feather="eye"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.php" class="wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="title-3 pb-4 title-border">
                        <h2>Recent Popular</h2>
                        <h5 class="theme-color">Our Collection</h5>
                    </div>

                    <div class="product-slider round-arrow">
                        <div>
                            <div class="row g-3">
                                <div class="col-lg-12 col-md-6 col-12">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/images/furniture-images/product/e.jpg"
                                                class="blur-up lazyload" alt="e">
                                        </a>
                                        <div class="product-details">
                                            <a href="#">
                                                <h6 class="font-light">Anti-Vol Bag</h6>
                                                <h3>Chest Anti-Slip Bag shoulder bag</h3>
                                                <h4 class="font-light mt-1"><del>$40</del> <span
                                                        class="theme-color">$35</span>
                                                </h4>
                                                <div class="cart-wrap">
                                                    <ul>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Buy">
                                                            <a href="javascript:void(0)" class="addtocart-btn"
                                                                data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                <i data-feather="shopping-cart"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#quick-view">
                                                                <i data-feather="eye"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.php" class="wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6 col-12">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/images/furniture-images/product/f.jpg"
                                                class="blur-up lazyload" alt="f">
                                        </a>
                                        <div class="product-details">
                                            <a href="#">
                                                <h6 class="font-light">Shoulder bag</h6>
                                                <h3>Fashion Shoulder Bag Anti Theft</h3>
                                                <h4 class="font-light mt-1"><del>$33</del> <span
                                                        class="theme-color">$27</span>
                                                </h4>
                                                <div class="cart-wrap">
                                                    <ul>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Buy">
                                                            <a href="javascript:void(0)" class="addtocart-btn"
                                                                data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                <i data-feather="shopping-cart"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#quick-view">
                                                                <i data-feather="eye"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.php" class="wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6 col-12">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/images/furniture-images/product/j.jpg"
                                                class="blur-up lazyload" alt="j">
                                        </a>
                                        <div class="product-details">
                                            <a href="#">
                                                <h6 class="font-light">SThe bag of nylon</h6>
                                                <h3>The bag is designed so that it can be worn on one shoulder</h3>
                                                <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                        class="theme-color">$35</span>
                                                </h4>
                                                <div class="cart-wrap">
                                                    <ul>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Buy">
                                                            <a href="javascript:void(0)" class="addtocart-btn"
                                                                data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                <i data-feather="shopping-cart"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#quick-view">
                                                                <i data-feather="eye"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.php" class="wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6 col-12">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/images/furniture-images/product/k.jpg"
                                                class="blur-up lazyload" alt="">
                                        </a>
                                        <div class="product-details">
                                            <a href="#">
                                                <h6 class="font-light">School bag</h6>
                                                <h3>Waterproof and durable school bag</h3>
                                                <h4 class="font-light mt-1"><del>$50.00</del> <span
                                                        class="theme-color">$44</span>
                                                </h4>
                                                <div class="cart-wrap">
                                                    <ul>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Buy">
                                                            <a href="javascript:void(0)" class="addtocart-btn"
                                                                data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                <i data-feather="shopping-cart"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#quick-view">
                                                                <i data-feather="eye"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.php" class="wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="title-3 pb-4 title-border">
                        <h2>Most Popular</h2>
                        <h5 class="theme-color">Our Collection</h5>
                    </div>

                    <div class="product-slider round-arrow">
                        <div>
                            <div class="row g-3">
                                <div class="col-lg-12 col-md-6 col-12">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/images/furniture-images/product/l.jpg"
                                                class="blur-up lazyload" alt="">
                                        </a>
                                        <div class="product-details">
                                            <a href="#">
                                                <h6 class="font-light">Diamantine</h6>
                                                <h3>Diamantine Gandoura Livia-mauve</h3>
                                                <h4 class="font-light mt-1"><del>$33</del> <span
                                                        class="theme-color">$31</span>
                                                </h4>
                                                <div class="cart-wrap">
                                                    <ul>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Buy">
                                                            <a href="javascript:void(0)" class="addtocart-btn"
                                                                data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                <i data-feather="shopping-cart"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#quick-view">
                                                                <i data-feather="eye"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.php" class="wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6 col-12">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/images/furniture-images/product/m.jpg"
                                                class="blur-up lazyload" alt="">
                                        </a>
                                        <div class="product-details">
                                            <a href="#">
                                                <h6 class="font-light">Diamantine Kaftan</h6>
                                                <h3>Diamantine Kaftan Rahma-ciel</h3>
                                                <h4 class="font-light mt-1"><del>$34</del> <span
                                                        class="theme-color">$32</span>
                                                </h4>
                                                <div class="cart-wrap">
                                                    <ul>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Buy">
                                                            <a href="javascript:void(0)" class="addtocart-btn"
                                                                data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                <i data-feather="shopping-cart"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#quick-view">
                                                                <i data-feather="eye"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.php" class="wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6 col-12">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/images/furniture-images/product/n.jpg"
                                                class="blur-up lazyload" alt="">
                                        </a>
                                        <div class="product-details">
                                            <a href="#">
                                                <h6 class="font-light">Diamantine Jabador</h6>
                                                <h3>Diamantine Jabador Nihad - Poudre</h3>
                                                <h4 class="font-light mt-1"><del>$46</del> <span
                                                        class="theme-color">$38.50</span>
                                                </h4>
                                                <div class="cart-wrap">
                                                    <ul>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Buy">
                                                            <a href="javascript:void(0)" class="addtocart-btn"
                                                                data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                <i data-feather="shopping-cart"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#quick-view">
                                                                <i data-feather="eye"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.php" class="wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6 col-12">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="assets/images/furniture-images/product/O.jpg"
                                                class="blur-up lazyload" alt="">
                                        </a>
                                        <div class="product-details">
                                            <a href="#">
                                                <h6 class="font-light">Lebssa Ambrine</h6>
                                                <h3>LDiamantine Lebssa Ambrine -red</h3>
                                                <h4 class="font-light mt-1"><del>$47</del> <span
                                                        class="theme-color">$44</span>
                                                </h4>
                                                <div class="cart-wrap">
                                                    <ul>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Buy">
                                                            <a href="javascript:void(0)" class="addtocart-btn"
                                                                data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                <i data-feather="shopping-cart"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#quick-view">
                                                                <i data-feather="eye"></i>
                                                            </a>
                                                        </li>

                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.php" class="wishlist">
                                                                <i data-feather="heart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .products-c .bg-size {
        background-position: center 0 !important;
    }
</style>

<section class="ratio_asos overflow-hidden pb-5">
    <div class="px-0 container-fluid p-sm-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="title-3 text-center">
                    <h2>Fashion Top Deals</h2>
                    <h5 class="theme-color">Our Collection</h5>
                </div>
            </div>

            <div class="our-product products-c">
                <div>
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="#">
                                <img src="assets/images/fashion/product/front/25.jpg"
                                    class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Fashion</span>
                            <div class="label-block">
                                <span class="label label-theme">10% Off</span>
                            </div>
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                            data-bs-target="#addtocart">
                                            <i data-feather="shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#quick-view">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.php" class="wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <div class="r-price">
                                    <div class="theme-color">$14</div>
                                    <div class="main-price">
                                        <ul class="rating mb-1 mt-0">
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="font-light mb-sm-2 mb-0">Multicolor Dress</p>
                                <a href="#" class="font-default">
                                    <h5>Skater Multicolor Dress</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="#">
                                <img src="assets/images/fashion/product/front/26.jpg"
                                    class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Fashion</span>
                            <div class="label-block">
                                <span class="label label-theme">13% Off</span>
                            </div>
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                            data-bs-target="#addtocart">
                                            <i data-feather="shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#quick-view">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.php" class="wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <div class="r-price">
                                    <div class="theme-color">$20</div>
                                    <div class="main-price">
                                        <ul class="rating mb-1 mt-0">
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="font-light mb-sm-2 mb-0">Colins Multicolore</p>
                                <a href="#" class="font-default">
                                    <h5>Colins Multicolore Jupe Femmes</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="#">
                                <img src="assets/images/fashion/product/front/27.jpg"
                                    class="w-100 bg-img blur-up lazyload" alt="27">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Fashion</span>
                            <div class="label-block">
                                <span class="label label-theme">18% Off</span>
                            </div>
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                            data-bs-target="#addtocart">
                                            <i data-feather="shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#quick-view">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.php" class="wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <div class="r-price">
                                    <div class="theme-color">$27</div>
                                    <div class="main-price">
                                        <ul class="rating mb-1 mt-0">
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="font-light mb-sm-2 mb-0">Colins Jupe Verte</p>
                                <a href="#" class="font-default">
                                    <h5>Colins Jupe Verte Femmes</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="#">
                                <img src="assets/images/fashion/product/front/28.jpg"
                                    class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Fashion</span>
                            <div class="label-block">
                                <span class="label label-theme">22% Off</span>
                            </div>
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                            data-bs-target="#addtocart">
                                            <i data-feather="shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#quick-view">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.php" class="wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <div class="r-price">
                                    <div class="theme-color">$25</div>
                                    <div class="main-price">
                                        <ul class="rating mb-1 mt-0">
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="font-light mb-sm-2 mb-0">Camellia long dress</p>
                                <a href="product/details.html" class="font-default">
                                    <h5>Camellia long dress for women</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="#">
                                <img src="assets/images/fashion/product/front/29.jpg"
                                    class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Fashion</span>
                            <div class="label-block">
                                <span class="label label-theme">20% Off</span>
                            </div>
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                            data-bs-target="#addtocart">
                                            <i data-feather="shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#quick-view">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.php" class="wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <div class="r-price">
                                    <div class="theme-color">$29</div>
                                    <div class="main-price">
                                        <ul class="rating mb-1 mt-0">
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="font-light mb-sm-2 mb-0">Koton Women</p>
                                <a href="product/details.html" class="font-default">
                                    <h5>Koton Women’s Dress</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="#">
                                <img src="assets/images/fashion/product/front/30.jpg"
                                    class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Fashion</span>
                            <div class="label-block">
                                <span class="label label-theme">19% Off</span>
                            </div>
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                            data-bs-target="#addtocart">
                                            <i data-feather="shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#quick-view">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.php" class="wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <div class="r-price">
                                    <div class="theme-color">$33</div>
                                    <div class="main-price">
                                        <ul class="rating mb-1 mt-0">
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="font-light mb-sm-2 mb-0">Defacto Robe</p>
                                <a href="#" class="font-default">
                                    <h5>Defacto Robe en Tissu à Col Montant</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="#">
                                <img src="assets/images/fashion/product/front/31.jpg"
                                    class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Fashion</span>
                            <div class="label-block">
                                <span class="label label-theme">30% Off</span>
                            </div>
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                            data-bs-target="#addtocart">
                                            <i data-feather="shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#quick-view">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.php" class="wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <div class="r-price">
                                    <div class="theme-color">$45</div>
                                    <div class="main-price">
                                        <ul class="rating mb-1 mt-0">
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="font-light mb-sm-2 mb-0">Colins Multicolore Robe</p>
                                <a href="product/details.html" class="font-default">
                                    <h5>Colins Multicolore Robe Femmes</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="#">
                                <img src="assets/images/fashion/product/front/32.jpg"
                                    class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Fashion</span>
                            <div class="label-block">
                                <span class="label label-theme">10% Off</span>
                            </div>
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                            data-bs-target="#addtocart">
                                            <i data-feather="shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#quick-view">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.php" class="wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <div class="r-price">
                                    <div class="theme-color">$18</div>
                                    <div class="main-price">
                                        <ul class="rating mb-1 mt-0">
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="font-light mb-sm-2 mb-0">Robe croisée</p>
                                <a href="#" class="font-default">
                                    <h5>ADALIA Robe croisée à motifs</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
