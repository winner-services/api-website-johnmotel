<?php

use App\Http\Controllers\About\AboutController;
use App\Http\Controllers\Faqs\FaqsController;
use App\Http\Controllers\Gallery\GalleryController;
use App\Http\Controllers\Service\ServiceController;
use App\Http\Controllers\Slide\SlideController;
use App\Http\Controllers\Team\TeamController;
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
Route::controller(TeamController::class)->group(function () {
    Route::get('/getAllTeamData', 'getAllTeamData');
    Route::post('/createTeam', 'storeTeam');
    Route::post('/updateTeam/{id}', 'updateTeam');
    Route::delete('/deleteTeam/{id}', 'deleteTeam');
    Route::get('/getSingleTeamData/{id}', 'getSingleTeamData');
});

Route::controller(ServiceController::class)->group(function () {
    Route::get('getServiceData', 'getServiceData');
    Route::get('getSingleService/{id}', 'getSingleService');
    Route::post('createService', 'createService');
    Route::post('updateService', 'updateService');
    Route::delete('deleteService/{id}', 'deleteService');
});

Route::controller(GalleryController::class)->group(function () {
    Route::get('/getAllGalleyData', 'getAllGalleyData');
    Route::get('/getSixImagesGallery', 'getSixGallery');
    Route::post('/createGallery', 'storeGallery');
    Route::post('/updateGallery/{id}', 'updateGallery');
    Route::delete('/deleteGallery/{id}', 'deleteGallery');
    Route::get('/getSingleGallery/{id}', 'getSingleGallery');
});

Route::controller(FaqsController::class)->group(function () {
    Route::post('/createFaqs', 'createFaqs');
    Route::put('/updateFaqs/{id}', 'updateFaqs');
    Route::get('/getFaqsData' . 'getFaqsData');
    Route::delete('/deleteFaqs/{id}', 'deleteFaqs');
});