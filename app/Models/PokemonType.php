<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PokemonType extends Model
{
    public function getData()
    {
        return 'タイプ：'. $this -> type_name. '---略称：'. $this -> type_abbreviation;
    }
}
