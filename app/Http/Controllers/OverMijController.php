<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// op deze manier kun je een route naar deze controller method definieren
class OverMijController extends Controller
{
    public function index(){
        return view("OverMij.index");
    }
}
