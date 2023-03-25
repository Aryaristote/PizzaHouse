<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kebab;

class KebabController extends Controller
{
    public function index(){
        $kebabs = Kebab::all();

        return view('kebabs.index', [
            'kebabs' => $kebabs
        ]);
    }

    public function create(){
        return view('kebabs.create');
    }

    public function store(){
        $kebab = new Kebab();

        $kebab->name = request('name');
        $kebab->type = request('type');
        $kebab->color = request('color');

        $kebab->save();

        return redirect('/')->with('successMsg', 'Thanks for your order');
    }

    public function show($id){
        $kebab = Kebab::findOrFail($id);
        return view('kebabs.show', ['kebab' => $kebab]);  
    }

    public function destroy($id){
        $pizza = Kebab::findOrFail($id);
        $pizza->delete();

        return redirect('/kebabs');
    }
}
