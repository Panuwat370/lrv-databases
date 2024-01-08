<?php

use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\NewEmployees;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('employees',[EmployeesController::class, 'index']);
// Route::resource('employee', EmployeeController::class) ->only(['index']);


Route::get('newemp',[NewEmployees::class, 'index']);