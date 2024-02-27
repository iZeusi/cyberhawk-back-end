<?php

use App\Http\Controllers\ComponentController;
use App\Http\Controllers\ComponentTypeController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\GradeTypeController;
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

// All routes in this file are protected by the "auth:sanctum" middleware group, as of the RouteServiceProvider

/*
|--------------------------------------------------------------------------
| Wind Farm Routes
|--------------------------------------------------------------------------
*/
Route::get('/farms', WindFarmController::class . '@index');
Route::get('/farms/{wind_farm:id}', WindFarmController::class. '@show');
Route::get('/farms/{wind_farm:id}/turbines', WindFarmController::class. '@turbines');
Route::get('/farms/{wind_farm:id}/turbines/{turbine:id}', WindFarmController::class. '@showTurbine');

/*
|--------------------------------------------------------------------------
| Turbine Routes
|--------------------------------------------------------------------------
*/
Route::get('/turbines', TurbineController::class . '@index');
Route::get('/turbines/{turbine:id}', TurbineController::class. '@show');
Route::get('/turbines/{turbine:id}/components', TurbineController::class. '@components');
Route::get('/turbines/{turbine:id}/components/{component:id}', TurbineController::class. '@showComponent');
Route::get('/turbines/{turbine:id}/inspections', TurbineController::class. '@inspections');
Route::get('/turbines/{turbine:id}/inspections/{inspection:id}', TurbineController::class. '@showInspection');

/*
|--------------------------------------------------------------------------
| Component Routes
|--------------------------------------------------------------------------
*/
Route::get('/components', ComponentController::class . '@index');
Route::get('/components/{component:id}', ComponentController::class. '@show');
Route::get('/components/{component:id}/grades', ComponentController::class. '@grades');
Route::get('/components/{component:id}/grades/{grade:id}', ComponentController::class. '@showGrade');

/*
|--------------------------------------------------------------------------
| Inspection Routes
|--------------------------------------------------------------------------
*/
Route::get('/inspections', InspectionController::class . '@index');
Route::get('/inspections/{inspection:id}', InspectionController::class. '@show');
Route::get('/inspections/{inspection:id}/grades', InspectionController::class. '@grades');
Route::get('/inspections/{inspection:id}/grades/{grade:id}', InspectionController::class. '@showGrade');

/*
|--------------------------------------------------------------------------
| Grade Routes
|--------------------------------------------------------------------------
*/
Route::get('/grades', GradeController::class . '@index');
Route::get('/grades/{grade:id}', GradeController::class. '@show');

/*
|--------------------------------------------------------------------------
| Component Type Routes
|--------------------------------------------------------------------------
*/
Route::get('/component-types', ComponentTypeController::class. '@index');
Route::get('/component-types/{component_type:id}', ComponentTypeController::class. '@show');

/*
|--------------------------------------------------------------------------
| Grade Types Routes
|--------------------------------------------------------------------------
*/
Route::get('/grade-types', GradeTypeController::class. '@index');
Route::get('/grade-types/{grade_type:id}', GradeTypeController::class. '@show');

