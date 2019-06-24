<?php
use Illuminate\Support\Facades\Route;

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


Route::get('/image', 'AdminController@addImage');
Route::post('/add-image', 'ImageController@Upload');
Route::get('/view-images', 'AdminController@ManageImages');
Route::match(['get','post'], '/edit-image/{id}', 'ImageController@update');
Route::match(['get','post'], '/delete-image/{id}', 'ImageController@delete');


// add video
Route::get('/video', 'AdminController@addVideo');
Route::post('/add-video', 'VideoController@Upload');
Route::get('/view-videos', 'AdminController@ManageVideos');
Route::match(['get','post'], '/edit-video/{id}', 'VideoController@update');
Route::match(['get','post'], '/delete-video/{id}', 'VideoController@delete');

// Posts
Route::get('/post', 'AdminController@addPost');
Route::get('/add-post', 'PostsController@store');
Route::get('/view-posts', 'AdminController@ManagePosts');
Route::match(['get','post'], '/edit-post/{id}', 'PostsController@update');
Route::match(['get','post'], '/delete-post/{id}', 'PostsController@destroy');
;



Route::get('/view-products', 'ProductsController@viewProducts');
Route::get('/view-files', 'ProductsController@viewFiles');


Route::match(['get','post'], '/edit-product/{id}', 'ProductsController@editProduct');
Route::match(['get','post'], '/delete-product/{id}', 'ProductsController@deleteProduct');


// user
Route::get('/manage-users', 'AdminController@Users');
Route::match(['get','post'], '/edit-user/{id}', 'AdminController@editUser');
Route::match(['get','post'], '/delete-user/{id}', 'AdminController@deleteUser');


