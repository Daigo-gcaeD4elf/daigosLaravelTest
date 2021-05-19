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
            $table->unsignedInteger('id')->unique();
            $table->unsignedInteger('pokedex_no');
            $table->unsignedSmallInteger('form')->default(0);
            $table->unsignedSmallInteger('mega_evolve')->default(0);
            $table->unsignedSmallInteger('region_form')->default(0);
            $table->string('pokemon_name');
            $table->unsignedSmallInteger('generation');
            $table->unsignedSmallInteger('type_1');
            $table->unsignedSmallInteger('type_2');
            $table->unsignedSmallInteger('egg_group_1');
            $table->unsignedSmallInteger('egg_group_2');
            $table->unsignedSmallInteger('experience_type');

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
