<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WasshoiController extends Controller
{
    public function index($str = '!!')
    {
        $data = [
            'str' => $str,
        ];
        return view('wasshoi', $data);
    }
}
