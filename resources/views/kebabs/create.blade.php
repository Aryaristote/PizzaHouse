@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
    <h1>Order new Kebabs</h1>
        
    <form action="/kebabs" method="POST">
        @csrf <!-- Verry important -->
        <label for="name">Your Name: </label>
        <input type="text" name="name" id="name">

        <label for="name">Choose Kebab   Type: </label>
        <select name="type" id="type">
            <option value="hot">Hot</option>
            <option value="cold">Cold</option>
        </select>

        <label for="name">Choose a color: </label>
        <select name="color" id="type">
            <option value="green">Green</option>
            <option value="yellow">Yellow</option>
            <option value="black">Black</option>
            <option value="red">Red</option>
        </select><br>
        <br>
        <input class="" type="submit" value="Order new Kebab">
    </form>
</div>

@endsection
    