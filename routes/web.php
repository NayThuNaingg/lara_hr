<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\EmployeeController;

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



Auth::routes();
Auth::routes(['register' => false]);
Route::middleware(['auth'])->group(function () {
    // Routes that require authentication

    Route::get('/',[PageController::class,'home']);
    Route::resource('employee',EmployeeController::class);
    Route::get('employee/datatable/list',[EmployeeController::class,'list']);

});

