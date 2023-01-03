<?php

use App\Http\Controllers\ChallengeController;
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

Route::prefix('app')->group(function () {

    Route::prefix('challenge')->group(function () {

        Route::get('/reports', [ChallengeController::class, 'listChallenge']);

        Route::post('/reports-create', [ChallengeController::class, 'createChallenge']);

        Route::put('/reports/{reportId}', [ChallengeController::class, 'updateChallenge']);
    });
});
