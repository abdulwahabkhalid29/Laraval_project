<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    public function index(){
        $countries = country::get();
        return view('countries.index',compact('countries'));
    }
}
