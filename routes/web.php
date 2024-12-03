<?php

use Illuminate\Support\Facades\Route;


Route::middleware(['auth'])->group(function () {
    Route::get('/', \App\Livewire\Dashboard::class)->name('dashboard');
    Route::get('user', \App\Livewire\User\Index::class)->name('user');
    Route::get('product', \App\Livewire\Product\Index::class)->name('product');
    Route::get('product/add', \App\Livewire\Product\Add::class)->name('product.add');
    Route::get('category', \App\Livewire\Category\Index::class)->name('category');
    Route::get('supplier', \App\Livewire\Supplier\Index::class)->name('supplier');
});
Route::get('login', \App\Livewire\Login::class)->name('login')->middleware('guest');
Route::get('logout', \App\Http\Controllers\ControllerLogout::class)->name('logout');
