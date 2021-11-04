<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Pokemon;
use App\Models\PokemonType;
use App\Models\LookingForPokemon;

class MenuController extends Controller
{
    public function index()
    {
        // 登録したポケモン
        $lookingForPokemon1 = LookingForPokemon::select('looking_for_pokemon.id', 'looking_for_pokemon.pokemon_id', 'pokemon.pokemon_name', 'move1.move_name AS move_1', 'move2.move_name AS move_2', 'move3.move_name AS move_3', 'move4.move_name AS move_4')
            ->leftjoin('pokemon AS pokemon', 'looking_for_pokemon.pokemon_id', '=', 'pokemon.id')
            ->leftjoin('pokemon_moves AS move1', 'looking_for_pokemon.move_1_id', '=', 'move1.id')
            ->leftjoin('pokemon_moves AS move2', 'looking_for_pokemon.move_2_id', '=', 'move2.id')
            ->leftjoin('pokemon_moves AS move3', 'looking_for_pokemon.move_3_id', '=', 'move3.id')
            ->leftjoin('pokemon_moves AS move4', 'looking_for_pokemon.move_4_id', '=', 'move4.id')
            ->paginate(10);
        ;


        // $lookingForPokemon2 = LookingForPokemon::all();

        // $pokemonTypes = PokemonType::all();
        $pokemon = Pokemon::select('pokemon_name', 'pokemon_type_1.type_name AS type_1', 'pokemon_type_2.type_name AS type_2')
            ->leftJoin('pokemon_types AS pokemon_type_1', 'pokemon.type_1', '=', 'pokemon_type_1.type_code')
            ->leftJoin('pokemon_types AS pokemon_type_2', 'pokemon.type_2', '=', 'pokemon_type_2.type_code')
            ->get();

        return view('menu', ['pokemon' => $pokemon, 'lookingForPokemonFromYou' => $lookingForPokemon1]);
    }
}
