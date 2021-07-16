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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/airline', [App\Http\Controllers\AirlineController::class, 'index'])->name('airline');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');

//Route::get('/users', [App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('users');

Route::get('/users', [App\Http\Controllers\UsersController::class, 'index'])->name('users');



/* Company */ 
Route::get('Company',[App\Http\Controllers\CompanyController::class,'index'])->name('Company');
Route::post('CompanyStor',[App\Http\Controllers\CompanyController::class,'store'])->name('CompanyStor');
Route::put('CompanyUpdate/{id}',[App\Http\Controllers\CompanyController::class,'update'])->name('CompanyUpdate');
Route::delete('Companydelete/{id}',[App\Http\Controllers\CompanyController::class,'destroy'])->name('Companydelete');

/* Position */ 
Route::get('positionlist',[App\Http\Controllers\PositionController::class,'index'])->name('positionlist');
Route::any('PositionStor',[App\Http\Controllers\PositionController::class,'store'])->name('PositionStor');
Route::put('PositionUpdate/{id}',[App\Http\Controllers\PositionController::class,'update'])->name('PositionUpdate');
Route::delete('Positiondelete/{id}',[App\Http\Controllers\PositionController::class,'destroy'])->name('Positiondelete');

/* SubAgency */ 
Route::get('SubAgencyList',[App\Http\Controllers\SubAgencyController::class,'index'])->name('SubAgencyList');
Route::post('SubAgencyStor',[App\Http\Controllers\SubAgencyController::class,'store'])->name('SubAgencyStor');
Route::put('SubAgencyUpdate/{id}',[App\Http\Controllers\SubAgencyController::class,'update'])->name('SubAgencyUpdate');
Route::delete('SubAgencydelete/{id}',[App\Http\Controllers\SubAgencyController::class,'destroy'])->name('SubAgencydelete');


/* Airline */ 
Route::get('AirlineList',[App\Http\Controllers\AirlineController::class,'index'])->name('AirlineList');
Route::post('AirlineStor',[App\Http\Controllers\AirlineController::class,'create'])->name('AirlineStor');
Route::put('AirlineUpdate/{id}',[App\Http\Controllers\AirlineController::class,'update'])->name('AirlineUpdate');
Route::delete('Airlinedelete/{id}',[App\Http\Controllers\AirlineController::class,'destroy'])->name('Airlinedelete');

/* AircraftType */ 
Route::get('AircraftList',[App\Http\Controllers\AircraftTypeController::class,'index'])->name('AircraftList');
Route::post('AircraftTypeStor',[App\Http\Controllers\AircraftTypeController::class,'store'])->name('AircraftTypeStor');
Route::put('AircraftTypeUpdate/{id}',[App\Http\Controllers\AircraftTypeController::class,'update'])->name('AircraftTypeUpdate');
Route::delete('AircraftTypedelete/{id}',[App\Http\Controllers\AircraftTypeController::class,'destroy'])->name('AircraftTypedelete');


/* Aircraft_Class */ 
Route::get('Aircraft_ClassList',[App\Http\Controllers\AircraftClassController::class,'index'])->name('Aircraft_ClassList');
Route::post('Aircraft_ClassStor',[App\Http\Controllers\AircraftClassController::class,'store'])->name('Aircraft_ClassStor');
Route::put('Aircraft_ClassUpdate/{id}',[App\Http\Controllers\AircraftClassController::class,'update'])->name('Aircraft_ClassUpdate');
Route::delete('Aircraft_Classdelete/{id}',[App\Http\Controllers\AircraftClassController::class,'destroy'])->name('Aircraft_Classdelete');


/* Aircraft_Detail */ 
Route::get('Aircraft_DetailsList',[App\Http\Controllers\AircraftDetailController::class,'index'])->name('Aircraft_DetailsList');
Route::post('Aircraft_DetailStor',[App\Http\Controllers\AircraftDetailController::class,'store'])->name('Aircraft_DetailStor');
Route::put('Aircraft_DetailUpdate/{id}',[App\Http\Controllers\AircraftDetailController::class,'update'])->name('Aircraft_DetailUpdate');
Route::delete('Aircraft_Detaildelete/{id}',[App\Http\Controllers\AircraftDetailController::class,'destroy'])->name('Aircraft_Detaildelete');




/* FlyRoute */ 
Route::get('FlyRouteList',[App\Http\Controllers\FlyRouteController::class,'index'])->name('FlyRouteList');
Route::post('FlyRouteStor',[App\Http\Controllers\FlyRouteController::class,'store'])->name('FlyRouteStor');
Route::put('FlyRouteUpdate/{id}',[App\Http\Controllers\FlyRouteController::class,'update'])->name('FlyRouteUpdate');
Route::delete('FlyRoutedelete/{id}',[App\Http\Controllers\FlyRouteController::class,'destroy'])->name('FlyRoutedelete');
