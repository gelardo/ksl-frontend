<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Simon\BDShareMarket;

class HomeController extends BlendxController
{
    public function indexnew(){
       return view('home.index');
    }
}
