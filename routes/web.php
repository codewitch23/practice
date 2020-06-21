<?php
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact','ContactController@show')->middleware('auth');
Route::post('/contact','ContactController@store')->middleware('auth');
Route::get('payments/create','PaymentsController@create');
Route::post('payments','PaymentsController@store');
Route::get('notifications','UserNotificationController@show')->middleware('auth');


Auth::routes();
