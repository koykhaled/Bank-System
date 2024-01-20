@extends('layouts.app')
@section('title')
Customers
@endsection
@section('topics')
<div class="details">
    <div class="topic__header">
        <div>
            <h2>Customers</h2>
            <p> {{ count($customers) }}
                @if(count($customers) > 1)
                Customers
                @elseif(count($customers) == 1)
                Customer
                @else
                No Customer
                @endif
            </p>
        </div>
    </div>
    <div class="topics">
        <x-notify::notify />
        <div class="cardHeader">
            @if (count($customers) > 0)
            <Table>
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Balance</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                    <tr>
                        <td><a class="customer-link"
                                href="{{ route('customers.show', $customer->id) }}">{{ $customer->name }}</td>
                        <td>{{ $customer->balance }} $</td>
                    </tr>
                    @endforeach
                </tbody>
            </Table>
            @else
            <p class="empty">There is No customers Yet</p>
            @endif
        </div>
    </div>
</div>
@endsection