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
                    <section class="shop-checkout container">
                        <h2 class="page-title">Wishlist</h2>
                        <div class="shopping-cart">
                            @if(Cart::instance("wishlist")->content()->count()>0)
                            <div class="cart-table__wrapper">
                                <table class="cart-table">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th></th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (Cart::instance('wishlist')->content() as $wishlistItem)
                                        <tr>
                                            <td>
                                                <div class="shopping-cart__product-item">
                                                     <img src="{{asset('assets/images/fashion/product/front')}}/{{$wishlistItem->model->image}}" alt="{{$wishlistItem->name}}">

                                                </div>
                                            </td>
                                            <td>
                                                <div class="shopping-cart__product-item__detail">
                                                    <h4>{{$wishlistItem->name}}</h4>
                                                    {{-- <ul class="shopping-cart__product-item__options">
                                                        <li>Color: Yellow</li>
                                                        <li>Size: L</li>
                                                    </ul> --}}
                                                </div>
                                            </td>
                                            <td>
                                                <span class="shopping-cart__product-price">${{$wishlistItem->price}}</span>
                                            </td>
                                            <td>
                                                {{$wishlistItem->qty}}
                                            </td>
                                            <td>
                                                <div class="del-action">
                                                    <form method="POST" action="{{route('wishlist.move.to.cart',['rowId'=>$wishlistItem->rowId])}}">
                                                        @csrf
                                                        <button type="submit" class="remove-cart btn btn-sm btn-warning">Move To Cart</button>
                                                        </form>


                                                    <form method="POST" action="{{route('wishlist.remove',['rowId'=>$wishlistItem->rowId])}}" id="remove-wishlist-{{$wishlistItem->id}}">
                                                        @csrf
                                                        @method("DELETE")
                                                        <button type="submit" class="remove-cart btn btn-sm btn-danger" onclick="document.getElementById('remove-wishlist-{{$wishlistItem->id}}').submit();">Remove Defi</button>
                                                        </form>
                                                </div>
                                            </td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="cart-table-footer">
                                    <form method="post" action="{{route('wishlist.empty')}}">
                                        @csrf
                                        @method("DELETE")
                                    <button class="btn btn-light" type="submit">CLEAR WISHLIST</button>
                                    </form>
                                </div>
                            </div>
                            @else
                                <div class="row">
                                    <div class="col-md-12">
                                        <p><span style="color:red"> item found in your wishlist </span></p>


                                    </div>
                                </div>
                            @endif
                        </div>
                    </section>
                </main>
            </div>
        </div>
    </section>



@endsection
@push('scripts')
<script src="assets/js/plugins/jquery.min.js"></script>
  <script src="assets/js/plugins/bootstrap.bundle.min.js"></script>
  <script src="assets/js/plugins/bootstrap-slider.min.js"></script>
  <script src="assets/js/plugins/swiper.min.js"></script>
  <script src="assets/js/plugins/countdown.js"></script>
  <script src="assets/js/theme.js"></script>


@endpush
