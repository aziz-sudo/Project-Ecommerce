@extends("layouts.base");
@push('styles')
<link id="color-link" rel="stylesheet" type="text/css" href="assets/css/demo2.css">
<style>
    header .profile-dropdown ul li {
        display: block;
        padding: 5px 20px;
        border-bottom: 1px solid #ddd;
        line-height: 35px;
    }

    header .profile-dropdown ul li:last-child {
        border-color: #fff;
    }

    header .profile-dropdown ul {
        padding: 10px 0;
        min-width: 250px;
    }

    .name-usr {
        background: #e87316;
        padding: 8px 12px;
        color: #fff;
        font-weight: bold;
        text-transform: uppercase;
        line-height: 24px;
    }

    .name-usr span {
        margin-right: 10px;
    }

    @media (max-width:600px) {
        .h-logo {
            max-width: 150px !important;
        }

        i.sidebar-bar {
            font-size: 22px;
        }

        .mobile-menu ul li a svg {
            width: 20px;
            height: 20px;
        }

        .mobile-menu ul li a span {
            margin-top: 0px;
            font-size: 12px;
        }

        .name-usr {
            padding: 5px 12px;
        }
    }
    nav svg{
        height: 20px;
    }
    .product-box .product-detaits h5{
        width: 100%;
    }
</style>
@endpush
@section("content")
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
                <h3>Shop</h3>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route('app.index')}}">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Shop</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Shop Section start -->
<section class="section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 category-side col-md-4">
                <div class="category-option">
                    <div class="button-close mb-3">
                        <button class="btn p-0"><i data-feather="arrow-left"></i> Close</button>
                    </div>
                    <div class="accordion category-name" id="accordionExample">
                        <div class="accordion-item category-rating">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo">
                                    Brand
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body category-scroll brand-list">
                                    <ul class="list list-inline mb-0 ">
                                        @foreach ($brands as $brand)
                                            <li class="list-item">
                                                <span class="menu-link py-1">
                                                    <input type="checkbox" name="brands" value="{{$brand->id}}" class="chk-brand"  @if(in_array($brand->id,explode(',',$f_brands))) checked="checked" @endif  />
                                                    {{$brand->name}}
                                                </span>
                                                <span class="text-right float-right">
                                                    {{$brand->products()->count()}}
                                                </span>
                                            </li>
                                        @endforeach
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item category-color">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree">
                                    Color
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse show"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="category-list">
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item category-price">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour">Price</button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse show"
                                aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="range-slider category-list">
                                        <input type="text" class="js-range-slider" id="js-range-price" data-currency="$" value="[{{$min_price}},{{$max_price}}]" name="price_range">
                                    </div>
                                </div>
                            </div>
                        </div>





                        <div class="accordion-item category-price">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive">
                                    Size
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse show"
                                aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="category-list">
                                        <li>
                                            <a href="javascript:void(0)">xs</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">sm</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">md</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">lg</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">xl</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">xxl</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item category-rating">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix">
                                    Category
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne">
                                <div class="accordion-body category-scroll">
                                    <div class="accordion-body px-0 pb-0 pt-3 category-list">
                                        <ul class="list list-inline mb-0 ">
                                            @foreach ($categories as $category)
                                            <li class="list-item">
                                                <span class="menu-link py-1">
                                                    <input type="checkbox" name="categories" value="{{$category->id}}" class="chk-category"  @if(in_array($category->id,explode(',',$f_categories))) checked="checked" @endif />
                                                    {{$category->name}}
                                                </span>
                                                <span class="text-right float-right">{{$category->products()->count()}}</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven">
                                    Discount Range
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse show"
                                aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="category-list">
                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" type="checkbox"
                                                    id="flexCheckDefault19">
                                                <label class="form-check-label" for="flexCheckDefault19">5% and
                                                    above</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" type="checkbox"
                                                    id="flexCheckDefault20">
                                                <label class="form-check-label" for="flexCheckDefault20">10% and
                                                    above</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" type="checkbox"
                                                    id="flexCheckDefault21">
                                                <label class="form-check-label" for="flexCheckDefault21">20% and
                                                    above</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="category-product col-lg-9 col-12 ratio_30">

                <div class="row g-4">
                    <!-- label and featured section -->
                    <div class="col-md-12">
                        <ul class="short-name">


                        </ul>
                    </div>

                    <div class="col-12">
                        <div class="filter-options">
                            <div class="select-options">
                                <div class="page-view-filter">
                                    <div class="dropdown select-featured">
                                        <select class="form-select" name="orderby" id="orderby">
                                            <option value="-1"{{$order==-1?'selected':''}}>Default</option>
                                            <option value="1" {{$order==1?'selected':''}}>Date, New To Old</option>
                                            <option value="2" {{$order==2?'selected':''}}>Date, Old To New</option>
                                            <option value="3" {{$order==3?'selected':''}}>Price, Low To High</option>
                                            <option value="4" {{$order==4?'selected':''}}>Price, High To Low</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="dropdown select-featured">
                                    <select class="form-select" name="size" id="pagesize">
                                        <option value="12" {{{$size==12 ? 'selected':''}}}>12 Products Per Page</option>
                                        <option value="24" {{{$size==24 ? 'selected':''}}}>24 Products Per Page</option>
                                        <option value="52"> {{{$size==52 ? 'selected':''}}}52 Products Per Page</option>
                                        <option value="100">{{{$size==100 ? 'selected':''}}}100 Products Per Page</option>
                                    </select>
                                </div>
                            </div>
                            <div class="grid-options d-sm-inline-block d-none">
                                <ul class="d-flex">
                                    <li class="two-grid">
                                        <a href="javascript:void(0)">
                                            <img src="assets/svg/grid-2.svg" class="img-fluid blur-up lazyload"
                                                alt="">
                                        </a>
                                    </li>
                                    <li class="three-grid d-md-inline-block d-none">
                                        <a href="javascript:void(0)">
                                            <img src="assets/svg/grid-3.svg" class="img-fluid blur-up lazyload"
                                                alt="">
                                        </a>
                                    </li>
                                    <li class="grid-btn active d-lg-inline-block d-none">
                                        <a href="javascript:void(0)">
                                            <img src="assets/svg/grid.svg" class="img-fluid blur-up lazyload"
                                                alt="">
                                        </a>
                                    </li>
                                    <li class="list-btn">
                                        <a href="javascript:void(0)">
                                            <img src="assets/svg/list.svg" class="img-fluid blur-up lazyload"
                                                alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- label and featured section -->

                <!-- Prodcut setion -->
                <div class="row g-sm-4 g-3 row-cols-lg-4 row-cols-md-3 row-cols-2 mt-1 custom-gy-5 product-style-2 ratio_asos product-list-section">
                    @foreach ($products as $product)
                    <div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="#">
                                        <img src="assets/images/fashion/product/front/{{$product->image}}"
                                            class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="back">
                                    <a href="{{route('shop.product.details',['slug'=>$product->slug])}}">
                                        <img src="assets/images/fashion/product/back/{{$product->image}}"
                                            class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="cart-wrap">
                                    <ul>
                                        
                                        <li>
                                            @if(Cart::instance("cart")->content()->Where('id',$product->id)->count()>0)
                                            <form method="POST" action="{{route('cart.remove',['rowId'=>Cart::instance("cart")->content()->Where('id',$product->id)->first()->rowId])}}">
                                            @csrf
                                            @method("DELETE")
                                            <button type="submit"  title="Add To Cart">
                                                <i data-feather="shopping-cart"></i>
                                            </button>
                                            </form>

                                            @else
                                            <form method="POST" action="{{route('cart.store')}}">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$product->id}}" />
                                                <input type="hidden" name="name" value="{{$product->name}}" />
                                                <input type="hidden" name="quantity" value="1"/>
                                                <input type="hidden" name="price" value="{{$product->sale_price == '' ? $product->regular_price:$product->sale_price}}" />
                                                <button type="submit" title="Add To Cart">
                                                    <i data-feather="shopping-cart"></i>
                                                </button>
                                            </form>
                                            @endif
                                        </li>

                                        <li>
                                            @if(Cart::instance("wishlist")->content()->Where('id',$product->id)->count()>0)
                                            <form method="POST" action="{{route('wishlist.remove',['rowId'=>Cart::instance("wishlist")->content()->Where('id',$product->id)->first()->rowId])}}">
                                            @csrf
                                            @method("DELETE")
                                            <button type="submit"  title="Add To Wishlist">
                                                <i data-feather="heart"></i>
                                            </button>
                                            </form>

                                            @else
                                            <form method="POST" action="{{route('wishlist.add')}}">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$product->id}}" />
                                                <input type="hidden" name="name" value="{{$product->name}}" />
                                                <input type="hidden" name="quantity" value="1"/>
                                                <input type="hidden" name="price" value="{{$product->sale_price == '' ? $product->regular_price:$product->sale_price}}" />
                                                <button type="submit" title="Add To Wishlist">
                                                    <i data-feather="heart"></i>
                                                </button>
                                            </form>
                                            @endif
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details">
                                <div class="rating-details">
                                    <span class="font-light grid-content">{{$product->category->name}}</span>
                                    <ul class="rating mt-0">
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
                                <div class="main-price">
                                    <a href="{{route('shop.product.details',['slug'=>$product->slug])}}" class="font-default">
                                        <h5 class="ms-0">{{$product->name}}</h5>
                                    </a>
                                    <div class="listing-content">
                                        <span class="font-light">{{$product->category->name}}</span>
                                        <p class="font-light">{{$product->short_description}}</p>
                                    </div>
                                    <h3 class="theme-color">${{$product->regular_price}}</h3>
                                    <button class="btn listing-content">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                {{$products->withQueryString()->links("pagination.default")}}

            </div>
        </div>
    </div>
</section>
<!-- Shop Section end -->
<!-- Subscribe Section Start -->
<section class="subscribe-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6">
                <div class="subscribe-details">
                    <h2 class="mb-3">Subscribe Our News</h2>
                    <h6 class="font-light">Subscribe and receive our newsletters to follow the news about our fresh
                        and fantastic Products.</h6>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-md-0 mt-3">
                <div class="subsribe-input">
                    <div class="input-group">
                        <input type="text" class="form-control subscribe-input" placeholder="Your Email Address">
                        <button class="btn btn-solid-default" type="button">Button</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<form id="formFilter" method="GET">
    <input type="hidden" name="page" id="page" value=""/>
    <input type="hidden" name="size" id="size" value="{{$size}}"/>
    <input type="hidden" name="order" id="order" value="{{$order}}"/>
    <input type="hidden" name="brands" id="hdnBrands" />
    <input type="hidden" name="categories" id="hdnCategories" />
    <input type="hidden" name="min" id="hdnMinPrice" value="{{$min_price}}" />
    <input type="hidden" name="max" id="hdnMaxPrice" value="{{$max_price}}" />

</form>
@endsection
@push('scripts')
<script>
    $(function(){
    $("#pagesize").on("change",function(){
        $("#size").val($("#pagesize option:selected").val());
        $("#formFilter").submit();
    })
    $("#orderby").on("change",function(){
        $("#order").val($("#orderby option:selected").val());
        $("#formFilter").submit();
    });

    //brand
    $("input[name='brands']").on("change",function(){
                var brands ="";
                $("input[name='brands']:checked").each(function(){
                    if(brands=="")
                    {
                        brands += $(this).val();
                    }
                    else{
                        brands += "," + $(this).val();
                    }
                });
                $("#hdnBrands").val(brands);
                $("#formFilter").submit();
    });
    $("input[name='categories']").on("change",function(){
                var categories ="";
                $("input[name='categories']:checked").each(function(){
                    if(categories=="")
                    {
                        categories += $(this).val();
                    }
                    else{
                        categories += "," + $(this).val();
                    }
                });
                $("#hdnCategories").val(categories);
                $("#formFilter").submit();
    });
    $("[name='price_range']").on("change",function(){

                var min=$(this).val().split(',')[0];
                var max=$(this).val().split(',')[1];
                $("#hdnMinPrice").val(min);
                $("#hdnMaxPrice").val(max);
                setTimeout(() => {
                    $("#formFilter").submit();
                    }, "2000");

    })
})
    //function filterProductsByBrand(brand){
    //var brands = "";
    //$("input[name='brands']:checked").each(function(){
      //  if(brands=="")
      //  {
      //      brands += this.value;
    //    }
    //    else{
    ////        brands += "," + this.value;
     //   }
    //});
   // $("#brands").val(brands);
   // $("#formFilter").submit();
//}

    //category
    function filterProductByCategory(brand){
        var categories ="";
        $("input[name='categories']:checked").each(function(){
            if(categories=="") {  categories+=this.value;}
            else{categories+=","+this.value;}
        });
        $("#categories").val(categories);
        $("#formFilter").submit();
    }

    function addProductToWishlist(id,name,quantity,price)
    {
        $.ajax({
            type:'POST',
            url:"#",
            data:{
                "_token":"{{csrf_token() }}",
                id:id,
                name:name,
                quantity:quantity,
                price:price

            },
            success:function(data){
                if(data.status==200){
                    getCartWishlistCount();
                    $.notify({
                        icon:"fa fa-check ",
                        title:"success!",
                        message:"Item successfully added to your wishlist!",
                    });
                }
            }
        });
    }
    function getCartWishlistCount(){
        $.ajax({
            type:'GET',
            url:"{{route('shop-cart-wishlist-count')}}",
            success:function(data){
                if(data.status==200){
                    $("cart-count").html(data.cartcount);
                    $("wishlist-count").html(data.wishlistcount);
                }

            }

        })
    }
</script>

@endpush
