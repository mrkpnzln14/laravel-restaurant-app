<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    // Controllers are there for logic and getting information or editing information

    public function getAllCustomers() {
        // In PHP, in order to initialize a variable, you have to start with a $
        // Get all customers in the customer table
        // [model_name]::[eloquent function]
        $customerData = Customer::all();

        // dd() - do or die function is similar to console.log()
        // dd($customerData);
        return $customerData;
    }

    public function showAllCustomers() {
        // Call getAllCustomers function and return all data and initialize the customerData variable
        // $this-> basically means the function is inside of the same controller
        $customerData = $this->getAllCustomers();

        return view('home', compact('customerData'));
    }
}