@extends('layouts.pokemon')

@section('title', 'Top')

@section('content')
    <form action="{{ url('/lookingForPokemon/conf') }}" method="post" autocomplete="off">
        {{ csrf_field() }}
        <div id="app">
            <select-pokemon v-bind:pokemon_moves="{{$pokemonMoves}}" v-bind:pokemon="{{$pokemon}}"></select-pokemon>
        </div>
        <div>
            <input type="submit" name="submit" value="確定">
        </div>
    </form>
@endsection