<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;

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
Auth::routes();

Route::get('/', function () {
    return view('index');
});

Route::get('/admin', [UsuarioController::class, 'index']);

Route::get('/auth/register', [UsuarioController::class, 'create']);

Route::get('/auth/login', [UsuarioController::class, 'session']);

Route::post('/auth/register', [UsuarioController::class, 'store']);

Route::get('/admin/admin2_2/{id}', [UsuarioController::class, 'show']);

Route::get('/admin/admin2/{id}', [UsuarioController::class, 'edit']);

Route::put('/admin/admin2/{id}', [UsuarioController::class, 'update']);

Route::get('/admin/eliminar/{id}', [UsuarioController::class, 'destroy']);
