<?php

use App\Http\Controllers\facilityController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\studentController;
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

// Route::get('/', [IndustryController::class,'index']
// );

Route::resources([
    'industries' => IndustryController::class,
    'students' => studentController::class,
    'facilities' => facilityController::class
]);
