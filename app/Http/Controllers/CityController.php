<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityController extends Controller
{
    //1. property
    //2. contructor
    //3. methods  

    public function jaipur()
    {
        $data = ["name" => "gunjan"];
return view('rj.jaipur', compact('data'));
    }
}
