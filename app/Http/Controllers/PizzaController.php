<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index() {
        
        $pizzas = Pizza::all(); //Get all DB by once
        //$pizzas = Pizza::orderBy('name', 'asc')->get(); //Get sorty by name | add asc or desc, not required
        //$pizzas = Pizza::where('type', 'hawaiin')->get(); // Select based on condition
        //$pizzas = pizza::lastest()->get(); Get the last record

        return view('pizzas.index', [ //pizzas folder then index file
            'pizzas' => $pizzas, //This is for the array above
        ]);
    }

    public function show($id) {
        //Find on pizza using it id in the DB
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show', ['pizza' => $pizza]);  
    }

    public function create(){
        return view('pizzas.create');
    }

    Public function store(){
        // Use request(fieldName) to get the fata from input
        return redirect('/');
    }
}
