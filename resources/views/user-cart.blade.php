@extends('layouts.base')
@section('content')
@push('styles')
<link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
<link rel="preconnect" href="https://fonts.gstatic.com/">
<link
  href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
  rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Allura&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/plugins/swiper.min.css" type="text/css" />
<link rel="stylesheet" href="assetss/css/style.css" type="text/css" />
<link rel="stylesheet" href="assets/css/custom.css" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

@endpush
    <section class="my-account container">
        <h2 class="page-title">My Account</h2>
        <div class="row">
            <div class="col-lg-3"> @include('compte-nav')  </div>
            <div class="col-lg-9">
                <main class="pt-90">
                    <div class="mb-4 pb-4"></div>
                    <section class="breadcrumb-section section-b-space" style="padding-top:20px;padding-bottom:20px;">
                        <ul class="circles">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <h3>Cart</h3>
                                    <nav>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="{{route('app.index')}}">
                                                    <i class="fas fa-home"></i>
                                                </a>
                                            </li>
                                            <li class="" aria-current="page">Cart</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Cart Section Start -->
                    <section class="cart-section section-b-space">
                        <div class="container">
                            @if($cartItems->Count() > 0)
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <table class="table cart-table">
                                        <thead>
                                            <tr class="table-head">
                                                <th scope="col">image</th>
                                                <th scope="col">product name</th>
                                                <th scope="col">price</th>
                                                <th scope="col">quantity</th>
                                                <th scope="col">total</th>
                                                <th scope="col">action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($cartItems as $item)
                                            <tr>
                                                <td>
                                                    <a href="{{route('shop.product.details',['slug'=>$item->model->slug])}}">
                                                        <img src="{{asset('assets/images/fashion/product/front')}}/{{$item->model->image}}" class="blur-up lazyloaded" alt="{{$item->model->name}}">
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{route('shop.product.details',['slug'=>$item->model->slug])}}">{{$item->model->name}}</a>
                                                    <div class="mobile-cart-content row">
                                                        <div class="col">
                                                            <div class="qty-box">
                                                                <div class="input-group">
                                                                    <input type="text" name="quantity" class="form-control input-number"
                                                                        value="1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <h2>${{$item->price}}</h2>
                                                        </div>
                                                        <div class="col">
                                                            <h2 class="td-color">
                                                                <a href="javascript:void(0)">
                                                                    <i class="fas fa-times"></i>
                                                                </a>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h2>${{$item->price}}</h2>
                                                </td>
                                                <td>
                                                    <div class="qty-box">
                                                        <div class="input-group">
                                                            <input type="number" name="quantity" data-rowid="{{$item->rowId}}"onchange="updateQuantity(this)" class="form-control input-number" value="{{$item->qty}}">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h2 class="td-color">${{$item->subtotal()}}</h2>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0)" onclick="removeItemFromCart('{{$item->rowId}}')">
                                                        <i class="fas fa-times"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-12 mt-md-5 mt-4">
                                    <div class="row">
                                        <div class="col-sm-5 col-7">
                                            <div class="left-side-button float-start">
                                                <a href="{{route('shop.index')}}" class="btn btn-solid-default btn fw-bold mb-0 ms-0">
                                                    <i class="fas fa-arrow-left"></i> Continue Shopping</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="cart-checkout-section">
                                    <div class="row g-4">




                                        <div class="col-lg-4">
                                            <div class="cart-box">
                                                <div class="cart-box-details">
                                                    <div class="total-details">
                                                        <div class="top-details">
                                                            <h3>Cart Totals</h3>
                                                            <h6>Sub Total <span>${{Cart::instance('cart')->subtotal()}}</span></h6>
                                                            <h6>Tax <span>${{Cart::instance('cart')->tax()}}</span></h6>
                                                            <h6>Total <span>${{Cart::instance('cart')->total()}}</span></h6>
                                                        </div>
                                                        <div class="bottom-details">
                                                            <a href="#">Total Price</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h2> <span style="color:red">Your cart is empty ! </span></h2>
                                

                                </div>
                            </div>

                            @endif
                        </div>
                    </section>


                </main>

                </div>
            </div>
        </div>
    </section>



@endsection
@push('scripts')
<script>
<script src="assets/js/plugins/jquery.min.js"></script>
  <script src="assets/js/plugins/bootstrap.bundle.min.js"></script>
  <script src="assets/js/plugins/bootstrap-slider.min.js"></script>
  <script src="assets/js/plugins/swiper.min.js"></script>
  <script src="assets/js/plugins/countdown.js"></script>
  <script src="assets/js/theme.js"></script>
  function clearCart()
        {
            $('#clearCart').submit();
        }

</script>
@endpush
