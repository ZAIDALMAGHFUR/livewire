<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/counter', App\Livewire\Counter::class);
Route::get('/action-plan', App\Livewire\ActionPlan::class)->name('action-plan');
