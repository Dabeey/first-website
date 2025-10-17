<?php

use Illuminate\Support\Facades\Route;

// Get route example
Route::get('/', function () {
    return view('home');
});


// Route parameter
Route::get('/portfolio/{firstname}/{lastname}', function ($firstname, $lastname) {
    return $firstname . ' ' . $lastname;
});


// Named route
Route::get('/test', function() {
    return 'This is a test!';
})->name('testPage');


//  grouped routes
Route::get('/portfolio/company', function(){
    
})->name('portfolioPage');