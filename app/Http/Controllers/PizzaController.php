<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    //Consequence: This require auth middleware to all route
    // public function __construct(){
    //     $this->middleware('auth');
    // }

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

    public function store(){
        // Use request(fieldName) to get the fata from input
        $pizza = new Pizza(); //Creating a new instence of Pizza Model

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');

        $pizza->save(); //To save the data in DB

        //With pass a message in case the redirect works after submit the form
        return redirect('/')->with('successMsg', 'Thanks for your order');
    }

    public function destroy($id){
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/pizzas');
    }
}
