<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewsController extends BlendxController
{

public function news(){
    $news = News::get();
    return view('home.news',compact('news'));
}
}
