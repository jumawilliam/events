<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\AllProducts;
//use Livewire\Volt\Volt;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', AllProducts::class);
//Route::volt('/todos','todos.index');
