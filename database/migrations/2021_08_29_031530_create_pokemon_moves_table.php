<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePokemonMovesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // TODO:2ターン技 地中の相手に命中等 フィールドで使える 連続攻撃 バインド(状態異常の1種でカバー可能？) 固定ダメージ 跳躍(じゅうりょく状態で発動不可) 氷状態で使用可

        Schema::create('pokemon_moves', function (Blueprint $table) {
            $table->unsignedInteger('id')->unique();                          // ユニークID
            $table->string('move_name');                                      // 技名
            $table->unsignedSmallInteger('type');                             // タイプ
            $table->unsignedSmallInteger('power');                            // 威力
            $table->unsignedSmallInteger('accuracy');                         // 命中率
            $table->unsignedSmallInteger('pp');                               // PP
            $table->unsignedSmallInteger('classification');                   // 区分 0:変化 1:物理 2:特殊
            $table->unsignedSmallInteger('physical_contact');                 // 接触区分 0:非接触 1:接触
            $table->SmallInteger('priority')->default(0);                     // 優先度
            $table->unsignedSmallInteger('without_missing')->default(0);      // 必中区分 0:非必中技 1:必中技
            $table->unsignedSmallInteger('critical')->default(0);             // 急所区分 0:通常 1:急所に当たりやすい 2:必ず急所に当たる
            $table->unsignedSmallInteger('one_hit_knockout')->default(0);     // 一撃区分 0:通常 1:一撃必殺
            $table->unsignedSmallInteger('penetration')->default(0);          // 貫通区分 0:非貫通技 1:貫通技 (フェイント等)
            $table->unsignedSmallInteger('sound')->default(0);                // 音区分 0:非音技 1:音技
            $table->unsignedSmallInteger('pulse')->default(0);                // 波動区分 0:非波動 1:波動
            $table->unsignedSmallInteger('punch')->default(0);                // パンチ区分 0:非パンチ技 1:パンチ技
            $table->unsignedSmallInteger('fang')->default(0);                 // 牙区分 0:非牙技 1:牙技
            $table->unsignedSmallInteger('bullet')->default(0);               // 弾区分 0:非弾技 1:弾技 (防弾で防げる)
            $table->unsignedSmallInteger('powder')->default(0);               // 粉区分 0:非粉技 1:粉技 (防塵で防げる)
            $table->unsignedSmallInteger('bomb')->default(0);                 // 爆発区分 0:非爆発技 1:爆発技 (しめりけで防げる)
            $table->unsignedSmallInteger('attack_target')->default(0);        // 攻撃対象 0:相手 1:相手全体 2:全体
            $table->unsignedSmallInteger('effect_1')->default(0);             // 追加効果1
            $table->unsignedSmallInteger('effect_1_probability')->default(0); // 追加効果1発生確率
            $table->unsignedSmallInteger('effect_1_target')->default(0);      // 追加効果1対象 1:自分、2:相手 3:味方 4:味方全体 5:相手全体 6:フィールド
            $table->unsignedSmallInteger('effect_2')->default(0);             // 追加効果2
            $table->unsignedSmallInteger('effect_2_probability')->default(0); // 追加効果2発生確率
            $table->unsignedSmallInteger('effect_2_target')->default(0);      // 追加効果2対象 1:自分、2:相手 3:味方 4:味方全体 5:相手全体 6:フィールド
            $table->unsignedSmallInteger('effect_3')->default(0);             // 追加効果3
            $table->unsignedSmallInteger('effect_3_probability')->default(0); // 追加効果3発生確率
            $table->unsignedSmallInteger('effect_3_target')->default(0);      // 追加効果3対象 1:自分、2:相手 3:味方 4:味方全体 5:相手全体 6:フィールド
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
        Schema::dropIfExists('pokemon_moves');
    }
}
