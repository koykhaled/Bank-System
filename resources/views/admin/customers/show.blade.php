@extends('layouts.app')
@section('create_topics')
    <div class="cardBox">
        <div class="card">
            <div>
                <div class="cardName">{{ $customer->name }}</div>
                <div class="numbers">{{ $customer->balance }} $</div>
            </div>
            <div class="iconBox">
                <ion-icon name="person-outline"></ion-icon>
            </div>
        </div>
    </div>
    <div class="layout__box">
        <div class="layout__boxHeader">
            <x-notify::notify />
            <div class="layout__boxTitle">
                <a href="{{ route('customers.index') }}">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                        viewBox="0 0 32 32">
                        <title>arrow-left</title>
                        <path
                            d="M13.723 2.286l-13.723 13.714 13.719 13.714 1.616-1.611-10.96-10.96h27.625v-2.286h-27.625l10.965-10.965-1.616-1.607z">
                        </path>
                    </svg>
                </a>

                <h3>{{ $customer->name }}</h3>
                <h3>{{ $customer->balance }}$</h3>
            </div>
        </div>
        <div class="layout__body">
            <form class="form" action="{{ route('customers.transfares', $customer->id) }}" method="POST">
                @csrf

                <div class="form__group">
                    <select id="cateories" name="customer">

                        @foreach ($customers as $customer)
                            <option value="{{ $customer->id }}">
                                {{ $customer->name }}
                            </option>
                        @endforeach

                    </select>
                </div>

                <div class="form__group">
                    <label for="to_customer">Amount</label>
                    <input required type="number" name="amount" />
                </div>

                <div class="form__action">
                    <a class="btn btn--dark" href="{{ route('customers.index') }}">Cancel</a>
                    <button class="btn btn--main" type="submit">Send</button>
                </div>
            </form>
        </div>
    </div>
@endsection
