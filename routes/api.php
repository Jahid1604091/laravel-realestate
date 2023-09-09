<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });




// Route::group(['middleware'=>'api'], function ($routes) {
//     Route::post('login', [AuthController::class,'login']);
// });

//or

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
    Route::get('profile', 'profile')->middleware('restrictRole:user');
    Route::get('users', 'users')->middleware('restrictRole:admin');
});

//public route
// Route::post('/auth/login', [AuthController::class, 'login']);

// Route::group(['middleware' => ['auth:sanctum']], function () {
//     Route::post('/auth/register', [AuthController::class, 'register'])->middleware('restrictRole:user');
//     Route::get('/users', [AuthController::class, 'show'])->middleware('restrictRole:admin');
//     Route::put('/users/{id}', [AuthController::class, 'update'])->middleware('restrictRole:user');
// });
