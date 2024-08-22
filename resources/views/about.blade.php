@extends('layouts.base')
@section('content')
<section class="breadcrumb-section section-b-space" style="padding-top:20px;padding-bottom:20px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>About</h3>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route('app.index')}}">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<section class="overflow-hidden">
<div class="container">
    <div class="row g-5">
        <div class="col-xl-5 offset-xl-1">
            <div class="row g-3">
                <div class="col-md-6">
                    <img src="assets/images/inner-page/review-image/6.jpg"
                        class="img-fluid rounded-3 about-image" alt="">
                </div>
                <div class="col-md-6">
                    <img src="assets/images/inner-page/review-image/7.jpg"
                        class="img-fluid rounded-3 about-image" alt="">
                </div>
                <div class="col-12 ratio_40">
                    <div>
                        <img src="assets/images/inner-page/review-image/DBfashion.jpg"
                            class="img-fluid rounded-3 team-image bg-img" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-5">
            <div class="about-details">
                <div>
                    <h2 Who are we/h2>
                    <h3>An online store specializing in selling clothes</h3>
                    <p>Buying and selling online has become easier with foldam the Morocco website as it offers
                        you the best shopping experience. Here is a variety of products from all categories at
                        the best prices.Foldam Morocco is making every effort to provide international and local brands
                        at prices that suit everyone. Therefore, we recommend that you follow our website daily to
                        see the latest offers, so you can find everything you need. Many products are now available
                        to everyone</p>

                    <button onclick="location.href = '{{route('shop.index')}}';" type="button"
                        class="btn btn-solid-default">Shop Now</button>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- team leader section End -->

<!-- Cart Section Start -->

@endsection
