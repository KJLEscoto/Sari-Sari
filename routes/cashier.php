<?php

use Illuminate\Support\Facades\Route;

Route::view('/dashboard', 'cashier.dashboard')->name('cashier.dashboard');
Route::view('/customer', 'cashier.customer')->name('cashier.customer');
Route::view('/sales', 'cashier.sales')->name('cashier.sales');
Route::view('/sales/{id}', 'cashier.show')->name('cashier.sales.show');