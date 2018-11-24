<?php


Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');

Route::resource('purchases', PurchaseController::class);
Route::get('/', function () {
    return redirect('dashboard');
});
