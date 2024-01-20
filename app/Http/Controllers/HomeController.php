<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Transfare;

class HomeController extends Controller
{
    //

    public function index()
    {
        $customers = Customer::count();

        $transictions_count = Transfare::count();

        $transictions = Transfare::with(['from_customer', 'to_customer'])->limit(5)->orderBy('transfared_at', 'desc')->get();

        return view('admin.index', compact('customers', 'transictions_count', 'transictions'));
    }

}