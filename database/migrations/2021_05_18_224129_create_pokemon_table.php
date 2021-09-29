<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePokemonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemon', function (Blueprint $table) {
            $table->unsignedInteger('id')->unique();                 // id(主キー)
            $table->unsignedInteger('pokedex_no');                   // ポケモン図鑑No
            $table->unsignedSmallInteger('form')->default(0);        // フォルム
            $table->unsignedSmallInteger('mega_evolve')->default(0); // メガシンカ
            $table->unsignedSmallInteger('region_form')->default(0); // リージョンフォルム
            $table->string('pokemon_name');                          // ポケモン名
            $table->unsignedSmallInteger('generation');              // 世代
            $table->unsignedSmallInteger('type_1');                  // タイプ1
            $table->unsignedSmallInteger('type_2');                  // タイプ2
            $table->unsignedSmallInteger('ability_1');               // 特性1
            $table->unsignedSmallInteger('ability_2');               // 特性2
            $table->unsignedSmallInteger('ability_3');               // 特性3
            $table->unsignedSmallInteger('egg_group_1');             // タマゴグループ1
            $table->unsignedSmallInteger('egg_group_2');             // タマゴグループ2
            $table->unsignedSmallInteger('experience_type');         // 経験値タイプ
            $table->unsignedSmallInteger('gender_type');             // 男女比_性別有無  ※0-性別なし, 1-オスのみ, 2-メスのみ, 3- 1:1, 4- 7:1, 5- 1:3
            $table->primary(['id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pokemon');
    }
}
