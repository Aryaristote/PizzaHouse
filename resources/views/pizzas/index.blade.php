@extends('layouts.app')

@section('content')

<div class="wrapper pizza-index">
    <h1>Pizza Orders</h1>
    @foreach($pizzas as $pizza)
        <div class="pizza-item">
            <img src="/img/pizza-icon.png" alt="Pizza Icon">
            <a href="/pizzas/{{ $pizza->id }}">
                <h3>{{ $pizza->name }}</h3>
                <small>Type: <b>{{ $pizza->type }}</b> -  Base: <b>{{ $pizza->base }}</b></small>
            </a>
        </div>
    @endforeach
</div>
@endsection
    