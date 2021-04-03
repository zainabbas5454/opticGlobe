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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('Plans',[PlanController::class,'store'])->name('plan.store')->middleware('auth');

Route::get('MyPlan',[PlanController::class,'MyPlan'])->name('myplan')->middleware('auth');

Route::get('PlanDetail',[PlanController::class,'ViewPlanDetail'])->name('ViewPlanDetail')->middleware('auth');

Route::get('PlanDetail/{id}',[PlanController::class,'PlanDetail'])->name('PlanDetail');

Route::get('ViewDaysDetail/{pid}',[PlanController::class,'ViewDaysDetail'])->name('ViewDaysDetail');

Route::post('DaysDetail',[PlanController::class,'DaysDetail'])->name('DaysDetail');

Route::get('delete/{id}',[PlanController::class,'delete'])->name('delete');

Route::get('DaysDetail',[PlanController::class,'ShowDaysDetail'])->name('showdetail');

Route::get('deletedays/{id}',[PlanController::class,'deleteDays'])->name('daysdelete');
