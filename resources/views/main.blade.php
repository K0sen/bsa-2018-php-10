@extends('layouts.layout')

@section('title', 'Currency market')

@section('content')
    <div class="container">
        <h1 class="text-center">Currency market</h1>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    </div>
@endsection
