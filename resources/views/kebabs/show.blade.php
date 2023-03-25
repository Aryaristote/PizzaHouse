@extends('layouts.app')

@section('content')

<div class="wrapper pizza-details">
    <h1>Orded by: {{ $kebab->name }}</h1>
    <p>Type: {{ $kebab->type }}</p>
    <p>Color: {{ $kebab->color }}</p>

    <!-- Code for deleting a record in DB  -->
    <div class="details-btn">
        <div class="back">
            <a href="/kebabs">Back to All kebabs</a>
        </div>
        <form action="{{ route('kebabs.destroy', $kebab->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn">Complete Order</button>
        </form>
    </div>
</div>

@endsection
    