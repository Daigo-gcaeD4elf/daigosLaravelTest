<?php

use Illuminate\Database\Seeder;

class PokemonTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pokemon_types')->insert([
            [
                'type_code' => 0,
                'type_name' => 'ノーマル',
                'type_abbreviation' => '無',
            ],
            [
                'type_code' => 1,
                'type_name' => 'かくとう',
                'type_abbreviation' => '闘',
            ],
            [
                'type_code' => 2,
                'type_name' => 'ひこう',
                'type_abbreviation' => '飛',
            ],
            [
                'type_code' => 3,
                'type_name' => 'どく',
                'type_abbreviation' => '毒',
            ],
            [
                'type_code' => 4,
                'type_name' => 'じめん',
                'type_abbreviation' => '地',
            ],
            [
                'type_code' => 5,
                'type_name' => 'いわ',
                'type_abbreviation' => '岩',
            ],
            [
                'type_code' => 6,
                'type_name' => 'むし',
                'type_abbreviation' => '虫',
            ],
            [
                'type_code' => 7,
                'type_name' => 'ゴースト',
                'type_abbreviation' => '霊',
            ],
            [
                'type_code' => 8,
                'type_name' => 'はがね',
                'type_abbreviation' => '鋼',
            ],
            [
                'type_code' => 20,
                'type_name' => 'ほのお',
                'type_abbreviation' => '炎',
            ],
            [
                'type_code' => 21,
                'type_name' => 'みず',
                'type_abbreviation' => '水',
            ],
            [
                'type_code' => 22,
                'type_name' => 'くさ',
                'type_abbreviation' => '草',
            ],
            [
                'type_code' => 23,
                'type_name' => 'でんき',
                'type_abbreviation' => '電',
            ],
            [
                'type_code' => 24,
                'type_name' => 'エスパー',
                'type_abbreviation' => '超',
            ],
            [
                'type_code' => 25,
                'type_name' => 'こおり',
                'type_abbreviation' => '氷',
            ],
            [
                'type_code' => 26,
                'type_name' => 'ドラゴン',
                'type_abbreviation' => '龍',
            ],
            [
                'type_code' => 27,
                'type_name' => 'あく',
                'type_abbreviation' => '悪',
            ],
            [
                'type_code' => 28,
                'type_name' => 'フェアリー',
                'type_abbreviation' => '妖',
            ],
        ]);
    }
}
