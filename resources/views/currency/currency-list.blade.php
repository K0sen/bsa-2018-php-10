@extends('layouts.layout')

@section('title', 'Currency market')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1 class="text-center">Currency market (Queue Homework)</h1>
        @if (count($currencies) > 0)
            @include('currency.pieces.currency-table', ['currencies' => $currencies])
        @else
            <strong>No currencies</strong>
        @endif
    </div>
</div>
@endsection
