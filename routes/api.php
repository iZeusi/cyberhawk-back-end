<?php

use App\Http\Controllers\ComponentController;
use App\Http\Controllers\ComponentTypeController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\InspectionController;
use App\Http\Controllers\TurbineController;
use App\Http\Controllers\WindFarmController;
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

/*
|--------------------------------------------------------------------------
| Wind Farm Routes
|--------------------------------------------------------------------------
*/
Route::get('/farms', WindFarmController::class . '@index');
Route::get('/farms/{id}', WindFarmController::class. '@show');
Route::get('/farms/{id}/turbines', WindFarmController::class. '@turbines');
Route::get('/farms/{id}/turbines/{id}', WindFarmController::class. '@showTurbine');

/*
|--------------------------------------------------------------------------
| Turbine Routes
|--------------------------------------------------------------------------
*/
Route::get('/turbines', TurbineController::class . '@index');
Route::get('/turbines/{id}', TurbineController::class. '@show');
Route::get('/turbines/{id}/components', TurbineController::class. '@components');
Route::get('/turbines/{id}/components/{id}', TurbineController::class. '@showComponent');
Route::get('/turbines/{id}/inspections', TurbineController::class. '@inspections');
Route::get('/turbines/{id}/inspections/{id}', TurbineController::class. '@showInspection');

/*
|--------------------------------------------------------------------------
| Component Routes
|--------------------------------------------------------------------------
*/
Route::get('/components', ComponentController::class . '@index');
Route::get('/components/{id}', ComponentController::class. '@show');
Route::get('/components/{id}/grades', ComponentController::class. '@grades');
Route::get('/components/{id}/grades/{id}', ComponentController::class. '@showGrade');

/*
|--------------------------------------------------------------------------
| Inspection Routes
|--------------------------------------------------------------------------
*/
Route::get('/inspections', InspectionController::class . '@index');
Route::get('/inspections/{id}', InspectionController::class. '@show');
Route::get('/inspections/{id}/grades', InspectionController::class. '@grades');
Route::get('/inspections/{id}/grades/{id}', InspectionController::class. '@showGrade');

/*
|--------------------------------------------------------------------------
| Grade Routes
|--------------------------------------------------------------------------
*/
Route::get('/grades', GradeController::class . '@index');
Route::get('/grades/{id}', GradeController::class. '@show');

/*
|--------------------------------------------------------------------------
| Component Type Routes
|--------------------------------------------------------------------------
*/
Route::get('/component-types', ComponentTypeController::class. '@index');
Route::get('/component-types/{id}', ComponentTypeController::class. '@show');

/*
|--------------------------------------------------------------------------
| Grade Types Routes
|--------------------------------------------------------------------------
*/
Route::get('/grade-types', GradeController::class. '@index');
Route::get('/grade-types/{id}', GradeController::class. '@show');
