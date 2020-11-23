<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index() {
        
        $news = News::all();

        return view("client.pages.news.index",[
            'news' => $news
        ]);
    }

    public function detail($id) {
        $all = News::all();
        
        $news = News::findOrFail($id);
        
        return view("client.pages.news.detail",[
            'news' => $news,
            'all' => $all
        ]);
    }
}
