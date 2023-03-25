@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
    <h1>Create a New Pizza</h1>
        
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
        <select name="base" id="type">
            <option value="cheesy crust">Cheesy Crust</option>
            <option value="garlic crust">Garlic Crust</option>
            <option value="thin & crispy">Thin Crispy</option>
            <option value="thick">Thick</option>
        </select><br>
        <fieldset>
            <h3><label>Extra Poppings: </label></h3>
            <div class="check-list">
                <div><input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br></div>
                <div><input type="checkbox" name="toppings[]" value="peppers">Peppers<br></div>
                <div><input type="checkbox" name="toppings[]" value="garlic">Garlic<br></div>
                <div><input type="checkbox" name="toppings[]" value="olives">Olives<br></div>
            </div>
        </fieldset>
        <br>
        <input class="" type="submit" value="Order Pizza">
    </form>
</div>

@endsection
    