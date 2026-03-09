<?php
use illuminate\support\Facades\Route;
use Livewire\Livewire;



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

//Route::get('/', function () {
//    return view('welcome');
//});

Livewire::setUpdateRoute(function ($handle) {
    return Route::post('tastyigniter/livewire/update', $handle);
});
