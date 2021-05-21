<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\LookingForPokemon;

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
        return view('lookingForPokemon');
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
            return view('lookingForPokemon');
        }

        LookingForPokemon::insert([
            'user_id' => Auth::user()->id,
            'pokemon' => $request->pokemon,
            'move_1' => $request->move_1,
        ]);
        return view('lookingForPokemonDone', ['request' => $request]);
    }
}
