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
                <div class="page-content my-account__dashboard">
                    <p>Hello <span style="color:orangered">{{ Auth::user()->name }}</span></p>
                    <p>From your account dashboard you can view your
                    , manage your <a class="unerline-link" href="account_edit_address.html">Whislists
                    </a>, and <a class="unerline-link" href="account_edit.html">Cart
                    .</a></p>
                </div>
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
