<?php

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

use App\Http\Controllers\UserController;

Route::get('/', 'create_food_table@landingpage')->name('home');
// Route::get('/', function () {
//   return view('index');
// });
Route::get('/register', function () {

  return view('register');
})->name('register');

Route::post('/register', 'UserController@register');

Route::view('/register_success', 'register_sucess');

Route::get('/login', function () {
  if (Session::get('logged_in')) {
    return redirect('/');
  }
  return view('login');
})->name('login');

Route::post('/login', 'UserController@login');
Route::get('/dashboard', function () {
  return view('dashboard.dashboard');
})->middleware('IsValidUser');

Route::get('/logout', 'UserController@logout')->name('user.logout');

Route::group(['middleware' => ['isAdmin', 'IsValidUser']], function () {

  Route::get('/dashboard', 'DashboardController@dashboard');
  Route::get('/add-new-product', 'create_food_table@add_foodview');
  Route::post('/add-new-product', 'create_food_table@add_food');
  // Route::get('/catalogue', 'ProductController@productCatalogue');
  // Route::get('/orders/all', 'OrdersController@show_all_orders');
  // Route::get('/orders/new', 'OrdersController@show_new_orders');
  // Route::get('/order/{id}', 'OrdersController@show_order_with_id');
  // Route::get('/modify/{id}', 'ProductController@modifyView');
  // Route::post('/modify-product', 'ProductController@editProductDetails');
  // Route::get('/view/{id}', 'ProductController@viewProductDetails');
  // Route::get('/confirm-delete/{id}', 'ProductController@deleteProductView');
  // Route::get('/delete/{id}', 'ProductController@deleteProduct');
  // Route::get('/add-to/{id}', 'ProductController@addToView');
  // Route::post('/add-to', 'ProductController@addTo');
  // Route::post('/change-order-status', 'OrdersController@changeOrderStatus');
  // Route::get('/orders/all/{cat}', 'OrdersController@showOrderCategory');


  // Route::get('/invoice', 'OrdersController@adminDownloadInvoice');


  // Route::get('/settings', function () {
  //   return view('dashboard.settings');
  // })->name('dashboard.settings');

  // Route::fallback(function () {
  //   return response()->view('dashboard.404', [], 404);
  // });

});
Route::get('/login/{provider}', 'UserController@redirectToProvider');
Route::get('/login/{provider}/callback', 'UserController@handleProviderCallback');
Route::get('/order/{id}', 'UserController@idd');
