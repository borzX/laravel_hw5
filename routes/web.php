<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/helloworld', function () {
    return view('welcome');
});


Route::get('/x', function () {
    return view('employees');
});


Route::get('/', function () {
    return view('home');
});

Route::get('/contacts', function () {
    return view('contacts', ['adress'=>'Spb', 'post_code'=>'123000', 'email'=>'vasiliy@mail.ru', 'phone'=>'+7(123)999-88-77']);
});

Route::get('get-employee-data', [EmployeeController::class, 'index']);
Route::post('store-form', [EmployeeController::class, 'store']);
Route::put('users/{id}', [EmployeeController::class, 'update']);
