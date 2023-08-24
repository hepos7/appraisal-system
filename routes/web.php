<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AppraisalController;

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

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/employees', [EmployeeController::class, 'index'])->name('employees');


Route::get('/employees/appraisal/{id}', [AppraisalController::class, 'index'])->name('appraisal');

Route::get('/employees/appraisal/new/{id}', [AppraisalController::class, 'create'])->name('appraisal.create');
Route::post('/employees/appraisal/{id}', [AppraisalController::class, 'store'])->name('appraisal.store');
