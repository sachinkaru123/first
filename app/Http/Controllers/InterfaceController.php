<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//created controller
class InterfaceController extends Controller
{
    public function indexHome2(){
        return view ('Home02');
    }
}
