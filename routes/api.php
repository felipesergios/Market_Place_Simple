<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CampaignController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\GroupController;

Route::apiResources([
    'campanha' => CampaignController::class,
    'produto' => ProductController::class,
    'disconto' => DiscountController::class,
    'cidade' => CityController::class,
    'grupo' => GroupController::class,
]);

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});


