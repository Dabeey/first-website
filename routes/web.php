<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Get route example
Route::get('/', function () {
    return view('home');
});

//  POST route example
Route::post('/formsubmitted', function(Request $request) {
    
    $request->validate([
        'fullname' => 'required | min:3 | max:30',
        'email' => 'required | min:3 | max:30 | email',
    ]);
    
    $fullname = $request->input('fullname');
    $email = $request->input('email');

    return "Welcome $fullname!. It is nice to have you. Gift card is sent to $email!";

})->name('formsubmitted');


