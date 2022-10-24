<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//created controller
class InterfaceController extends Controller
{
    public function indexhome2(){
        return view ('Home02');
    }

    public function indexhome3(){
        return view ('Home03');
    }
}
