<?php
namespace App\Library;

class MyFunc
{
    /**
     * Create a new controller instance.
     *
     * @return string/number
     */
    public static function getPropData($oldData, $initData) {
        if (!empty($oldData)) {
            return $oldData;
        }

        return $initData;
    }
}