@extends('layouts.pokemon')

@section('title', 'Top')

@section('content')
    <form action="{{ url('/lookingForPokemon/conf/'. $lookingForPokemonId) }}" method="post" autocomplete="off">
        {{ csrf_field() }}
        <div id="app">
            <select-pokemon
                v-bind:pokemon="{{$pokemon}}"
                v-bind:pokemon-moves="{{$pokemonMoves}}"
                v-bind:props-pokemon-id="{{ (old('pokemon_id')) ? old('pokemon_id') : $initData->pokemon_id}}"
                v-bind:props-pokemon-name="'{{ (old('pokemon_name')) ? old('pokemon_name') : $initData->getPokemon->pokemon_name}}'"
            >
            </select-pokemon>
        </div>
        <div>
            <input type="submit" name="submit" value="確定">
        </div>
    </form>
@endsection