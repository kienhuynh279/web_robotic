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

    public function detail($NewId) {
        
        $new = News::findOrFail($NewId);
        
        return view("client.pages.news.detail",[
            'new' => $new
        ]);
    }
}
