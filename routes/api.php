<?php

use App\Http\Controllers\About\AboutController;
use App\Http\Controllers\Slide\SlideController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::controller(AboutController::class)->group(function () {
    Route::get('/getAllAboutData', 'getAllAboutData');
    Route::get('/getSingleAboutData/{id}', 'getSingleAboutData');
    Route::post('/createAbout', 'storeAbout');
    Route::post('/updateAbout/{id}', 'updateAbout');
    Route::delete('/deleteAbout/{id}', 'deleteAbout');
});

Route::controller(SlideController::class)->group(function () {
    Route::post('/createSlide', 'storeSlide');
    Route::post('/updateSlide/{id}', 'updateSlide');
    Route::delete('/deleteSlide/{id}', 'deleteSlide');
    Route::get('/getAllSlideData', 'getAllSlideData');
    Route::get('/getOneSilde', 'getOneSilde');
    Route::get('/getSingleSlide/{id}', 'getSingleSlide');
});