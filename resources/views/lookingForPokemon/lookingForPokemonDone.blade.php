@extends('layouts.pokemon')

@section('title', 'Top')

@section('content')
    <p>登録しました！！</p>
    <div>
        ポケモン：{{ $request->pokemon }}
    </div>
    <div>
        わざ：{{ $request->move_1 }}
    </div>
    <div>
        <a href="{{ url('menu') }}">トップ画面へ</a>
    </div>
    <div>
        <a href="{{ url('/lookingForPokemon') }}">つづけて登録する</a>
    </div>
    <div id="app"></div>
@endsection