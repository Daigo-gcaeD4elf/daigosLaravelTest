@extends('layouts.pokemon')

@section('title', 'Top')

@section('content')
    <form action="{{ url('/lookingForPokemon/conf/'. $lookingForPokemonId) }}" method="post" autocomplete="off">
        {{ csrf_field() }}
        <div id="app">
            <select-pokemon
                v-bind:pokemon="{{$pokemon}}"
                v-bind:pokemon-moves="{{$pokemonMoves}}"
                v-bind:props-pokemon-id="{{ MyFunc::getPropData(old('pokemon_id'), !empty($initData->pokemon_id) ? $initData->pokemon_id : 0) }}"
                v-bind:props-pokemon-name="'{{ MyFunc::getPropData(old('pokemon_name'), !empty($initData->getPokemon->pokemon_name) ? $initData->getPokemon->pokemon_name : '') }}'"
            >
            </select-pokemon>
        </div>
        <div>
            <input type="submit" name="submit" value="確定">
        </div>
    </form>
@endsection