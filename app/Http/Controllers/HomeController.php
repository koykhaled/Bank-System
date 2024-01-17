<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {
        $customers = Customer::count();

        return view('admin.index', compact('customers'));
    }
}