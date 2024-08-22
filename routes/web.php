<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\AppController;
Use App\Http\Controllers\UserController;
Use App\Http\Controllers\AdminController;
Use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[AppController::class,'index'])->name('app.index');

//create page shop:
Route::get('/shop',[ShopController::class,'index'])->name('shop.index');


Route::get('/product/{slug}',[ShopController::class,'productDetials'])->name('shop.product.details');
Route::get('/cart',[CartController::class,'index'])->name('cart.index');
Route::get('/user-cart',[CartController::class,'indexx'])->name('user-cart.index');
Route::get('/cart-wishlist-count',[ShopController::class,'getcartAndWishlist'])->name('shop-cart-wishlist-count');

Route::post('/cart/store', [CartController::class, 'addToCart'])->name('cart.store');
Route::put('/cart/update', [CartController::class, 'updateCart'])->name('cart.update');

//added product to wishlist.
Route::post('/wishlist/add',[WishlistController::class,'add_to_wishlist'])->name('wishlist.add');

//show all wishlist:
Route::get('/wishlist',[WishlistController::class,'index'])->name('wishlist.index');
//show whislist compte user:
Route::get('/user-whislit',[WishlistController::class,'indexx'])->name('user-whislist.index');

//delete wishlist:
Route::delete('/wishlist/remove/{rowId}',[WishlistController::class,'remove_item_from_wishlist'])->name('wishlist.remove');
Route::delete('/wishlist/clear',[WishlistController::class,'empty_wishlist'])->name('wishlist.empty');

//delete wishlist to cart:
Route::post('/wishlist/move-to-cart/{rowId}',[WishlistController::class,'move_to_cart'])->name('wishlist.move.to.cart');

//about us:
Route::get('/about',[AboutController::class,'index'])->name('about.index');

//delete cart item
Route::delete('/cart/remove', [CartController::class, 'removeCart'])->name('cart.remove');
//clear cart item
Route::delete('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');

// add coupon a cart
Route::post('/cart/apply-coupon',[CartController::class,'apply_coupon_code'])->name('cart.coupon.apply');
 //removecoupon at cart
Route::delete('/cart/remove-coupon',[CartController::class,'remove_coupon_code'])->name('cart.coupon.remove');

//contact:
Route::get('/contact',[ContactController::class,'show'])->name('contact.show');
Route::post('/contact',[ContactController::class,'send'])->name('contact.send');

//BLOG:
Route::get('/blog',[BlogController::class,'index'])->name('blog.index');

//checkout:
Route::get('/checkout',[CartController::class,'checkout'])->name('cart.checkout');

Route::get('/chipping',[CartController::class,'chipping'])->name('cart.chipping');

//checkout cod
Route::post('/place-order',[CartController::class,'place_order'])->name('cart.place.order');

//order_confirmation/
Route::get('/order-confirmation',[CartController::class,'order_confirmation'])->name('cart.order.confirmation');





Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/my-account',[UserController::class,'index'])->name('user.index');
    Route::get('/account-orders',[UserController::class,'orders'])->name('user.orders');//user show order
    Route::get('/account-order/{order_id}/detials',[UserController::class,'order_details'])->name('user.order.details');//show user order details
    Route::put('/account-order/cancel-order',[UserController::class,'account_cancel_order'])->name('user.account_cancel_order');//user order concellation
});
Route::middleware(['auth','auth.admin'])->group(function(){
    Route::get('/admin',[AdminController::class,'indexx'])->name('admin.index');


    Route::resource('/products',ProductController::class);// dashbord admin.products

    Route::resource('/brand',AdminController::class);// dashbord admin.brands
    Route::get('/account',[AdminController::class,'account'])->name('admin.account');//dashbord admin. my account

    Route::resource('/categories',CategoryController::class);// dashbord admin.categories
    Route::resource('/coupons',CouponController::class);// dashbord admin.coupon

    Route::get('/admin/users',[AdminController::class,'users'])->name('admin.users');//show users admin
    Route::get('/admin/orders',[AdminController::class,'orders'])->name('admin.orders');//admin show orders
    Route::get('/admin/order/{order_id}/details',[AdminController::class,'order_details'])->name('admin.order.details');//show details orders
    Route::put('/admin/order/update-status',[AdminController::class,'update_order_status'])->name('admin.order.status.update');//update order status

});



