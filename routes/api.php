<?php

use App\Models\Provinsi;
use App\Models\Tracking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProvinsiController;
use App\Http\Controllers\Api\ApiController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// api provinsi
Route::get('provinsi',[ProvinsiController::class, 'index']);
Route::get('provinsi/{id?}',[ProvinsiController::class, 'show']);

// api kasus
Route::get('indonesia',[ApiController::class, 'indonesia']);
Route::get('indonesia/provinsi/{id}',[ApiController::class, 'provinsi']);
Route::get('indonesia/provinsi',[ApiController::class, 'provinsi2']);
Route::get('indonesia/kota',[ApiController::class, 'kota']);
Route::get('indonesia/kecamatan',[ApiController::class, 'kecamatan']);
Route::get('indonesia/kelurahan',[ApiController::class, 'kelurahan']);
Route::get('global',[ApiController::class, 'global']);


