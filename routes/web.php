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
    return view('admin_login');
});
Route::post('/admin-dashboard', 'AdminController@accessinto');
Route::get('/dashboard', 'AdminController@show_dashboard');
Route::get('/logout', 'AdminController@logout');
//account
Route::get('/add-account', 'Manager@add_account');
Route::post('/save-account', 'Manager@save_account');
Route::get('/all-account', 'Manager@all_account');
// Route::post('/admin-dashboard',)
//edit account
Route::get('/edit-account/{admin_id}', 'Manager@edit_account');
Route::get('/delete-account/{admin_id}', 'Manager@delete_account');
Route::post('/update-account/{admin_id}', 'Manager@update_account');
//sinhvien
Route::get('/add-sinhvien', 'Sinhvien@add_sinhvien');
Route::post('/save-sinhvien', 'Sinhvien@save_sinhvien');
Route::get('/all-sinhvien', 'Sinhvien@all_sinhvien');
//edit sinhvien
Route::get('/edit-sinhvien/{id}', 'Sinhvien@edit_sinhvien');
Route::get('/delete-sinhvien/{id}', 'Sinhvien@delete_sinhvien');
Route::post('/update-sinhvien/{id}', 'Sinhvien@update_sinhvien');
//khoa
Route::get('/add-khoa', 'Khoa@add_khoa');
Route::post('/save-khoa', 'Khoa@save_khoa');
Route::get('/all-khoa', 'Khoa@all_khoa');
//edit khoa
Route::get('/edit-khoa/{id}', 'Khoa@edit_khoa');
Route::get('/delete-khoa/{id}', 'Khoa@delete_khoa');
Route::post('/update-khoa/{id}', 'Khoa@update_khoa');

//search
Route::post('/show-search', 'Khoa@search');
Route::post('/show-search-sinhvien', 'Sinhvien@search');