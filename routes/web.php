<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\CropImageUploadController;
 
Route::get('image-crop', [CropImageUploadController::class, 'index']);
Route::post('save-crop-image', [CropImageUploadController::class, 'store']);


use App\Http\Controllers\CropImageController;

Route::get('crop-image-upload', [CropImageController::class, 'index']);
Route::post('crop-image-upload', [CropImageController::class, 'uploadCropImage']);