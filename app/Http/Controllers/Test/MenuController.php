<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Pokemon;
use App\Models\PokemonType;

class MenuController extends Controller
{
    public function index()
    {
        // $pokemonTypes = PokemonType::all();
        $pokemon = Pokemon::select('pokemon_name', 'pokemon_type_1.type_name AS type_1', 'pokemon_type_2.type_name AS type_2')
            ->leftJoin('pokemon_types AS pokemon_type_1', 'pokemon.type_1', '=', 'pokemon_type_1.type_code')
            ->leftJoin('pokemon_types AS pokemon_type_2', 'pokemon.type_2', '=', 'pokemon_type_2.type_code')
            ->get();

        return view('test/menu', ['pokemon' => $pokemon]);
    }
}
