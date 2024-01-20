<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransfareRequest;
use App\Models\Customer;
use App\Services\CustomerTransfareService;

class TransfareController extends Controller
{
    //

    protected $customer_transfare_service;

    public function __construct(CustomerTransfareService $customer_transfare_service)
    {
        $this->customer_transfare_service = $customer_transfare_service;
    }

    public function create($id)
    {
        $customer = Customer::with('transfares')->where('id', $id)->first();

        $customers = Customer::where('id', '!=', $id)->get();

        return view('admin.customers.transfare', compact('customer', 'customers'));
    }

    public function transfare(TransfareRequest $request, $id)
    {
        $from_customer = Customer::where('id', $id)->first();

        $to_customer = Customer::where('id', $request->customer)->first();

        if ($to_customer == null) {
            notify()->error('Your Trick Not Work :) please Select from this list', 'Not Allowed');
            return to_route('customers.transfares.create', $from_customer->id);
        }

        $transfare = $this->customer_transfare_service->applyTransfare(
            $from_customer,
            $to_customer,
            $request->amount
        );

        if (!$transfare->exists()) {
            notify()->error('Transfared Failed', 'Something went wrong');
            return to_route('customers.transfares.create');
        }
        notify()->success('Transfared successfully');
        return to_route('customers.index');
    }
}