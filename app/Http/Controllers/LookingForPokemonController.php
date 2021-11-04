<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
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
    public function index($lookingForPokemonId = 'new')
    {
        Log::debug('=============== ポケモン情報取得 ===================');
        $pokemon = Pokemon::select('id', 'pokemon_name', 'pokemon_type_1.type_name AS type_1', 'pokemon_type_2.type_name AS type_2')
        ->leftJoin('pokemon_types AS pokemon_type_1', 'pokemon.type_1', '=', 'pokemon_type_1.type_code')
        ->leftJoin('pokemon_types AS pokemon_type_2', 'pokemon.type_2', '=', 'pokemon_type_2.type_code')
        ->get();

        Log::debug('=============== 技情報取得 ===================');
        $pokemonMoves = PokemonMove::select('id', 'move_name')
        ->get();

        Log::debug('=============== 初期値情報取得 ===================');
        // var_dump($initData);
        if (empty($initData)) {
            $initData = LookingForPokemon::select('id', 'user_id', 'pokemon AS pokemon_id', 'move_1 AS move_1_id ', 'move_2', 'move_3', 'move_4')
            ->find($lookingForPokemonId);
        }

        Log::debug('=============== lookingForPokemon 表示 ===================');
        return view('lookingForPokemon/lookingForPokemon', ['lookingForPokemonId' => $lookingForPokemonId, 'initData' => $initData, 'pokemon' => $pokemon, 'pokemonMoves' => $pokemonMoves]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function conf(Request $request, $lookingForPokemonId = 'new')
    {
        Log::debug('=============== lookingForPokemonConf 表示 ===================');
        Log::debug('ほしいポケモン：'. $request['pokemon_id']);
        Log::debug('==============================================================');

        return view('lookingForPokemon/lookingForPokemonConf', ['lookingForPokemonId' => $lookingForPokemonId, 'request' => $request]);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function done(Request $request, $lookingForPokemonId = 'new')
    {
        if (!empty($request->back)) {
            Log::debug('=============== 「いやまてよ」がクリックされました ===================');
            return redirect()->route('lookingForPokemonTop', [
                'lookingForPokemonId' => $lookingForPokemonId,
            ])->withInput();
        }

        Log::debug('=============== 欲しいポケモンを登録します ===================');
        Log::debug('ほしいポケモン：'. $request['pokemon_id']);
        Log::debug('==============================================================');

        // 新規登録 or 更新
        $table = new LookingForPokemon;
        if  ($lookingForPokemonId === 'new') {
            $table->create([
                'user_id' => Auth::user()->id,
                'pokemon' => $request->pokemon_id,
                'move_1' => $request->move_1_id,
            ]);
        } else {
            $table->where('id', '=', $lookingForPokemonId)->update([
                'pokemon' => $request->pokemon_id,
                'move_1' => $request->move_1_id,
            ]);
        }
        return view('lookingForPokemon/lookingForPokemonDone', ['lookingForPokemonId' => $lookingForPokemonId, 'request' => $request]);
    }
}
