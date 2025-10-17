<?php

use Illuminate\Support\Facades\Route;

// Get route example
Route::get('/', function () {
    return view('home');
});

//  POST route example
Route::post('/formsubmitted', function() {
    return 'Form submitted';
});


