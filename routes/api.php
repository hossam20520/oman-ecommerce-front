<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Category
    Route::post('categories/media', 'CategoryApiController@storeMedia')->name('categories.storeMedia');
    Route::apiResource('categories', 'CategoryApiController');

    // Groups
    Route::apiResource('groups', 'GroupsApiController');

    // Filter
    Route::apiResource('filters', 'FilterApiController');

    // Orders
    Route::apiResource('orders', 'OrdersApiController');
});
