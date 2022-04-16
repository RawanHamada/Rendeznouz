<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/workspace', function () {
//     return view('landing-page');
// });

Route::get('/owner-login.blade' ,[UsersController::class, 'index']);

Route::get('/owner-login.blade/create' ,[UsersController::class, 'create']);

Route::post('/workspace' ,[UsersController::class, 'store   ']);

// Route::get('/owner-login.blade', function () {
//     return view('owner-login');
// });
