<?php

use Illuminate\Database\Seeder;

class PokemonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pokemon')->insert([
            [
                'id' => 1,
                'pokedex_no' => 1,
                'pokemon_name' => 'フシギダネ',
                'generation' => 1,
                'type_1' => 22,
                'type_2' => 3,
                'egg_group_1' => 0,
                'egg_group_2' => 0,
                'experience_type' => 4,
            ],
            [
                'id' => 2,
                'pokedex_no' => 2,
                'pokemon_name' => 'フシギソウ',
                'generation' => 1,
                'type_1' => 22,
                'type_2' => 3,
                'egg_group_1' => 0,
                'egg_group_2' => 0,
                'experience_type' => 4,
            ],
            [
                'id' => 3,
                'pokedex_no' => 3,
                'pokemon_name' => 'フシギバナ',
                'generation' => 1,
                'type_1' => 22,
                'type_2' => 3,
                'egg_group_1' => 0,
                'egg_group_2' => 0,
                'experience_type' => 4,
            ],
            [
                'id' => 4,
                'pokedex_no' => 4,
                'pokemon_name' => 'ヒトカゲ',
                'generation' => 1,
                'type_1' => 20,
                'type_2' => 20,
                'egg_group_1' => 0,
                'egg_group_2' => 0,
                'experience_type' => 4,
            ],
            [
                'id' => 5,
                'pokedex_no' => 5,
                'pokemon_name' => 'リザード',
                'generation' => 1,
                'type_1' => 20,
                'type_2' => 20,
                'egg_group_1' => 0,
                'egg_group_2' => 0,
                'experience_type' => 4,
            ],
            [
                'id' => 6,
                'pokedex_no' => 6,
                'pokemon_name' => 'リザードン',
                'generation' => 1,
                'type_1' => 20,
                'type_2' => 2,
                'egg_group_1' => 0,
                'egg_group_2' => 0,
                'experience_type' => 4,
            ],
            [
                'id' => 7,
                'pokedex_no' => 7,
                'pokemon_name' => 'ゼニガメ',
                'generation' => 1,
                'type_1' => 21,
                'type_2' => 21,
                'egg_group_1' => 0,
                'egg_group_2' => 0,
                'experience_type' => 4,
            ],
            [
                'id' => 8,
                'pokedex_no' => 8,
                'pokemon_name' => 'カメール',
                'generation' => 1,
                'type_1' => 21,
                'type_2' => 21,
                'egg_group_1' => 0,
                'egg_group_2' => 0,
                'experience_type' => 4,
            ],
            [
                'id' => 9,
                'pokedex_no' => 9,
                'pokemon_name' => 'カメックス',
                'generation' => 1,
                'type_1' => 21,
                'type_2' => 21,
                'egg_group_1' => 0,
                'egg_group_2' => 0,
                'experience_type' => 4,
            ],
        ]);
    }
}