<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function index() {
        $about = About::all();
        return view("client.pages.about.index",[
            'about' => $about
        ]);
    }
}
