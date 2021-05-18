@extends('layouts.pokemon')

@section('title', 'Top')

@section('content')
    <p>ここはトップページやで！</p>
    <table>
        <tr>
            <th>タイプ</th>
            <th>タイプ略称</th>
        </tr>
        @foreach ($pokemonTypes as $item)
            <tr>
                <td>{{ $item['type_name'] }}</td>
                <td>{{ $item['type_abbreviation'] }}</td>
            </tr>
        @endforeach
    </table>
@endsection