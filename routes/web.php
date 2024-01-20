<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransfareController;
use Illuminate\Support\Facades\Route;




Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'customers'], function () {
    Route::get('/', [CustomerController::class, 'index'])->name('customers.index');
    Route::get('/{id}', [CustomerController::class, 'show'])->name('customers.show');
    Route::get('/{id}/transfares', [TransfareController::class, 'create'])->name('customers.transfares.create');
    Route::post('/{id}/transfares', [TransfareController::class, 'transfare'])->name('customers.transfares');
});

Route::get('/{pathMatch}', function () {
    return view('admin.notFound');
})->where('pathMatch', ".*");