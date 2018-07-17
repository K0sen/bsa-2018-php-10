@extends('layouts.layout')

@section('title', 'Currency market')

@section('content')
<div class="container">
    <div>
        <h1 class="text-center">Currency market (Queue Homework)</h1>
        @if (count($currencies) > 0)
            @include('currency.pieces.currency-table', ['currencies' => $currencies])
        @else
            <p class="text-center">No currencies</p>
        @endif
    </div>
</div>
@endsection
