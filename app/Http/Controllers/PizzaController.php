<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;


class PizzaController extends Controller
{
    public function index() {
        
        $pizzas = Pizza::all();
        // $pizzas = Pizza::orderBy('name')->get();

        return view('pizzas.index', [
            'pizzas' => $pizzas
            ]);
    }

    public function show($id) {
        return view('pizzas.show', ['id' => $id]);
    }

    public function create() {
        return view('pizzas.create');
    }
}
