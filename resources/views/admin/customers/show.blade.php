@extends('layouts.app')
@section('title')
{{ $customer->name }} | Customers
@endsection
@section('topics')
<div class="cardBox">
    <div class="card">
        <div>
            <div class="numbers">{{ $customer->balance }} $</div>
            <div class="cardName">{{ $customer->name }}</div>
        </div>
        <div class="iconBox">
            <ion-icon name="person-outline"></ion-icon>
        </div>
    </div>
    <div class="card">
        <div>
            @if (count($customer->transfares) == 0)
            <div class="numbers">{{ count($customer->transfares) }}</div>
            <div class="cardName">No Transictions</div>
            @elseif(count($customer->transfares) > 1)
            <div class="numbers">{{ count($customer->transfares) }}</div>
            <div class="cardName">Transictions</div>
            @else
            <div class="numbers">{{ count($customer->transfares) }}</div>
            <div class="cardName">Transciction</div>
            @endif
        </div>
        <div class="iconBox">
            <ion-icon name="cash-outline"></ion-icon>
        </div>
    </div>
</div>
<div class="details">
    <div class="topic__header">
        <div>
            <h2>Transictions History</h2>
        </div>
        <a class="btn btn--main" href="{{ route('customers.transfares.create', $customer->id) }}">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                <title>add</title>
                <path
                    d="M16.943 0.943h-1.885v14.115h-14.115v1.885h14.115v14.115h1.885v-14.115h14.115v-1.885h-14.115v-14.115z">
                </path>
            </svg>
            Tranfare To
        </a>
    </div>

    <div class="topics">
        <div class="cardHeader">
            @if (count($customer->transfares) > 0)
            <Table>
                <thead>
                    <tr>
                        <td>from</td>
                        <td>to</td>
                        <td>transfared_at</td>
                        <td>amount</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customer->transfares as $transiction)
                    <tr>
                        <td>
                            {{ $transiction->from_customer->name }}
                        </td>
                        <td>
                            {{ $transiction->to_customer->name }}
                        </td>
                        <td>
                            {{ $transiction->transfared_at }}
                        </td>
                        <td>{{ $transiction->amount }} $</td>
                    </tr>
                    @endforeach
                </tbody>
            </Table>
            @else
            <p class="empty">There is No Transictions Yet</p>
            @endif
        </div>
    </div>
    <x-notify::notify />
</div>

@endsection