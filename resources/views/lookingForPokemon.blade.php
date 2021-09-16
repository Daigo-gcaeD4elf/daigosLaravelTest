@extends('layouts.pokemon')

@section('title', 'Top')

@section('content')
    <form action="{{ url('/lookingForPokemon/conf') }}" method="post" autocomplete="off">
        {{ csrf_field() }}
        <div>
            わざ<input type="text" name="move_1" value="0">
        </div>
        <div>
            <input type="submit" name="submit" value="確定">
        </div>
        <div id="app">
            <select-pokemon v-bind:pokemon_moves="{{$pokemonMoves}}" v-bind:pokemon="{{$pokemon}}"></select-pokemon>
        </div>
    </form>
@endsection