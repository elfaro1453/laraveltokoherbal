<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// membuat routing register yang akan menjalankan fungsi registerUser yang ada di UserController
Route::post('/register', [UserController::class, 'registerUser']);

Route::get('/user/{id}', [UserController::class, 'getUser']);

Route::put('/user/{id}', [UserController::class, 'updateUser']);

Route::delete('user/{id}', [UserController::class, 'deleteUser']);
