<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::view('', 'adminlte.home')->name('admin.home');


Route::resource('employees', 'EmployeesController');
Route::resource('departments', 'DepartmentsController');