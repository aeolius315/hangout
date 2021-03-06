<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [PagesController::class,'index']);
Route::get('/events?', [EventsController::class,'search']);

Route::resource('/events', EventsController::class);

Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/contacts', function(){
    return view('pages.contacts');
});
Route::get('/about', function(){
    return view('pages.about');
});
