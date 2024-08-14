<?php

use App\Livewire\Home;
use App\Livewire\Main;
use App\Livewire\Test;
use Illuminate\Support\Facades\Route;

Route::get('/test', Test::class)->name('test');
Route::get('/scan', Main::class)->name('scan');
Route::get('/', Home::class)->name('home');
