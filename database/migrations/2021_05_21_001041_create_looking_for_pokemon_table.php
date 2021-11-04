<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLookingForPokemonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('looking_for_pokemon', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');                           // 投稿した人
            $table->unsignedInteger('pokemon_id')->default(0);            // ポケモン
            $table->unsignedInteger('move_1_id')->default(0);             // わざ1
            $table->unsignedInteger('move_2_id')->default(0);             // わざ2
            $table->unsignedInteger('move_3_id')->default(0);             // わざ3
            $table->unsignedInteger('move_4_id')->default(0);             // わざ4
            $table->unsignedInteger('ability')->default(0);               // とくせい
            $table->unsignedSmallInteger('nature')->default(0);           // せいかく
            $table->unsignedSmallInteger('gender')->default(0);           // 性別
            $table->unsignedSmallInteger('min_level')->default(1);        // レベル 下限
            $table->unsignedSmallInteger('max_level')->default(100);      // レベル 上限
            $table->unsignedSmallInteger('hp')->default(32);              // HP個体値
            $table->unsignedSmallInteger('attack')->default(32);          // 攻撃個体値
            $table->unsignedSmallInteger('defence')->default(32);         // 防御個体値
            $table->unsignedSmallInteger('special_attack')->default(32);  // 特攻個体値
            $table->unsignedSmallInteger('special_defence')->default(32); // 防御個体値
            $table->unsignedSmallInteger('speed')->default(32);           // 素早さ個体値
            $table->unsignedSmallInteger('egg_group_1')->default(0);      // タマゴグループ1
            $table->unsignedSmallInteger('egg_group_2')->default(0);      // タマゴグループ2
            $table->string('comment')->default('');                       // コメント
            $table->unsignedSmallInteger('progress_state')->default(0);   // 進捗ステータス
            $table->boolean('delete_flg')->default(0);                    // 論理削除用フラグ
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('looking_for_pokemon');
    }
}
