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
    return view('index');
});

Route::get('/kamer',function() {
    $kamers = App\Models\Kamer::all();

    return View('kamer', ['kamers' => $kamers]);
});

Route::get('/klant',function() {
    $kamers = App\Models\Kamer::all();

    return View('klant/index', ['kamers' => $kamers ]);
});

Route::get('klant/{id}/create' ,[App\Http\Controllers\Klant::class, 'create'])->name("create");

Route::get('/bedankt', function () {
    return view('klant.bedankt');
});



Route::resource('kamers', \App\Http\Controllers\KamerController::class);
Route::resource('booking', \App\Http\Controllers\BookingController::class);
Route::resource('klant', \App\Http\Controllers\Klant::class);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

