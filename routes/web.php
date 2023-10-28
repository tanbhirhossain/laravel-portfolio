<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\WorkExperienceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::prefix("admin")->group(function(){
    Route::resource('works', WorkExperienceController::class);
    Route::resource('projects', ProjectController::class);

});


Route::get('/', [FrontendController::class, 'index']);
Route::get('/work', [FrontendController::class, 'works']);
Route::get('/project', [FrontendController::class, 'projects']);
Route::get('/projects/{id}', [FrontendController::class, 'projectShow'])->name('project.show');



