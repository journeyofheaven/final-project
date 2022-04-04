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

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
    
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'AdminController@dashboard');
    Route::resource('kategori', 'KategoriController');
    Route::resource('supplier', 'SupplierController');
    Route::resource('barang', 'BarangController');

    Route::get('inventori', 'InventoriController@index');
    Route::get('/inventori/{inventori_id}', 'InventoriController@show');

    Route::get('/inventori/tambah/{barang_id}', 'TambahStockController@edit');
    Route::put('/inventori/tambah/{barang_id}', 'TambahStockController@update');

    Route::get('/inventori/kurang/{barang_id}', 'KurangiStockController@edit');
    Route::put('/inventori/kurang/{barang_id}', 'KurangiStockController@update');

});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});


