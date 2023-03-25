@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content home">
        <img src="/img/pizza.png" alt="Pizza House Loga">
        <div class="title m-b-md">
            <small>Goma's Best Pizzas</small>
        </div>
        <div class="links">
            @foreach($pizzas as $pizza)
                <a href="">
                    {{ $loop->index }} {{ $pizza['type'] }}
                </a>
            @endforeach
        </div>
        <!-- This displaye only after form submit redirection  -->
        <small>{{ session('successMsg') }}</small>
        <div class="welcom-btn">
            <a href="{{ route('pizzas.create') }}">Order A Pizza</a>
            <a href="{{ route('pizzas.store') }}">See All Pizzas</a>
        </div><br><br>
    </div>
</div>
@endsection