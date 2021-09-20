<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\LookingForPokemon;
use App\Models\Pokemon;
use App\Models\PokemonMove;

class LookingForPokemonController extends Controller
{
/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pokemon = Pokemon::select('id', 'pokemon_name', 'pokemon_type_1.type_name AS type_1', 'pokemon_type_2.type_name AS type_2')
            ->leftJoin('pokemon_types AS pokemon_type_1', 'pokemon.type_1', '=', 'pokemon_type_1.type_code')
            ->leftJoin('pokemon_types AS pokemon_type_2', 'pokemon.type_2', '=', 'pokemon_type_2.type_code')
            ->get();

        $pokemonMoves = PokemonMove::select('id', 'move_name')
            ->get();

        return view('lookingForPokemon', ['pokemon' => $pokemon, 'pokemonMoves' => $pokemonMoves]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function conf(Request $request)
    {
        return view('lookingForPokemonConf', ['request' => $request]);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function done(Request $request)
    {
        if (!empty($request->back)) {
            return redirect()->route('register');
        }

        LookingForPokemon::insert([
            'user_id' => Auth::user()->id,
            'pokemon' => $request->pokemon_id,
            'move_1' => $request->move_1_id,
        ]);
        return view('lookingForPokemonDone', ['request' => $request]);
    }
}
