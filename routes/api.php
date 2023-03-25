<?php

// Import Controllers

use App\Http\Controllers\Api\V1\AssignController;
use App\Http\Controllers\Api\V1\ExamController;
use App\Http\Controllers\Api\V1\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



Route::prefix('v1')->group(function () {
    Route::apiResource('/students', StudentController::class);
    Route::apiResource('/assigns', AssignController::class);
    Route::apiResource('/exams', ExamController::class);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
