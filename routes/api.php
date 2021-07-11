<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::group(['prefix' => 'v1'], function (){
    Route::post('/register', [\App\Http\Controllers\Api\v1\AuthController::class, 'register']);
    Route::post('/login', [\App\Http\Controllers\Api\v1\AuthController::class, 'login']);

    Route::middleware('auth:api')->get('/logout', [\App\Http\Controllers\Api\v1\AuthController::class, 'logout']);
});




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Airline */ 
Route::get('AirlineList',[App\Http\Controllers\AirlineController::class,'index'])->name('AirlineList');
Route::post('AirlineStor',[App\Http\Controllers\AirlineController::class,'create'])->name('AirlineStor');
Route::put('AirlineUpdate/{id}',[App\Http\Controllers\AirlineController::class,'update'])->name('AirlineUpdate');
Route::delete('Airlinedelete/{id}',[App\Http\Controllers\AirlineController::class,'destroy'])->name('Airlinedelete');

/* Company */ 
Route::get('CompanyList',[App\Http\Controllers\CompanyController::class,'index'])->name('CompanyList');
Route::post('CompanyStor',[App\Http\Controllers\CompanyController::class,'store'])->name('CompanyStor');
Route::put('CompanyUpdate/{id}',[App\Http\Controllers\CompanyController::class,'update'])->name('CompanyUpdate');
Route::delete('Companydelete/{id}',[App\Http\Controllers\CompanyController::class,'destroy'])->name('Companydelete');


/* SubAgency */ 
Route::get('SubAgencyList',[App\Http\Controllers\SubAgencyController::class,'index'])->name('SubAgencyList');
Route::post('SubAgencyStor',[App\Http\Controllers\SubAgencyController::class,'store'])->name('SubAgencyStor');
Route::put('SubAgencyUpdate/{id}',[App\Http\Controllers\SubAgencyController::class,'update'])->name('SubAgencyUpdate');
Route::delete('SubAgencydelete/{id}',[App\Http\Controllers\SubAgencyController::class,'destroy'])->name('SubAgencydelete');


/* Position */ 
Route::get('PositionList',[App\Http\Controllers\PositionController::class,'index'])->name('PositionList');
Route::post('PositionStor',[App\Http\Controllers\PositionController::class,'store'])->name('PositionStor');
Route::put('PositionUpdate/{id}',[App\Http\Controllers\PositionController::class,'update'])->name('PositionUpdate');
Route::delete('Positiondelete/{id}',[App\Http\Controllers\PositionController::class,'destroy'])->name('Positiondelete');


/* AircraftType */ 
Route::get('AircraftTypeList',[App\Http\Controllers\AircraftTypeController::class,'index'])->name('AircraftTypeList');
Route::post('AircraftTypeStor',[App\Http\Controllers\AircraftTypeController::class,'store'])->name('AircraftTypeStor');
Route::put('AircraftTypeUpdate/{id}',[App\Http\Controllers\AircraftTypeController::class,'update'])->name('AircraftTypeUpdate');
Route::delete('AircraftTypedelete/{id}',[App\Http\Controllers\AircraftTypeController::class,'destroy'])->name('AircraftTypedelete');

/* Aircraft_Class */ 
Route::get('Aircraft_ClassList',[App\Http\Controllers\AircraftClassController::class,'index'])->name('Aircraft_ClassList');
Route::post('Aircraft_ClassStor',[App\Http\Controllers\AircraftClassController::class,'store'])->name('Aircraft_ClassStor');
Route::put('Aircraft_ClassUpdate/{id}',[App\Http\Controllers\AircraftClassController::class,'update'])->name('Aircraft_ClassUpdate');
Route::delete('Aircraft_Classdelete/{id}',[App\Http\Controllers\AircraftClassController::class,'destroy'])->name('Aircraft_Classdelete');


/* Aircraft_Detail */ 
Route::get('Aircraft_DetailsList',[App\Http\Controllers\AircraftDetailController::class,'index'])->name('Aircraft_DetailList');
Route::post('Aircraft_DetailStor',[App\Http\Controllers\AircraftDetailController::class,'store'])->name('Aircraft_DetailStor');
Route::put('Aircraft_DetailUpdate/{id}',[App\Http\Controllers\AircraftDetailController::class,'update'])->name('Aircraft_DetailUpdate');
Route::delete('Aircraft_Detaildelete/{id}',[App\Http\Controllers\AircraftDetailController::class,'destroy'])->name('Aircraft_Detaildelete');


/* FlyRoute */ 
Route::get('FlyRouteList',[App\Http\Controllers\FlyRouteController::class,'index'])->name('FlyRouteList');
Route::post('FlyRouteStor',[App\Http\Controllers\FlyRouteController::class,'store'])->name('FlyRouteStor');
Route::put('FlyRouteUpdate/{id}',[App\Http\Controllers\FlyRouteController::class,'update'])->name('FlyRouteUpdate');
Route::delete('FlyRoutedelete/{id}',[App\Http\Controllers\FlyRouteController::class,'destroy'])->name('FlyRoutedelete');

/* PassengerType */ 
Route::get('PassengerTypeList',[App\Http\Controllers\PassengerTypeController::class,'index'])->name('PassengerTypeList');
Route::post('PassengerTypeStor',[App\Http\Controllers\PassengerTypeController::class,'store'])->name('PassengerTypeStor');
Route::put('PassengerTypeUpdate/{id}',[App\Http\Controllers\PassengerTypeController::class,'update'])->name('PassengerTypeUpdate');
Route::delete('PassengerTypedelete/{id}',[App\Http\Controllers\PassengerTypeController::class,'destroy'])->name('PassengerTypedelete');

/* Refund_rules */ 
Route::get('Refund_rulesList',[App\Http\Controllers\RefundRulesController::class,'index'])->name('Refund_rulesList');
Route::post('Refund_rulesStor',[App\Http\Controllers\RefundRulesController::class,'store'])->name('Refund_rulesStor');
Route::put('Refund_rulesUpdate/{id}',[App\Http\Controllers\RefundRulesController::class,'update'])->name('Refund_rulesUpdate');
Route::delete('Refund_rulesedelete/{id}',[App\Http\Controllers\RefundRulesController::class,'destroy'])->name('Refund_rulesedelete');



