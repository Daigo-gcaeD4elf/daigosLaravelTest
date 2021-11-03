@extends('layouts.pokemon')

@section('title', 'Top')

@section('content')
    <div>
        <a href="{{ url('/lookingForPokemon') }}">欲しいポケモンを登録する</a>
    </div>
    <div class="w-2/5 border">
        <h3 class="text-2xl text-center text-white bg-blue-200 p-4 mb-4">登録済のポケモン</h3>
        <table class="m-3 ml-6">
            <tr class="bg-blue-400 text-center">
                <th class="border px-4 py-2">ポケモン</th>
                <th class="border px-4 py-2">わざ1</th>
                <th class="border px-4 py-2">わざ2</th>
                <th class="border px-4 py-2">わざ3</th>
                <th class="border px-4 py-2">わざ4</th>
                <th class="border px-4 py-2">変更</th>
                <th class="border px-4 py-2">削除</th>
            </tr>
            @foreach ($lookingForPokemonFromYou as $item)
                <tr>
                    <td class="border px-4 py-2">{{ $item->pokemon_name }}</td>
                    <td class="border px-4 py-2">{{ $item->checkMove1() }}</td>
                    <td class="border px-4 py-2">{{ $item->checkMove2() }}</td>
                    <td class="border px-4 py-2">{{ $item->checkMove3() }}</td>
                    <td class="border px-4 py-2">{{ $item->checkMove4() }}</td>
                    <td class="border px-4 py-2">
                        <form action="{{ './lookingForPokemon/'. $item->id }}">
                            <input type="submit" value="変更" class="p-2">
                        </form>
                    </td>
                    <td class="border px-4 py-2">
                        <form action="{{ './lookingForPokemon/'. $item->id }}">
                            <input type="submit" value="削除" class="p-2">
                        </form>
                    </td>
                </tr>
            @endforeach
            {{ $lookingForPokemonFromYou->links() }}
        </table>
        <form action="./lookingForPokemon">
            <input type="submit" value="新規登録" class="p-4 ml-16 m-2">
        </form>
    </div>
    <div id="app"></div>
@endsection