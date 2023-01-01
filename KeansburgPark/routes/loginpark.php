<?php
use Illuminate\Support\Facades\Route;

Route::get('/loginaccount',function() {
    return view("login.login")->with([
        'title'=>'Login Account'
        
    ]);
})->name("login-account");

Route::post('/createuser',[App\Http\Controllers\KeansburgPark\LoginController::class,'createUser'])->name('createUser');
Route::post('/checklogin',[App\Http\Controllers\KeansburgPark\LoginController::class,'checkLogin'])->name('checkLogin');
Route::get('/logout-account',[App\Http\Controllers\KeansburgPark\LoginController::class,'logoutAccount'])->name('logout-account');
Route::get('/forget-pass',function() {
    return view('login.forgetpass')->with([
        'title'=>'Forget Pass'
    ]);
})->name('account-foget');
Route::post('/check-code',[App\Http\Controllers\KeansburgPark\LoginController::class,'createcode'])->name('account-createcode');
Route::post('/chage-pas-code',[App\Http\Controllers\KeansburgPark\LoginController::class,'checkcode'])->name('account-checkcode');
Route::post('/change-pass-forget',[App\Http\Controllers\KeansburgPark\LoginController::class,'changepassforget'])->name('account-changepassforget');
