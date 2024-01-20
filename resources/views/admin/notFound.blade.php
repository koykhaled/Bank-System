@extends('layouts.app')
@section('index')
<div class="details">
    <div class="topics">
        <div class="cardHeader">
            <p class="empty">
                Page Not Found
                <a href="{{route('customers.index')}}">Go Back</a>
            </p>
        </div>
    </div>
</div>
@endsection