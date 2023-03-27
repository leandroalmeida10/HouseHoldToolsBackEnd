<?php

use App\Http\Controllers\ControlUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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



Route::post('/register', [ControlUsers::class, 'register']);
Route::get('/edit', [ControlUsers::class, 'edit']);
Route::get('/delete', [ControlUsers::class, 'delete']);
Route::get('/login', [ControlUsers::class, 'login']);