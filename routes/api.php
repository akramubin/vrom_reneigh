<?php

<<<<<<< HEAD
use App\Http\Controllers\API\MidtransCallbackController;
=======
>>>>>>> 21d66d715cff087f0b6e76a6e29606207e68da90
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
<<<<<<< HEAD

Route::post('midtrans/callback',[MidtransCallbackController::class,'callback']);
=======
>>>>>>> 21d66d715cff087f0b6e76a6e29606207e68da90
