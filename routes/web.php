<?php
// It's like adding a library into your code
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;


// How do we call the controller from the view?
// Route is calling controllers or views based on the subdirectory

// If users accessed the '/' subdirectory, redirect them to '/home'
Route::redirect('/', '/home');

Route::get('/home', [CustomerController::class, 'showAllCustomers']);