<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pokemon extends Model
{
    public function getData()
    {
        $data = DB::table('pokemon')->get();
        return $data;
    }

    public function getType2()
    {
        $type2 = $this->type_2;
        if ($this->type_1 === $this->type_2) {
            $type2 = '';
        }
        return $type2;
    }
}
