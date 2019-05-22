<?php


Route::get('/dashboard', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('user')->user();

    //dd($users);

    return view('user.dashboard');
})->name('dashboard');



// Route::get('/user/dashboard', 'UserController@dashboard');
Route::get('/settings', 'UserController@settings');
Route::get('/check-pwd', 'UserController@chkPassword');
Route::match(['get', 'post'], '/update-pwd', 'UserController@updatePassword');

// Products Section (user)
Route::match(['get','post'], '/add-product', 'UserController@addProduct');
// Route::get('/view-products', 'UserController@viewProducts');
Route::match(['get','post'], '/edit-product/{id}', 'UserController@editProduct');
Route::match(['get','post'], '/delete-product/{id}', 'UserController@deleteProduct');


Route::get('/add-file', 'UserController@addFile');

// add image

Route::post('/add-image', 'ImageController@Upload');
Route::post('/add-video', 'VideoController@Upload');



Route::get('/view-products', 'UserController@viewProducts');
Route::get('/view-files', 'UserController@viewFiles');