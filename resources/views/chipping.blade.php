@extends('layouts.base')

@section('content')

<style>
    .cart-total th, .cart-total td{
        color:green;
        font-weight: bold;
        font-size: 21px !important;
    }
</style>

<main class="pt-90">
    <div class="mb-4 pb-4"></div>
    <section class="shop-checkout container">
        <h2 class="page-title">Shipping and Checkout</h2>
        <div class="checkout-steps">
            <a href="{{route('cart.index')}}" class="checkout-steps__item active">
                <span class="checkout-steps__item-number"></span>
                <span class="checkout-steps__item-title">
                    <h4><span>Shopping Bag</span></h4>
                </span>
            </a>
            <a href="{{route('cart.checkout')}}" class="checkout-steps__item active">
                <span class="checkout-steps__item-number"></span>
                <span class="checkout-steps__item-title">
                    <h4><span>Shipping and Checkout</span></h4>

                </span>
            </a>
            <a href="{{route('cart.order.confirmation')}}" class="checkout-steps__item">
                <span class="checkout-steps__item-number"></span>
                <span class="checkout-steps__item-title">
                    <h4><span>Confirmation</span></h4>

                </span>
            </a>
        </div>
        <br>
        <form name="checkout-form" action="{{route('cart.place.order')}}" method="POST">
            @csrf
            <div class="checkout-form">
                <div class="billing-info__wrapper">
                    <div class="row">
                        <div class="col-6">
                            <h4>SHIPPING DETAILS</h4>
                        </div>
                        <div class="col-12">
                            @if($address)
                            <!-- <a href="#" class="btn btn-info btn-sm float-right">Change Address</a>
                            <a href="#" class="btn btn-warning btn-sm float-right mr-3">Edit Address</a>-->
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="my-account__address-list">
                                <div class="my-account__address-item">
                                    <div class="my-account__address-item__detail">
                                        <p>{{$address->name}}</p>
                                        <p>{{$address->address}}</p>
                                        <p>{{$address->landmark}}</p>
                                        <p>{{$address->city}}, {{$address->state}}, {{$address->country}}</p>
                                        <p>{{$address->zip}}</p>
                                        <br/>
                                        <p>Phone :- {{$address->phone}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="checkout__totals-wrapper">
                    <div class="sticky-content">
                        <div class="checkout__totals">
                            <h3>Your Order</h3>
                            <table class="checkout-cart-items">
                                <thead>
                                    <tr>
                                        <th>PRODUCT</th>
                                        <th class="text-right">SUBTOTAL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (Cart::instance('cart')->content() as $item)
                                    <tr>
                                        <td>
                                            {{$item->name}} x {{$item->qty}}
                                        </td>
                                        <td class="text-right">
                                            ${{$item->subtotal}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @if(Session::has('discounts'))
                            <table class="checkout-totals">
                                <tbody>
                                    <tr>
                                        <th>Subtotal</th>
                                        <td class="text-right">${{Cart::instance('cart')->subtotal()}}</td>
                                    </tr>
                                    <tr>
                                        <th>Discount {{Session("coupon")["code"]}}</th>
                                        <td class="text-right">-${{Session("discounts")["discount"]}}</td>
                                    </tr>
                                    <tr>
                                        <th>Subtotal After Discount</th>
                                        <td class="text-right">${{Session("discounts")["subtotal"]}}</td>
                                    </tr>
                                    <tr>
                                        <th>SHIPPING</th>
                                        <td class="text-right">Free</td>
                                    </tr>
                                    <tr>
                                        <th>VAT</th>
                                        <td class="text-right">${{Session("discounts")["tax"]}}</td>
                                    </tr>
                                    <tr class="cart-total">
                                        <th>Total</th>
                                        <td class="text-right">${{Session("discounts")["total"]}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        @else
                            <table class="checkout-totals">
                                <tbody>
                                    <tr>
                                        <th>SUBTOTAL</th>
                                        <td class="text-right">${{Cart::instance('cart')->subtotal()}}</td>
                                    </tr>
                                    <tr>
                                        <th>SHIPPING</th>
                                        <td class="text-right">Free</td>
                                    </tr>
                                    <tr>
                                        <th>VAT</th>
                                        <td class="text-right">${{Cart::instance('cart')->tax()}}</td>
                                    </tr>
                                    <tr class="cart-total">
                                        <th>TOTAL</th>
                                        <td class="text-right">${{Cart::instance('cart')->total()}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        @endif
                        </div>

                </div>
            </div>
        </form>
    </section>
</main>

@endsection

