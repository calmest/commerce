<?php

Route::get('/dashboard', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.dashboard');
})->name('dashboard');



// Route::get('/admin/dashboard', 'AdminController@dashboard');
Route::get('/settings', 'AdminController@settings');
Route::get('/check-pwd', 'AdminController@chkPassword');
Route::match(['get', 'post'], '/update-pwd', 'AdminController@updatePassword');
// Categories Section (Admin)
Route::match(['get','post'], '/add-category', 'CategoryController@addCategory');
Route::match(['get','post'], '/edit-category/{id}', 'CategoryController@editCategory');
Route::match(['get','post'], '/delete-category/{id}', 'CategoryController@deleteCategory');
Route::get('/view-categories', 'CategoryController@viewCategories');
// Products Section (Admin)
Route::match(['get','post'], '/add-product', 'ProductsController@addProduct');
Route::get('/add-file', 'ProductsController@addFile');

// add image

Route::post('/add-image', 'ImageController@Upload');
Route::post('/add-video', 'VideoController@Upload');



Route::get('/view-products', 'ProductsController@viewProducts');
Route::get('/view-files', 'ProductsController@viewFiles');


Route::match(['get','post'], '/edit-product/{id}', 'ProductsController@editProduct');
Route::match(['get','post'], '/delete-product/{id}', 'ProductsController@deleteProduct');


// user
Route::get('/manage-users', 'AdminController@Users');
Route::match(['get','post'], '/edit-user/{id}', 'AdminController@editUser');
Route::match(['get','post'], '/delete-user/{id}', 'AdminController@deleteUser');
