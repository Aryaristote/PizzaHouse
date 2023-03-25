@extends('layouts.app')

@section('content')

<div class="wrapper pizza-index">
    <h1>Kebabs Orders</h1>
    @foreach($kebabs as $kebab)
    <div class="pizza-item">
        <img src="/img/kebab-icon.png" alt="Pizza Icon">
        <a href="/kebabs/{{ $kebab->id }}">
            <h3>{{ $kebab->name }}</h3>
            <small>State: <b>{{ $kebab->type }}</b> -  Color: <b>{{ $kebab->color }}</b></small>
        </a>
    </div>
    @endforeach
</div>
@endsection
    