@extends('layouts.pokemon')

@section('title', 'Top')

@section('content')
    <form action="{{ url('/lookingForPokemon/done') }}" method="post">
        {{ csrf_field() }}
        <p>以下の内容で登録します！！</p>
        <div>
            ポケモン：{{ $request->pokemon }}
            <input type="hidden" name="pokemon" value="{{ $request->pokemon }}">
        </div>
        <div>
            わざ：{{ $request->move_1 }}
            <input type="hidden" name="move_1" value="{{ $request->move_1 }}">
        </div>
        <div>
            <input type="submit" name="submit" value="確定">
            <input type="submit" name="back" value="いやまてよ？">
        </div>
    </form>
@endsection