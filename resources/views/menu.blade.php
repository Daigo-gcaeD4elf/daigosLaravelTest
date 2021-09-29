@extends('layouts.pokemon')

@section('title', 'Top')

@section('content')
    <p>ここはトップページやで！</p>
    <div>
        <a href="{{ url('/lookingForPokemon') }}">欲しいポケモンを登録する</a>
    </div>
    <table>
        <tr>
            <th colspan="5" style="text-align:center">あなたが登録したポケモン</th>
        </tr>
        <tr>
            <th>ポケモン</th>
            <th>わざ1</th>
            <th>わざ2</th>
            <th>わざ3</th>
            <th>わざ4</th>
        </tr>
        @foreach ($lookingForPokemonFromYou as $item)
            <tr>
                <td>{{ $item->pokemon_name }}</td>
                <td>{{ $item->checkMove1() }}</td>
                <td>{{ $item->checkMove2() }}</td>
                <td>{{ $item->checkMove3() }}</td>
                <td>{{ $item->checkMove4() }}</td>
            </tr>
        @endforeach
    </table>
    <div id="app"></div>
@endsection