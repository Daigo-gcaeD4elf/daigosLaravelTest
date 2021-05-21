@extends('layouts.pokemon')

@section('title', 'Top')

@section('content')
    <form action="{{ url('/lookingForPokemon/conf') }}" method="post">
        {{ csrf_field() }}
        <div>
            ポケモン<input type="text" name="pokemon" value="{{ old('pokemon') }}">
        </div>
        <div>
            わざ<input type="text" name="move_1" value="{{ old('move_1') }}">
        </div>
        <div>
            <input type="submit" name="submit" value="確定">
        </div>
    </form>
@endsection