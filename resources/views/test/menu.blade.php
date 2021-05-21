@extends('layouts.pokemon')

@section('title', 'Top')

@section('content')
    <p>ここはトップページやで！</p>
    <div>
        <a href="{{ url('/lookingForPokemon') }}">欲しいポケモンを登録する</a>
    </div>
    <table>
        <tr>
            <th>ポケモン</th>
            <th>タイプ1</th>
            <th>タイプ2</th>
        </tr>
        @foreach ($pokemon as $item)
            <tr>
                <td>{{ $item->pokemon_name }}</td>
                <td>{{ $item->type_1 }}</td>
                <td>{{ $item->getType2() }}</td>
            </tr>
        @endforeach
    </table>
@endsection