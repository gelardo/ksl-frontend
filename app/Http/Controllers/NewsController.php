<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Support\Str;

class NewsController extends BlendxController
{

public function news(){
    $news = News::get();
    foreach($news as $n){
        $n->truncated = strip_tags(Str::limit($n->description,50));
    }
    return view('home.news',compact('news'));
}
}
