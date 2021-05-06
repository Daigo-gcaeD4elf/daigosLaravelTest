<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WasshoiController extends Controller
{
    public function index($str)
    {
        return view('wasshoi', compact('str'));
    }
}
