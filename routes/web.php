<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/* La partie  FrontEnd */
Route::get('/','IndexController@index');
Route::get('/list-products','IndexController@shop');
Route::get('/cat/{id}','IndexController@listByCat')->name('cats');
Route::get('/product-detail/{id}','IndexController@detialpro');
////// Pour obtnir les attributs ////////////
Route::get('/get-product-attr','IndexController@getAttrs');

///// Les commandes/////////
Route::post('/addToCart','CartController@addToCart')->name('addToCart');
Route::get('/viewcart','CartController@index');
Route::get('/cart/deleteItem/{id}','CartController@deleteItem');
Route::get('/cart/update-quantity/{id}/{quantity}','CartController@updateQuantity');

/// Apply Coupon Code
Route::post('/apply-coupon','CouponController@applycoupon');
/// les utilisateurs /////
Route::get('/login_page','UsersController@index');
Route::post('/register_user','UsersController@register');
Route::post('/user_login','UsersController@login');
Route::get('/logout','UsersController@logout');

////// Les authentications ///////////
Route::group(['middleware'=>'FrontLogin_middleware'],function (){
    Route::get('/myaccount','UsersController@account');
    Route::put('/update-profile/{id}','UsersController@updateprofile');
    Route::put('/update-password/{id}','UsersController@updatepassword');
    Route::get('/check-out','CheckOutController@index');
    Route::post('/submit-checkout','CheckOutController@submitcheckout');
    Route::get('/order-review','OrdersController@index');
    Route::post('/submit-order','OrdersController@order');
    Route::get('/cod','OrdersController@cod');
    Route::get('/paypal','OrdersController@paypal');
});


/* Administrateurs ou partie BackEnd */
    Auth::routes(['register'=>false]);
    Route::get('/home', 'HomeController@index')->name('home');
    Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function (){
    Route::get('/', 'AdminController@index')->name('admin_home');


    /// Les parametres de l'administrtaeur
    Route::get('/settings', 'AdminController@settings');
    Route::get('/check-pwd','AdminController@chkPassword');
    Route::post('/update-pwd','AdminController@updatAdminPwd');

    /// les differentes catégories d'articles
    Route::resource('/category','CategoryController');
    Route::get('delete-category/{id}','CategoryController@destroy');
    Route::get('/check_category_name','CategoryController@checkCateName');

    /// Les emails
    Route::get('/test-contact', function () {
    return new App\Mail\Contact([
      'nom' => 'Durand',
      'email' => 'cci@alsace.com',
      'message' => 'CCI vous sohaite une très bonne fete de noel!'
      ]);
});

    /// Les articles
    Route::resource('/product','ProductsController');
    Route::get('delete-product/{id}','ProductsController@destroy');
    Route::get('delete-image/{id}','ProductsController@deleteImage');

    /// Les Attributs des articles
    Route::resource('/product_attr','ProductAtrrController');
    Route::get('delete-attribute/{id}','ProductAtrrController@deleteAttr');

    /// Les images des articles
    Route::resource('/image-gallery','ImagesController');
    Route::get('delete-imageGallery/{id}','ImagesController@destroy');
    /// ///////// Coupons Area //////////
    Route::resource('/coupon','CouponController');
    Route::get('delete-coupon/{id}','CouponController@destroy');
///
});
