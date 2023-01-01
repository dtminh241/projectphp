<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::prefix('/administrator')->group(function() {
    Route::get('/',[App\Http\Controllers\KeansburgPark\AdministratorPark::class,'showAdmin'])->name('administrator');

    Route::prefix('/permission')->group(function() {
        Route::get('/',[App\Http\Controllers\KeansburgPark\AdministratorPark::class,'showuser'])->name('administrator-permission');
        Route::post('/edit-permission',[App\Http\Controllers\KeansburgPark\AdministratorPark::class,'editPermission'])->name('user-permissionedit');
        Route::post('/delete-user',[App\Http\Controllers\KeansburgPark\AdministratorPark::class,'deleteUser'])->name('user-delete');
        Route::post('/change-pass',function(Request $request) {
            return view("administrator.change-pass")->with([
                'title'=>'Change Pass',
                'id'=>$request->id
            ]);
        })->name('user-changepass');
        Route::post('/pass-changed',[App\Http\Controllers\KeansburgPark\AdministratorPark::class,'changePass'])->name('user-paschanged');
    });

    Route::prefix('/product')->group(function() {
        Route::any('/',[App\Http\Controllers\KeansburgPark\AdministratorPark::class,'showProduct'])->name('administrator-product');
        Route::get('/edit-product-{id}',[App\Http\Controllers\KeansburgPark\AdministratorPark::class,'showProductEdit'])->name('administrator-producte');
        Route::post('/edit-p',[App\Http\Controllers\KeansburgPark\AdministratorPark::class,'editProduct'])->name('product-edit');
        Route::get('/add-product',function() {
            return view("administrator.add-product")->with([
                'title'=>'Add product'
            ]);
        })->name('administrator-productadd');
        Route::post('/add',[App\Http\Controllers\KeansburgPark\AdministratorPark::class,'addProduct'])->name('product-add');
        Route::post('/delete-product',[App\Http\Controllers\KeansburgPark\AdministratorPark::class,'showProductdelete'])->name('administrator-productdelete');
    });

    Route::prefix('/news')->group(function() {
        Route::any('/',[App\Http\Controllers\KeansburgPark\AdministratorPark::class,'showNews'])->name('administrator-news');
        Route::get('/add-news',function() {
            return view("administrator.news-add")->with([
                'title'=>'Add News'
            ]);
        })->name('administrator-newsadd');
        Route::post('/add',[App\Http\Controllers\KeansburgPark\AdministratorPark::class,'addNews'])->name('news-add');
        Route::get('/edit-news-{id}',[App\Http\Controllers\KeansburgPark\AdministratorPark::class,'showNewsEdit'])->name('administrator-newse');
        Route::post('/edit-n',[App\Http\Controllers\KeansburgPark\AdministratorPark::class,'editNews'])->name('news-edit');
        Route::post('/delete-news',[App\Http\Controllers\KeansburgPark\AdministratorPark::class,'showNewsdelete'])->name('administrator-newsdelete');
    });

    Route::prefix('/order')->group(function(){
        Route::any('/',[App\Http\Controllers\KeansburgPark\AdministratorPark::class,'showOrder'])->name('administrator-order');
        Route::get('/edit-order-{id}',[App\Http\Controllers\KeansburgPark\AdministratorPark::class,'showOrderEdit'])->name('administrator-ordere');
        Route::post('/edit-o',[App\Http\Controllers\KeansburgPark\AdministratorPark::class,'editOrder'])->name('order-edit');
        Route::post('/delete-order',[App\Http\Controllers\KeansburgPark\AdministratorPark::class,'showOrderdelete'])->name('administrator-orderdelete');
        Route::prefix('/orderdetail-{id}')->group(function() {
            Route::get('/',[App\Http\Controllers\KeansburgPark\AdministratorPark::class,'showOrderDetail'])->name('administrator-orderdetail');
            Route::get('/edit-{idedit}',[App\Http\Controllers\KeansburgPark\AdministratorPark::class,'showOrderdetailEdit'])->name('administrator-orderdetaile');
            Route::post('/edit-o',[App\Http\Controllers\KeansburgPark\AdministratorPark::class,'editOrderdetail'])->name('orderdetail-edit');
            Route::any('/delete-orderdetail-{idedit}',[App\Http\Controllers\KeansburgPark\AdministratorPark::class,'showOrderdetaildelete'])->name('administrator-orderdetaildelete');
        });
    });
});