<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\DashboardController;
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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
Route::post('/login',[UserController::class, 'login']);
Route::middleware(['auth:sanctum'])->group(function(){
    Route::get('/user', [UserController::class, 'index'])->middleware('can:user')->name('user');
    Route::get('/inicio', [indexController::class, 'pginicial'])->middleware('can:inicio')->name('inicio');
    Route::get('/dashboard', [DashboardController::class, 'dash'])->middleware('can:dashboard')->name('dashboard');
});
