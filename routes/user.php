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

// // Products Section (user)
// Route::match(['get','post'], '/add-product', 'UserController@addProduct');
// // Route::get('/view-products', 'UserController@viewProducts');
// Route::match(['get','post'], '/edit-product/{id}', 'UserController@editProduct');
// Route::match(['get','post'], '/delete-product/{id}', 'UserController@deleteProduct');


// Image Section (user)

Route::get('/image', 'UserController@addImage');
Route::post('/add-image', 'ImageController@Upload');
Route::get('/view-images', 'UserController@ManageImages');
Route::match(['get','post'], '/edit-image/{id}', 'ImageController@update');
Route::match(['get','post'], '/delete-image/{id}', 'ImageController@delete');


// add video
Route::get('/video', 'UserController@addVideo');
Route::post('/add-video', 'VideoController@Upload');
Route::get('/view-videos', 'UserController@ManageVideos');
Route::match(['get','post'], '/edit-video/{id}', 'VideoController@update');
Route::match(['get','post'], '/delete-video/{id}', 'VideoController@delete');



// Route::get('/view-files', 'UserController@viewFiles');