<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomController extends Controller
{
    public function welcom(){
        return view('guns.index');
    }
}
