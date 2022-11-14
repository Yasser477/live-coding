<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BriefController;
use App\Http\Controllers\taskController;

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



Route::post('/addbrief',[BriefController::class, 'addBrief']);
Route::get('viewADD',[BriefController::class, 'viewADD']);
Route::get('showBriefs',[BriefController::class, 'showBriefs']);
Route::get('/editBrief/{id}',[BriefController::class, 'editBrief']);
Route::get('viewEdit',[BriefController::class, 'viewEdit']);
Route::get('DeleteBrief/{id}',[BriefController::class, 'DeleteBrief']);
Route::post('/updateBrief',[BriefController::class, 'updateBrief']);





Route::get('ViewAddTask/{id}',[taskController::class, 'ViewAddTask']);
Route::post('/addTask/{id}',[taskController::class, 'addTask']);
Route::get('tasks',[taskController::class, 'ViewAllTasks']);

