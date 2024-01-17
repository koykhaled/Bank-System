@extends('layouts.app')
@section('topics')
    <div class="details">
        <div class="topic__header">
            <div>
                <h2>Customer</h2>
                <p> {{ count($customers) }} Customer</p>
            </div>
        </div>
        <div class="topics">
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
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->balance }}</td>
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
