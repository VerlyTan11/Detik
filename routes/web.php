<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ControllerRegist;
use App\Http\Controllers\ControllerLogin;
use App\Http\Controllers\AdminLogController;

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

Route::get('index', function () {
    return view('index');
});

Route::get('regist', function () {
    return view('regist');
});

Route::get('login', function () {
    return view('login');
});

Route::get('admin', function () {
    return view('admin');
});

Route::get('admin1', function () {
    return view('admin1');
});

Route::get('adminlogin', function () {
    return view('adminlogin');
});

Route::get('edit', function () {
    return view('edit');
});

Route::get('hapus', function () {
    return view('hapus');
});

Route::get('/login', [ControllerLogin::class, 'index']) -> name('login') -> middleware('guest');
Route::post('/login', [ControllerLogin::class, 'authenticate']);

Route::get('/adminlogin', [AdminLogController::class, 'index']);
Route::post('/adminlogin', [AdminLogController::class, 'authenticate']);

Route::get('/regist', [ControllerRegist::class, 'index']) -> middleware('guest');
Route::post('/regist', [ControllerRegist::class, 'store']);

Route::get('/index', [HomeController::class, 'index']);
Route::post('/keluar', [AdminLogController::class, 'logout']);
Route::post('/index', [HomeController::class, 'store']);

Route::post('/logout', [ControllerLogin::class, 'logout']);
Route::get('/admin1', [HomeController::class, 'index1']);
Route::post('/admin1', [HomeController::class, 'store1']);

Route::get('/admin', [HomeController::class, 'create']);
Route::get('/hapus/{id}', [HomeController::class, 'hapus']);
Route::get('/edit/{id}', [HomeController::class, 'edit']);
Route::post('/edit/{id}', [HomeController::class, 'update']);
Route::get('/kategori/{kategori}', [HomeController::class, 'kategori']);
