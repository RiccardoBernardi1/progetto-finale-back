<?php


use App\Http\Controllers\Api\CompanyController ;
use App\Http\Controllers\Api\TypologyController;
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
Route::get('companies',[CompanyController::class,'index']);
Route::get('companies/{slug}', [CompanyController::class, 'show']);
Route::get('typologies',[TypologyController::class,'index']);
Route::get('typologies/{slug}', [TypologyController::class, 'show']);
Route::post('/orders', [\App\Http\Controllers\Api\OrderController::class, 'store']);