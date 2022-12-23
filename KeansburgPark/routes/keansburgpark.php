<?php
use Illuminate\Support\Facades\Route;

Route::prefix('/information')->group(function() {
    Route::prefix('/news')->group(function() {
        Route::get('/',[App\Http\Controllers\KeansburgPark\KeansburgParkController::class,'showNews'])->name('news-shownews');
        Route::get('/{href}.html',[App\Http\Controllers\KeansburgPark\KeansburgParkController::class,'showChilren'])->name('news-showChilren');
    });
    Route::prefix('/event')->group(function() {
        Route::get('/',[App\Http\Controllers\KeansburgPark\KeansburgParkController::class,'showEvent'])->name('information-showEvent');
        Route::get('/{href}.html',[App\Http\Controllers\KeansburgPark\KeansburgParkController::class,'showEventChil'])->name('information-showEventChil');
    });
    Route::get('/history',[App\Http\Controllers\KeansburgPark\KeansburgParkController::class,'showHistory'])->name('information-showhistory');
    Route::get('/accommodations',[App\Http\Controllers\KeansburgPark\KeansburgParkController::class,'showAccommodations'])->name('information-showAccommodations');
    Route::get('/operatingcalendar',function(){
        return redirect(asset("image/Keansburg_Schedule_2022_v1.pdf"));
    })->name("information-operating");
    
    Route::get('/parkmap',function(){
        return redirect(asset("image/Keansburg-Map-2014.pdf"));
    })->name("information-parkmap");
    Route::get('/{href}',[App\Http\Controllers\KeansburgPark\KeansburgParkController::class,'showInfor'])->name('information-showInfor');
});

Route::prefix('/food')->group(function() {
    Route::get('/',[App\Http\Controllers\KeansburgPark\KeansburgParkController::class,'showFood'])->name('food-showfood');
    Route::get('/{href}.html',[App\Http\Controllers\KeansburgPark\KeansburgParkController::class,'showFoodChil'])->name('food-showfoodchil');
});

Route::prefix('/group-party')->group(function() {
    Route::get('/{href}',[App\Http\Controllers\KeansburgPark\KeansburgParkController::class,'showGp'])->name('group-showGp');
});