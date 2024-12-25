<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PressReleaseController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ProcurementController;
use App\Http\Controllers\ProcurementResultsController;
use App\Http\Controllers\AveragePriceController;
use App\Http\Controllers\RevenueController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\BuildingController;

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

Route::get('/', function () {
    return view('user.data-school.emblem-school.index');
});

// Route::get('/classroom/page', [AdminController::class, 'ClassRoomPage'])->name('ClassRoomPage');

//admin PressRelease
Route::get('/PressRelease/page', [PressReleaseController::class, 'PressReleaseHome'])->name('PressReleaseHome');
Route::post('/PressRelease/create', [PressReleaseController::class, 'PressReleaseCreate'])->name('PressReleaseCreate');
Route::delete('/PressRelease/delete{id}', [PressReleaseController::class, 'PressReleaseDelete'])->name('PressReleaseDelete');

//admin Activity
Route::get('/Activity/page', [ActivityController::class, 'ActivityHome'])->name('ActivityHome');
Route::post('/Activity/create', [ActivityController::class, 'ActivityCreate'])->name('ActivityCreate');

//admin Procurement
Route::get('/Procurement/page', [ProcurementController::class, 'ProcurementHome'])->name('ProcurementHome');
Route::post('/Procurement/create', [ProcurementController::class, 'ProcurementCreate'])->name('ProcurementCreate');
Route::delete('/Procurement/delete{id}', [ProcurementController::class, 'ProcurementDelete'])->name('ProcurementDelete');

//admin ProcurementResults
Route::get('/ProcurementResults/page', [ProcurementResultsController::class, 'ProcurementResultsHome'])->name('ProcurementResultsHome');
Route::post('/ProcurementResults/create', [ProcurementResultsController::class, 'ProcurementResultsCreate'])->name('ProcurementResultsCreate');
Route::delete('/ProcurementResults/delete{id}', [ProcurementResultsController::class, 'ProcurementResultsDelete'])->name('ProcurementResultsDelete');

//admin AveragePrice
Route::get('/AveragePrice/page', [AveragePriceController::class, 'AveragePriceHome'])->name('AveragePriceHome');
Route::post('/AveragePrice/create', [AveragePriceController::class, 'AveragePriceCreate'])->name('AveragePriceCreate');
Route::delete('/AveragePrice/delete{id}', [AveragePriceController::class, 'AveragePriceDelete'])->name('AveragePriceDelete');

//admin Revenue
Route::get('/Revenue/page', [RevenueController::class, 'RevenueHome'])->name('RevenueHome');
Route::post('/Revenue/create', [RevenueController::class, 'RevenueCreate'])->name('RevenueCreate');
Route::delete('/Revenue/delete{id}', [AveragePriceController::class, 'RevenueDelete'])->name('RevenueDelete');


//admin ClassRoom
Route::get('/ClassRoom/page', [ClassroomController::class, 'ClassRoomHome'])->name('ClassRoomHome');
Route::post('/ClassRoom/create', [ClassroomController::class, 'ClassRoomCreate'])->name('ClassRoomCreate');
Route::delete('/ClassRoom/delete{id}', [ClassroomController::class, 'ClassRoomDelete'])->name('ClassRoomDelete');

//admin Building
Route::get('/Building/page', [BuildingController::class, 'BuildingHome'])->name('BuildingHome');
Route::post('/Building/create', [BuildingController::class, 'BuildingCreate'])->name('BuildingCreate');
Route::delete('/Building/delete{id}', [BuildingController::class, 'BuildingDelete'])->name('BuildingDelete');
