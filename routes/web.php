<?php

use App\Models\Result;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $participants = Result::orderBy('total_addmission', 'desc')->get();
    return view('welcome', ['participants' => $participants]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
