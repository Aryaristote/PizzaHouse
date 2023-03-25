<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $pizzas = [
        ['type' => 'Italian', 'base' => 'Cheesy crust', 'price' => 10],
        ['type' => 'Volcano', 'base' => 'Garlic crust', 'price' => 7],
        ['type' => 'Hawaiin', 'base' => 'Thin $ Crispy', 'price' => 23],
        ['type' => 'Banana', 'base' => 'Thin $ Crispy', 'price' => 23],
        ['type' => 'Pepito Leaves', 'base' => 'Thin $ Crispy', 'price' => 23]
    ];
    return view('welcome', ['pizzas' => $pizzas]);
});

use App\Http\Controllers\PizzaController;

//->name('pizza.index') become a variable for the router path

Route::get('/pizzas', [PizzaController::class, 'index'])->name('pizzas.index')->middleware('auth'); //->middleware set only auth user can access the page
Route::get('/pizzas/create', [PizzaController::class, 'create'])->name('pizzas.create'); //Always put this above the {id} route to avoit confusing in url
Route::post('/pizzas', [PizzaController::class, 'store'])->name('pizzas.store'); //New record into the DB
Route::get('/pizzas/{id}', [PizzaController::class, 'show'])->name('pizzas.show')->middleware('auth');
Route::delete('/pizzas/{id}', [PizzaController::class, 'destroy'])->name('pizzas.destroy')->middleware('auth');

Auth::routes([
    'register' => false //This turn off the register route in the whole project, no longer be accessible
    //Switch it to true, if you wanna register new admin
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
