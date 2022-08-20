<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class, 'index']);

// Route::get('/', function () {
//    return view('caleb.index');
// });
 Route::get('/about', function () {
    return view('caleb.about');
 });
Route::get('/content', function () {
   return view('caleb.content');
});
Route::get('/portfolio', function () {
   return view('caleb.portfolio');
});
