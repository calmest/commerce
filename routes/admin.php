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