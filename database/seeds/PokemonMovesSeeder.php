<?php

use Illuminate\Database\Seeder;

class PokemonMovesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pokemon_moves')->insert([
            [
                'id' => 1,
                'move_name' => 'はたく',
                'type' => 0,
                'power' => 40,
                'accuracy' => 100,
                'pp' => 35,
                'classification' => 1,
                'physical_contact' => 1,
            ]
        ]);

        DB::table('pokemon_moves')->insert([
            [
                'id' => 2,
                'move_name' => 'からてチョップ',
                'type' => 1,
                'power' => 50,
                'accuracy' => 100,
                'pp' => 25,
                'classification' => 1,
                'physical_contact' => 1,
                'critical' => 1,
            ]
        ]);

        DB::table('pokemon_moves')->insert([
            [
                'id' => 3,
                'move_name' => 'おうふくビンタ',
                'type' => 0,
                'power' => 15,
                'accuracy' => 85,
                'pp' => 10,
                'classification' => 1,
                'physical_contact' => 1,
            ]
        ]);

        DB::table('pokemon_moves')->insert([
            [
                'id' => 4,
                'move_name' => 'れんぞくパンチ',
                'type' => 0,
                'power' => 18,
                'accuracy' => 85,
                'pp' => 15,
                'classification' => 1,
                'physical_contact' => 1,
            ]
        ]);

        DB::table('pokemon_moves')->insert([
            [
                'id' => 5,
                'move_name' => 'メガトンパンチ',
                'type' => 0,
                'power' => 80,
                'accuracy' => 85,
                'pp' => 20,
                'classification' => 1,
                'physical_contact' => 1,
            ]
        ]);

        DB::table('pokemon_moves')->insert([
            [
                'id' => 6,
                'move_name' => 'ネコにこばん',
                'type' => 0,
                'power' => 40,
                'accuracy' => 100,
                'pp' => 20,
                'classification' => 1,
                'physical_contact' => 0,
                'effect_1' => 1,
                'effect_1_probability' => 100,
                'effect_1_target' => 6,
            ]
        ]);

        DB::table('pokemon_moves')->insert([
            [
                'id' => 7,
                'move_name' => 'ほのおのパンチ',
                'type' => 20,
                'power' => 75,
                'accuracy' => 100,
                'pp' => 15,
                'classification' => 1,
                'physical_contact' => 1,
                'punch' => 1,
                'effect_1' => 2,
                'effect_1_probability' => 10,
                'effect_1_target' => 1,
            ]
        ]);

        DB::table('pokemon_moves')->insert([
            [
                'id' => 8,
                'move_name' => 'れいとうパンチ',
                'type' => 25,
                'power' => 75,
                'accuracy' => 100,
                'pp' => 15,
                'classification' => 1,
                'physical_contact' => 1,
                'punch' => 1,
                'effect_1' => 2,
                'effect_1_probability' => 10,
                'effect_1_target' => 1,
            ]
        ]);

        DB::table('pokemon_moves')->insert([
            [
                'id' => 9,
                'move_name' => 'かみなりパンチ',
                'type' => 23,
                'power' => 75,
                'accuracy' => 100,
                'pp' => 15,
                'classification' => 1,
                'physical_contact' => 1,
                'punch' => 1,
                'effect_1' => 2,
                'effect_1_probability' => 10,
                'effect_1_target' => 1,
            ]
        ]);

        DB::table('pokemon_moves')->insert([
            [
                'id' => 10,
                'move_name' => 'ひっかく',
                'type' => 0,
                'power' => 40,
                'accuracy' => 100,
                'pp' => 35,
                'classification' => 1,
                'physical_contact' => 1,
            ]
        ]);

        DB::table('pokemon_moves')->insert([
            [
                'id' => 11,
                'move_name' => 'はさむ',
                'type' => 0,
                'power' => 55,
                'accuracy' => 100,
                'pp' => 30,
                'classification' => 1,
                'physical_contact' => 1,
            ]
        ]);

        DB::table('pokemon_moves')->insert([
            [
                'id' => 12,
                'move_name' => 'ハサミギロチン',
                'type' => 0,
                'power' => 0,
                'accuracy' => 30,
                'pp' => 5,
                'classification' => 1,
                'physical_contact' => 1,
                'one_hit_knockout' => 1,
            ]
        ]);

        DB::table('pokemon_moves')->insert([
            [
                'id' => 13,
                'move_name' => 'かまいたち',
                'type' => 0,
                'power' => 80,
                'accuracy' => 100,
                'pp' => 10,
                'classification' => 2,
                'physical_contact' => 0,
                'critical' => 1,
                'attack_target' => 1,
            ]
        ]);

        DB::table('pokemon_moves')->insert([
            [
                'id' => 14,
                'move_name' => 'つるぎのまい',
                'type' => 0,
                'power' => 0,
                'accuracy' => 100,
                'pp' => 30,
                'classification' => 2,
                'physical_contact' => 0,
                'without_missing' => 1,
                'effect_1' => 1,
                'effect_1_probability' => 100,
                'effect_1_target' => 1,
            ]
        ]);

        DB::table('pokemon_moves')->insert([
            [
                'id' => 15,
                'move_name' => 'いあいぎり',
                'type' => 0,
                'power' => 50,
                'accuracy' => 95,
                'pp' => 30,
                'classification' => 1,
                'physical_contact' => 1,
            ]
        ]);

        DB::table('pokemon_moves')->insert([
            [
                'id' => 16,
                'move_name' => 'かぜおこし',
                'type' => 2,
                'power' => 40,
                'accuracy' => 100,
                'pp' => 35,
                'classification' => 2,
                'physical_contact' => 0,
            ]
        ]);

        DB::table('pokemon_moves')->insert([
            [
                'id' => 17,
                'move_name' => 'つばさでうつ',
                'type' => 2,
                'power' => 60,
                'accuracy' => 100,
                'pp' => 35,
                'classification' => 1,
                'physical_contact' => 1,
            ]
        ]);

        DB::table('pokemon_moves')->insert([
            [
                'id' => 18,
                'move_name' => 'ふきとばし',
                'type' => 0,
                'power' => 0,
                'accuracy' => 100,
                'pp' => 20,
                'classification' => 0,
                'physical_contact' => 0,
                'priority' => -6,
                'effect_1' => 1,
                'effect_1_probability' => 100,
                'effect_1_target' => 1,
                'effect_2' => 1,
                'effect_2_probability' => 100,
                'effect_2_target' => 1,
            ]
        ]);

        DB::table('pokemon_moves')->insert([
            [
                'id' => 19,
                'move_name' => 'そらをとぶ',
                'type' => 2,
                'power' => 90,
                'accuracy' => 95,
                'pp' => 15,
                'classification' => 1,
                'physical_contact' => 1,
                'effect_1' => 1,
                'effect_1_probability' => 100,
                'effect_1_target' => 1,
            ],
        ]);
    }
}
