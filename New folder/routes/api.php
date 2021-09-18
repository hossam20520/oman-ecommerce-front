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

    // Clients
    Route::apiResource('clients', 'ClientsApiController');

    // Make
    Route::apiResource('makes', 'MakeApiController');

    // Type
    Route::apiResource('types', 'TypeApiController');

    // Modell
    Route::apiResource('modells', 'ModellApiController');

    // Bank
    Route::post('banks/media', 'BankApiController@storeMedia')->name('banks.storeMedia');
    Route::apiResource('banks', 'BankApiController');

    // Info
    Route::apiResource('infos', 'InfoApiController');

    // Bank Info
    Route::apiResource('bank-infos', 'BankInfoApiController');
});
