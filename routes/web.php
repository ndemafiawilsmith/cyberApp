<?php

use App\Livewire\Test;
use Illuminate\Support\Facades\Route;

Route::get('/home', Test::class)->name('test');
Route::get('/', function () {
    return view('welcome');
});
