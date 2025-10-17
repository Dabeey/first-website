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
Route::prefix('/portfolio')->group(function() {
    Route::get('/company', function(){
        return view('company');
    });
    
    Route::get('/organization', function(){
        return view('organization');
    });

});

