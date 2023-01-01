<?php
use Illuminate\Support\Facades\Route;

Route::get('/counpons',function() {
    return redirect(asset("image/2019-Keansburg-Coupons.pdf"));
})->name("counpons");

Route::prefix('/rides-attractions')->group(function() {
    Route::prefix('/runaway-rapids')->group(function() {
        Route::get('/',[App\Http\Controllers\KeansburgPark\KeansburgParkController::class,'showRR'])->name('rides-showRR');
        Route::get('/{href}',[App\Http\Controllers\KeansburgPark\KeansburgParkController::class,'showRRChil'])->name('rides-showRRChil');
    });
    
});

Route::prefix('/tickets')->group(function() {
    Route::get('/ride-height-ticketing',[App\Http\Controllers\KeansburgPark\KeansburgParkController::class,'showTimeTicket'])->name('rides-showTimeTicket');
    Route::get('/buy-tickets',[App\Http\Controllers\KeansburgPark\KeansburgParkController::class,'showTicket'])->name('rides-showTicket');
});

Route::prefix('/information')->group(function() {
    Route::prefix('/news')->group(function() {
        Route::get('/',[App\Http\Controllers\KeansburgPark\KeansburgParkController::class,'showNews'])->name('news-shownews');
        Route::get('/{href}',[App\Http\Controllers\KeansburgPark\KeansburgParkController::class,'showChilren'])->name('news-showChilren');
    });
    Route::prefix('/event')->group(function() {
        Route::get('/',[App\Http\Controllers\KeansburgPark\KeansburgParkController::class,'showEvent'])->name('information-showEvent');
        Route::get('/{href}',[App\Http\Controllers\KeansburgPark\KeansburgParkController::class,'showEventChil'])->name('information-showEventChil');
    });
    Route::get('/history',[App\Http\Controllers\KeansburgPark\KeansburgParkController::class,'showHistory'])->name('information-showhistory');
    Route::get('/accommodations',[App\Http\Controllers\KeansburgPark\KeansburgParkController::class,'showAccommodations'])->name('information-showAccommodations');
    Route::get('/operatingcalendar',function(){
        return redirect(asset("image/Keansburg_Schedule_2022_v1.pdf"));
    })->name("information-operating");
    
    Route::get('/parkmap',function(){
        return redirect(asset("image/Keansburg-Map-2014.pdf"));
    })->name("information-parkmap");
});

Route::prefix('/food')->group(function() {
    Route::get('/',[App\Http\Controllers\KeansburgPark\KeansburgParkController::class,'showFood'])->name('food-showfood');
    Route::get('/{href}',[App\Http\Controllers\KeansburgPark\KeansburgParkController::class,'showFoodChil'])->name('food-showfoodchil');
});
Route::prefix('/shop')->group(function() {
    Route::get('/',[App\Http\Controllers\KeansburgPark\KeansburgParkController::class,'showShop'])->name('shop-showshop');
    Route::any('/add-cart',[App\Http\Controllers\KeansburgPark\KeansburgParkController::class,'showAddCart'])->name('shop-addcart');
    Route::get('/{href}',[App\Http\Controllers\KeansburgPark\KeansburgParkController::class,'showBuyticket'])->name('shop-showbuyticket');
    
});

Route::prefix('/cart')->group(function() {
    Route::get('/',[App\Http\Controllers\KeansburgPark\KeansburgParkController::class,'showcart'])->name('cart-showcart');
    Route::get('/edit-cart',[App\Http\Controllers\KeansburgPark\KeansburgParkController::class,'showeditcart'])->name('cart-editcart');
    Route::get('/delete-cart-{id}',[App\Http\Controllers\KeansburgPark\KeansburgParkController::class,'showdeletecart'])->name('cart-deletecart');
    Route::get('/pay-cart',[App\Http\Controllers\KeansburgPark\KeansburgParkController::class,'showpaycart'])->name('cart-paycart');
    Route::get('/cancel-cart',[App\Http\Controllers\KeansburgPark\KeansburgParkController::class,'showcancelcart'])->name('cart-cancelcart');
});

Route::get('/{href}',[App\Http\Controllers\KeansburgPark\KeansburgParkController::class,'show'])->name('show');