<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsConfirmationController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\FAQsController;
use App\Http\Controllers\LoginUser;
use App\Http\Controllers\RegisterUserController;
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
Route::apiResource('register',RegisterUserController::class);
//Route::post('login', [LoginUser::class, 'loginUser']);
Route::apiResource('aboutUs',AboutUsController::class);
Route::apiResource('contactUs', ContactUsController::class);
Route::apiResource('contactUs-confirmation', ContactUsConfirmationController::class);
Route::apiResource('FAQs', FAQsController::class);




