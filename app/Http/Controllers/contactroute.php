<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactroute extends Controller
{
    function index()
    {
        return view('contact'); 
    }
}