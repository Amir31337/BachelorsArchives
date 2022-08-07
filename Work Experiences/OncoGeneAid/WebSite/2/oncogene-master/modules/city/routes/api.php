<?php


Route::get('get_city/{province_id}','CityController@getList');


Route::get('app/city/{province_id}','ApiController@getArrayList');
