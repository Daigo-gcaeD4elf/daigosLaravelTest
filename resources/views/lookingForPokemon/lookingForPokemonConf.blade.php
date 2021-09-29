@extends('layouts.pokemon')

@section('title', 'Top')

@section('content')
    <form action="{{ url('/lookingForPokemon/done/'. $lookingForPokemonId) }}" method="post">
        {{ csrf_field() }}
        <p>以下の内容で登録します！！</p>
        <div>
            ポケモン：{{ $request->pokemon }}
            <input type="hidden" name="pokemon_id" value="{{ $request->pokemon_id }}">
            <input type="hidden" name="pokemon" value="{{ $request->pokemon }}">
        </div>
        <div>
            わざ：{{ $request->move_1 }}
            <input type="hidden" name="move_1_id" value="{{ $request->move_1_id }}">
            <input type="hidden" name="move_1" value="{{ $request->move_1 }}">
        </div>
        <div>
            <input type="submit" name="submit" value="これでよし！">
            <input type="submit" name="back" value="いやまてよ？">
        </div>
        <div id="app"></div>
    </form>
@endsection