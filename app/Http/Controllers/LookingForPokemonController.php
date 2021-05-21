<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('lookingForPokemonDone', ['request' => $request]);
    }
}
