<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Page extends Model
{
    public function render($url){
        $content = DB::table('pages')->get()->where('url', $url);
        return view('PagesContent',['content' => $content, 'eng' => false]);
    }

    public function  renderEngContent($url){
        $content = DB::table('page_englishes')->get()->where('url',$url);
        return view('PagesContent',['content' => $content, 'eng' => true]);
    }
}
