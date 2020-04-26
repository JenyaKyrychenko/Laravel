<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function render($url){
        $content = Page::get()->where('url', $url);
        return view('PagesContent',['content' => $content]);
    }
}
