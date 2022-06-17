<?php

use App\Http\Controllers\DokterController;
use App\Http\Controllers\PoliklinikController;
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
    return view('landingpage/index');
});

Route::get('/adminpage', function () {
    return view('adminpage/index');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::resource('/adminpage/dokter', DokterController::class);

Route::get('/dokter', [DokterController::class, 'tampillanding']);

Route::resource('/poliklinik', PoliklinikController::class);

Route::get('/poliklinik/{poliklinik:id}', [PoliklinikController::class, 'tampildokter']);
