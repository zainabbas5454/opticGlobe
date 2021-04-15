<?php

use App\Http\Controllers\PlanController;
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

Route::get('/about', function(Request $request){
    return view('about');
})->name('about');


Auth::routes();

Route::group(['middleware' => ['auth','verified']], function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('Plans',[PlanController::class,'store'])->name('plan.store');
    Route::get('MyPlan',[PlanController::class,'MyPlan'])->name('myplan');
    Route::get('PlanDetail',[PlanController::class,'ViewPlanDetail'])->name('ViewPlanDetail');
    Route::get('PlanDetail/{id}',[PlanController::class,'PlanDetail'])->name('PlanDetail');
    Route::get('ViewDaysDetail/{pid}/{did}',[PlanController::class,'ViewDaysDetail'])->name('ViewDaysDetail');
    Route::post('DaysDetail',[PlanController::class,'DaysDetail'])->name('DaysDetail');
    Route::get('delete/{id}',[PlanController::class,'delete'])->name('delete');
    Route::get('DaysDetail/{id}',[PlanController::class,'ShowDaysDetail'])->name('showdetail');
    Route::get('deletedays/{id}',[PlanController::class,'deleteDays'])->name('daysdelete');
    
});