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
})->name('index');


Route::get('/pay', 'HomeController@pay')->name('pay');
Route::get('/success', 'HomeController@pay_success')->name('pay.success');

Route::get('/test', function () {
    return redirect()->route('index')->with('message', 'Вы успешно приобрели программу');;
});
