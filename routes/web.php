<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ContactController;

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

/*
* Page Routes define for algo-portolfio
*/

Route::get('/',[HomeController::class,'page']);
Route::get('/contact',[ContactController::class,'page']);
Route::get('/projects',[ProjectController::class,'page']);
Route::get('/resume',[ResumeController::class,'page']);

/*
* Ajax call Routes for algo-portfolio
*/

Route::get('/heroData',[HomeController::class,'heroData']); // done
Route::get('/aboutData',[HomeController::class,'aboutData']); // done
Route::get('/socialData',[HomeController::class,'socialData']); // done

Route::get('/projectData',[ProjectController::class,'projectData']); // done

Route::get('/resumeLink',[ResumeController::class,'resumeLink']); // done
Route::get('/experienceData',[ResumeController::class,'experienceData']); // done
Route::get('/educationData',[ResumeController::class,'educationData']); // done
Route::get('/skillData',[ResumeController::class,'skillData']);
Route::get('/languageData',[ResumeController::class,'languageData']); // done

Route::post('/contactRequest',[ContactController::class,'contactRequest']); //done
