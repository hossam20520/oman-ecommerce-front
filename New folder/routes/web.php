<?php

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Category
    Route::delete('categories/destroy', 'CategoryController@massDestroy')->name('categories.massDestroy');
    Route::post('categories/media', 'CategoryController@storeMedia')->name('categories.storeMedia');
    Route::post('categories/ckmedia', 'CategoryController@storeCKEditorImages')->name('categories.storeCKEditorImages');
    Route::post('categories/parse-csv-import', 'CategoryController@parseCsvImport')->name('categories.parseCsvImport');
    Route::post('categories/process-csv-import', 'CategoryController@processCsvImport')->name('categories.processCsvImport');
    Route::resource('categories', 'CategoryController');

    // Inventory
    Route::delete('inventories/destroy', 'InventoryController@massDestroy')->name('inventories.massDestroy');
    Route::post('inventories/media', 'InventoryController@storeMedia')->name('inventories.storeMedia');
    Route::post('inventories/ckmedia', 'InventoryController@storeCKEditorImages')->name('inventories.storeCKEditorImages');
    Route::post('inventories/parse-csv-import', 'InventoryController@parseCsvImport')->name('inventories.parseCsvImport');
    Route::post('inventories/process-csv-import', 'InventoryController@processCsvImport')->name('inventories.processCsvImport');
    Route::resource('inventories', 'InventoryController');

    // Groups
    Route::delete('groups/destroy', 'GroupsController@massDestroy')->name('groups.massDestroy');
    Route::post('groups/parse-csv-import', 'GroupsController@parseCsvImport')->name('groups.parseCsvImport');
    Route::post('groups/process-csv-import', 'GroupsController@processCsvImport')->name('groups.processCsvImport');
    Route::resource('groups', 'GroupsController');

    // Connection
    Route::delete('connections/destroy', 'ConnectionController@massDestroy')->name('connections.massDestroy');
    Route::post('connections/parse-csv-import', 'ConnectionController@parseCsvImport')->name('connections.parseCsvImport');
    Route::post('connections/process-csv-import', 'ConnectionController@processCsvImport')->name('connections.processCsvImport');
    Route::resource('connections', 'ConnectionController');

    // Filter
    Route::delete('filters/destroy', 'FilterController@massDestroy')->name('filters.massDestroy');
    Route::post('filters/parse-csv-import', 'FilterController@parseCsvImport')->name('filters.parseCsvImport');
    Route::post('filters/process-csv-import', 'FilterController@processCsvImport')->name('filters.processCsvImport');
    Route::resource('filters', 'FilterController');

    // Orders
    Route::delete('orders/destroy', 'OrdersController@massDestroy')->name('orders.massDestroy');
    Route::post('orders/parse-csv-import', 'OrdersController@parseCsvImport')->name('orders.parseCsvImport');
    Route::post('orders/process-csv-import', 'OrdersController@processCsvImport')->name('orders.processCsvImport');
    Route::resource('orders', 'OrdersController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
