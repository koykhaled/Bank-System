<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransfareRequest;
use App\Models\Customer;
use App\Models\Transfare;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;

class CustomerController extends Controller
{
    //

    public function index()
    {
        $customers = Customer::all();

        return view('admin.customers.index', compact('customers'));
    }

    public function show($id)
    {
        $customer = Customer::with('transfares')->where('id', $id)->first();

        $customers = Customer::where('id', '!=', $id)->get();


        return view('admin.customers.show', compact('customer'));
    }


}