<?php

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

//Route::get('/players', [\App\Http\Controllers\Api\v1\Player\PlayersController::class, 'getPlayers']);
//

Route::get('/users', [\App\Http\Controllers\Api\v1\User\UsersController::class, 'getPayments']);

//Route::get('/player&quests', [\App\Http\Controllers\Api\v1\Player\PlayersController::class, 'index']);
//
//Route::get('/player&quest', [\App\Http\Controllers\Api\v1\Player\PlayersController::class, 'onlyQuest']);
//
//Route::post('/player&quests', [\App\Http\Controllers\Api\v1\Player\PlayersController::class, 'store']);
//
//Route::delete('/playerDel/1', [\App\Http\Controllers\Api\v1\Player\PlayersController::class, 'destroy']);
//Route::get('/payments', [\App\Http\Controllers\Api\v1\Payment\PaymentsController::class, 'getPayments']);

//Route::patch('/payments/id', [\App\Http\Controllers\Api\v1\Payment\PaymentsController::class, 'changeTitle']);



Route::apiResources([
    'quests' => \App\Http\Controllers\Api\v1\Quest\QuestsController::class,

    'players' => \App\Http\Controllers\Api\v1\Player\PlayersController::class,

    'clients' => \App\Http\Controllers\Api\v1\Client\ClientsController::class,

    'purOrders' => \App\Http\Controllers\Api\v1\PurOrder\PurOrdersController::class,

    'payments' => \App\Http\Controllers\Api\v1\Payment\PaymentsController::class,

    'users' => \App\Http\Controllers\Api\v1\User\UsersController::class,






]);



