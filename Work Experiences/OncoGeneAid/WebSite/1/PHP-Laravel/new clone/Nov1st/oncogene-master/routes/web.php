<?php

Route::get('sitemap-category.xml','SiteController@sitemap_category');
Route::get('sitemap.xml','SiteController@sitemap');
Route::get('products/{page}/sitemap-products.xml','SiteController@sitemap_products');

//Route::get('order/verify/{order_id}','ShoppingController@order_verify')->middleware('auth');

Route::post('site/check_gift_cart','ShoppingController@check_gift_cart');

Route::get('brand/{brand_name}','SiteController@brand_product');
Route::get('getProduct/brand/{brand_name}','SiteController@get_brand_product');


Route::get('seller/{seller_id}', 'SiteController@seller_product');
Route::get('getProduct/seller/{seller_id}', 'SiteController@get_seller_product');

//ajax
Route::prefix('user')->middleware(['auth'])->group(function (){

    Route::post('/like','ApiController@like');
    Route::post('/dislike','ApiController@dislike');

    Route::get('/profile/gift-cart','UserPanelController@gift_cart');

});

Route::any('test',function (\Illuminate\Http\Request $request){



    dd(json_encode($dataArray,true));

});
