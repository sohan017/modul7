<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OstedController extends Controller
{
    function sayHi(){
        return "welcome to learning";
    }

    function LoFu(){
        return "love you Bd";
    }

    function great($name = "World"){   
        return "Hello ".$name." miss you";
    }

    
}
