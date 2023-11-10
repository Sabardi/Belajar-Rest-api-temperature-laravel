<?php
use App\Http\Controllers\TemperatureController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/temperatures', [TemperatureController::class, 'index']);
Route::get('/temperatures/{id}', [TemperatureController::class, 'show']);
Route::post('/temperatures', [TemperatureController::class, 'store']);
Route::put('/temperatures/{id}', [TemperatureController::class, 'update']);
Route::delete('/temperatures/{id}', [TemperatureController::class, 'destroy']);