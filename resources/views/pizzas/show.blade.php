@extends('layouts.layout')

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
    <form action="/pizzas/{{ $pizza->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button>Complete Order</button>
    </form>

    <div>
        <a href="/pizzas">Back to All Pizzas</a>
    </div>
</div>

@endsection
    