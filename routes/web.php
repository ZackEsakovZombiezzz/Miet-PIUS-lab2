<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/customers', [CustomerController::class, 'getAllCustomers']);
Route::get('/customers/{id}', [CustomerController::class, 'show']);
