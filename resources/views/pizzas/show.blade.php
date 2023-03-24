@extends('layouts.layout')

@section('content')

<div class="wrapper pizza-details">
    <h1>Orded by: {{ $pizza->name }}</h1>
    <p>Type: {{ $pizza->type }}</p>
    <p>Type: {{ $pizza->base }}</p>
    <div>
        <a href="/pizzas">Back to All Pizzas</a>
    </div>
</div>

@endsection
    