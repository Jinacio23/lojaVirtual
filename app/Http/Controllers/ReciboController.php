<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReciboController extends Controller
{
    function index(){
        return view("recibo");
    }
}
