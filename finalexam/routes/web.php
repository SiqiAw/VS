<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/insertCategory', function () {
    return view('insertCategory');
});

Route::get('/showIdolCategory', function () {
    return view('showIdolCategory');
});

Route::get('/insertIdol', function () {
    return view('insertIdol');
});

Route::get('/showIdol', function () {
    return view('showIdol');
});

Route::get('/insertOrder', function () {
    return view('insertOrder');
});

Route::get('/insertCourier', function () {
    return view('insertCourier');
});

Route::post('/insertCategory/store', [App\Http\Controllers\IdolCategoryController::class, 'store'])->name('addCategory');

Route::get('/showIdolCategory', [App\Http\Controllers\IdolCategoryController::class, 'show'])->name('showCategory');

Route::get('/deleteCategory/{id}', [App\Http\Controllers\IdolCategoryController::class, 'delete'])->name('deleteCategory');


Route::post('/insertIdol/store', [App\Http\Controllers\IdolController::class, 'store'])->name('addIdol');

Route::get('/showIdol', [App\Http\Controllers\IdolController::class, 'show'])->name('showIdol');

Route::get('/insertIdol', [App\Http\Controllers\IdolController::class, 'create'])->name('insertIdol');

Route::get('/editIdol/{id}', [App\Http\Controllers\IdolController::class, 'edit'])->name('editIdol');

Route::post('/updateIdol', [App\Http\Controllers\IdolController::class, 'update'])->name('updateIdol');

Route::get('/deleteIdol/{id}', [App\Http\Controllers\IdolController::class, 'delete'])->name('deleteIdol');

Route::post('/searchIdol', [App\Http\Controllers\IdolController::class, 'search'])->name('searchIdol');


Route::post('/insertCourier/store', [App\Http\Controllers\AWBController::class, 'store'])->name('addCourier');

Route::get('/showCourier', [App\Http\Controllers\AWBController::class, 'show'])->name('showCourier');

Route::post('/insertOrder/store', [App\Http\Controllers\OrderController::class, 'store'])->name('addOrder');

Route::get('/showOrder', [App\Http\Controllers\OrderController::class, 'show'])->name('showOrder');

Route::get('/insertOrder', [App\Http\Controllers\OrderController::class, 'create'])->name('insertOrder');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
