<?php
use Illuminate\Support\Facades\Route;

Route::prefix('/information')->group(function() {
    Route::get('/generalinformation',function(){
        return view('information.generalinformation')->with([
            'title'=>'General Information'
        ]);
    })->name('information-generalinformation');
    Route::get('/direction-parking',function() {
        return view('information.directionparking')->with([
            'title'=>'Directions & Parking'
        ]);
    })->name('information-direction-parking');
    Route::prefix('/news')->group(function() {
        Route::get('/',[App\Http\Controllers\KeansburgPark\KeansburgParkController::class,'showNews'])->name('news-shownews');
        Route::get('/{href}.html',[App\Http\Controllers\KeansburgPark\KeansburgParkController::class,'showChilren'])->name('news-showChilren');
    });
    Route::get('/accommodations',[App\Http\Controllers\KeansburgPark\KeansburgParkController::class,'showAccommodations'])->name('news-showAccommodations');
});