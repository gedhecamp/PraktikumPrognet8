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

Route::get('/', function () {
    // return view('authAdmin.login');
    return view('Backend.Report.tahun');
});

// Route::get('/', 'HomeController@index')->name('utama');
Route::get('/front', 'HomeController@index');
Route::get('/category/{id}','HomeController@pageCategory');
Route::get('/detail/{id}','HomeController@pageProduct');

//CART
Route::get('/cart/getcity','CartController@city');
Route::get('/cart/getshippingcost','CartController@shippingCost');
Route::resource('/cart','CartController');


//USER
Auth::routes(['verify' => true]);
// Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/user/logout','Auth\LoginController@logoutUser')->name('user.logout');

//TRANSACTION
Route::get('/profile','TransaksiController@index');
Route::delete('/transaksi/success/{id}','TransaksiController@success');
Route::delete('/review/{id}','TransaksiController@review');
Route::get('/transaksi','TransaksiAdminController@index');
Route::delete('/transaksi/{id}','TransaksiAdminController@destroy');
Route::delete('/transaksi/cancel/{id}','TransaksiAdminController@cancel');

//CHECKOUT
Route::post('/uploadbukti','TransaksiController@uploadBukti');
Route::resource('/checkout','TransaksiController');

//PRODUK
Route::resource('/diskon','DiskonController');
Route::resource('/kategori','KategoriController');
Route::resource('/kurir','KurirController');
Route::resource('/produk', 'ProdukController');
Route::post('/tambahgambar', 'ProdukController@tambahgambar');
Route::get('/produktambah/{id}', 'ProdukController@tambah');
Route::get('/produkkurang/{id}', 'ProdukController@destroyimages');
// Route::resource('/gambarproduk', 'GambarProdukController');

//RESPONSE
Route::resource('/respon','ResponController');

//REPORT
Route::get('/tahun', 'AdminController@tahun');
Route::get('/bulan', 'AdminController@bulan');

//ADMIN
Route::group(['prefix'=>'admin', 'guard'=>'admin'],function(){
    Route::get('/login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'AuthAdmin\LoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.home');
    Route::get('/logout','AuthAdmin\LoginController@logout')->name('admin.logout');
});
