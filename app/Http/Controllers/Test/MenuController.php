<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\PokemonType;

class MenuController extends Controller
{
    public function index()
    {
        $pokemonTypes = PokemonType::all();
        return view('test/menu', ['pokemonTypes' => $pokemonTypes]);
    }
}
