<?php

use App\Http\Controllers\UserController;
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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', "TopController@index")->name('top_page');

Route::get('/submission_page', "SubmissionController@index")->name('submission_page');

Route::post('/store', "SubmissionController@exeStore")->name('store');

Route::get('list_page', "ListController@index")->name('list_page');

Route::get('detail/{id}', "DetailController@index")->name('detail_page');

Route::get('remittance_page', "RemittanceController@index")->name('remittance_page');