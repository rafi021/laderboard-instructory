<?php

use App\Models\Result;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $participants = Result::orderBy('total_addmission', 'desc')->get()->take(15);
    $top_three = Result::orderBy('total_addmission', 'desc')->get()->take(3);
    // return $top_three;
    return view('welcome', ['participants' => $participants, 'top_three' => $top_three]);
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
