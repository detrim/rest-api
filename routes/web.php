<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestApiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('registrasi.registrasi');
});

route::get('/login', [RestApiController::class, 'login'])->name('login');
route::post('/proseslogin', [RestApiController::class, 'proseslogin']);
route::get('/registrasi', [RestApiController::class, 'registrasi']);
route::post('/prosesregister', [RestApiController::class, 'prosesregister']);
route::get('/logout', [RestApiController::class, 'logout']);

Route::group(['middleware' => ['auth']], function () {
        route::get('/dashboard', [RestApiController::class, 'index']);
        route::patch('/user/{id}/update', [RestApiController::class, 'update']);
        route::delete('/user/{id}/destroy', [RestApiController::class, 'destroy']);
});