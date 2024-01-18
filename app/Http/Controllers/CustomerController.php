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
        $customer = Customer::where('id', $id)->first();

        $customers = Customer::where('id', '!=', $id)->get();

        return view('admin.customers.show', compact('customer', 'customers'));
    }

    public function transfare(TransfareRequest $request, $id)
    {
        $from_customer = Customer::where('id', $id)->first();

        $to_customer = Customer::where('id', $request->customer)->first();

        if ($from_customer->balance < $request->amount) {
            notify()->error('Insufficient balance', 'Transfared Failed');
            return to_route('customers.show', $from_customer->id);
        }
        $transfare = $from_customer->transfares()->create([
            'to' => $to_customer->account,
            'amount' => $request->amount
        ]);

        $from_customer->balance -= $request->amount;
        $from_customer->save();


        $to_customer->balance += $request->amount;
        $to_customer->save();



        if ($transfare->exists()) {
            notify()->success('Transfared successfully');
        } else {
            notify()->error('Transfared Failed');
        }
        return to_route('customers.index');
    }
}