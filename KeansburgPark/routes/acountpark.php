<?php
use Illuminate\Support\Facades\Route;

Route::prefix('/account')->group(function() {
    Route::get('/',[App\Http\Controllers\KeansburgPark\UserController::class,'showAcount'])->name('account-show');
    Route::post('/update-info',[App\Http\Controllers\KeansburgPark\UserController::class,'Updateinfo'])->name('account-update');
    Route::any('/my-order',[App\Http\Controllers\KeansburgPark\UserController::class,'showmyorder'])->name('account-myorder');
    Route::get('/orderdetail-{id}',[App\Http\Controllers\KeansburgPark\UserController::class,'showmyorderdetail'])->name('account-myorderdetail');
    Route::get('/change-pass',[App\Http\Controllers\KeansburgPark\UserController::class,'showchange'])->name('account-changepass');
    Route::post('/change',[App\Http\Controllers\KeansburgPark\UserController::class,'changepass'])->name('account-changepassword');
});