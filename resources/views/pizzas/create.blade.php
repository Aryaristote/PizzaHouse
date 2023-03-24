@extends('layouts.layout')

@section('content')

<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Create new Pizza
        </div>
        
        <form action="/pizzas" method="POST">
            @csrf <!-- Verry important -->
            <label for="name">Your Name: </label>
            <input type="text" name="name" id="name">

            <label for="name">Choose Pizza Type: </label>
            <select name="type" id="type">
                <option value="margeritha">Margeritha</option>
                <option value="hawaiin">Hawaiin</option>
                <option value="beg supreme">Beg Supreme</option>
                <option value="volcano">Volcano</option>
            </select>

            <label for="name">Choose Baze Type: </label>
            <select name="type" id="type">
                <option value="cheesy crust">Cheesy Crust</option>
                <option value="garlic crust">Garlic Crust</option>
                <option value="thin $ crispy">Thin Crispy</option>
                <option value="thick">Thick</option>
            </select>
            <input type="submit" value="Order Pizza">
        </form>
    </div>
</div>

@endsection
    