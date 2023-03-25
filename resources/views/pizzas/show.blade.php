@extends('layouts.app')

@section('content')

<div class="wrapper pizza-details">
    <h1>Orded by: {{ $pizza->name }}</h1>
    <p>Type: {{ $pizza->type }}</p>
    <p>Type: {{ $pizza->base }}</p>
    <ul>
        @foreach($pizza->toppings as $topping)
            <li>{{ $topping }}</li>
        @endforeach
    </ul>

    <!-- Code for deleting a record in DB  -->
    <div class="details-btn">
        <div class="back">
            <a href="/pizzas">Back to All Pizzas</a>
        </div>
        <form action="{{ route('pizzas.destroy', $pizza->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn">Complete Order</button>
        </form>
    </div>
</div>

@endsection
    