<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LookingForPokemon extends Model
{
    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'looking_for_pokemon';
    protected $guarded = [
        'id',
    ];

    /**
     * nullの場合、「希望なし」表記にする
     *
     * @param string $str
     * @return string
     */
    private function _checkNull($str)
    {
        if(is_null($str)) {
            return '希望なし';
        }
        return $str;
    }

    public function checkMove1()
    {
        return $this->_checkNull($this->move_1);
    }

    public function checkMove2()
    {
        return $this->_checkNull($this->move_2);
    }

    public function checkMove3()
    {
        return $this->_checkNull($this->move_3);
    }

    public function checkMove4()
    {
        return $this->_checkNull($this->move_4);
    }
}
