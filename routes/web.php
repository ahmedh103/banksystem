<?php

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
    return view('welcome');
});




//go to bank deposit page
 
Route::get('/home','CustomerController@create');
Route::post('/store','CustomerController@store')->name('store.view');

Route::get('/all','CustomerController@index');



Route::get('/transfer/index','TransferController@index');

Route::post('/store/viewTransfer','TransferController@store')->name('store.viewTransfer');

Route::get('/all','TransferController@index');
Route::get('/transfer/all','TransferController@allTransfer');

Route::post('/contacts','CustomerController@contact_us')->name('store.contact');
Route::get('/contact/us','CustomerController@getContact');