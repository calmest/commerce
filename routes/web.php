<?php
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.welcome');
});

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/blog', 'PagesController@blog');
Route::get('/contact', 'PagesController@contact');

Route::get('/marketing', 'PagesController@marketing');
Route::get('/marketing/hairstyles', 'PagesController@hairstyles');
Route::get('/marketing/clothstyles', 'PagesController@clothstyles');
Route::get('/marketing/make-ups', 'PagesController@makeups');
Route::get('/marketing/models', 'PagesController@models');
Route::get('/marketing/hairstyles/natural-hair', 'PagesController@naturalhair');
Route::get('/marketing/hairstyles/synthetic-hair', 'PagesController@synthetichair');
Route::get('/marketing/hairstyles/coloured-hair', 'PagesController@colouredhair');

//Route::get('/admin', 'AdminController@login');

Route::match(['get', 'post'], '/admin', 'AdminController@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function(){
    Route::get('/admin/dashboard', 'AdminController@dashboard');
    Route::get('/admin/settings', 'AdminController@settings');
    Route::get('/admin/check-pwd', 'AdminController@chkPassword');
    Route::match(['get', 'post'], '/admin/update-pwd', 'AdminController@updatePassword');

    // Categories Section (Admin)
    Route::match(['get','post'], '/admin/add-category', 'CategoryController@addCategory');
    Route::match(['get','post'], '/admin/edit-category/{id}', 'CategoryController@editCategory');
    Route::match(['get','post'], '/admin/delete-category/{id}', 'CategoryController@deleteCategory');
    Route::get('/admin/view-categories', 'CategoryController@viewCategories');

    // Products Section (Admin)
    Route::match(['get','post'], '/admin/add-product', 'ProductsController@addProduct');
});

//Route::get('/admin/dashboard', 'AdminController@dashboard');

Route::get('/logout', 'AdminController@logout');


