<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/inscription', function () {
    return view('student-registration');
})->name('public.student.registration');
