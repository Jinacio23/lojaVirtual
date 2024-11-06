<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroPagController extends Controller
{
    function index(){
        return view("cadastropag");
    }
}