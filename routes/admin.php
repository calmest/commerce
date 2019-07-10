<?php
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.dashboard');
})->name('dashboard')->middleware('verified');

//Auth::routes(['verify' => true]);

// Route::get('/admin/dashboard', 'AdminController@dashboard');
Route::get('/settings', 'AdminController@settings');
Route::get('/check-pwd', 'AdminController@chkPassword');
Route::match(['get', 'post'], '/update-pwd', 'AdminController@updatePassword');

// Categories Section (Admin)
Route::match(['get','post'], '/add-category', 'CategoryController@addCategory');
Route::match(['get','post'], '/edit-category/{id}', 'CategoryController@editCategory');
Route::match(['get','post'], '/delete-category/{id}', 'CategoryController@deleteCategory');
Route::get('/view-categories', 'CategoryController@viewCategories');

// Post Categories Section (Admin)
Route::match(['get','post'], '/posts/add-category', 'PostsCategoriesController@addCategory');
Route::match(['get','post'], '/posts/edit-category/{id}', 'PostsCategoriesController@editCategory');
Route::match(['get','post'], '/posts/delete-category/{id}', 'PostsCategoriesController@deleteCategory');
Route::get('/posts/view-categories', 'PostsCategoriesController@viewCategories');

// Post Tags Section (Admin)
Route::match(['get','post'], '/posts/add-tag', 'PostsTagsController@addTag');
Route::match(['get','post'], '/posts/edit-tag/{id}', 'PostsTagsController@editTag');
Route::match(['get','post'], '/posts/delete-tag/{id}', 'PostsTagsController@deleteTag');
Route::get('/posts/view-tags', 'PostsTagsController@viewTags');

// Ads Section (Admin)
Route::match(['get','post'], '/add-ad', 'AdsController@addAds');
Route::match(['get','post'], '/edit-ad/{id}', 'AdsController@editAds');
Route::match(['get','post'], '/delete-ad/{id}', 'AdsController@deleteAds');
Route::get('/view-ads', 'AdsController@viewAds');

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
//Route::get('/post', 'PostsController@create');
//Route::get('/add-posts', 'PostsController@store');
//Route::get('/view-posts', 'AdminController@ManagePosts');
//Route::match(['get','post'], '/edit-post/{id}', 'PostsController@update');
//Route::match(['get','post'], '/delete-post/{id}', 'PostsController@destroy');
Route::resource('/posts', 'PostsController');

// Posts Categories
//Route::resource('/posts/category', 'PostsCategoriesController');

//Posts Tags
//Route::resource('/posts/tag', 'TagsController');

Route::get('/view-products', 'ProductsController@viewProducts');
Route::get('/view-files', 'ProductsController@viewFiles');

Route::match(['get','post'], '/edit-product/{id}', 'ProductsController@editProduct');
Route::match(['get','post'], '/delete-product/{id}', 'ProductsController@deleteProduct');

// user
Route::get('/manage-users', 'AdminController@Users');
Route::match(['get','post'], '/edit-user/{id}', 'AdminController@editUser');
Route::match(['get','post'], '/delete-user/{id}', 'AdminController@deleteUser');


