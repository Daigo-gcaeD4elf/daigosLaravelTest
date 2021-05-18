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
            $table->unsignedInteger('pokedex_no');
            $table->unsignedSmallInteger('form');
            $table->unsignedSmallInteger('mega_evolve');
            $table->unsignedSmallInteger('region_form');
            $table->string('pokemon_name');
            $table->unsignedSmallInteger('type_1');
            $table->unsignedSmallInteger('type_2');
            $table->unsignedSmallInteger('egg_group_1');
            $table->unsignedSmallInteger('egg_group_2');
            $table->timestamps();

            $table->primary(['pokedex_no', 'form', 'mega_evolve', 'region_form']);
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
