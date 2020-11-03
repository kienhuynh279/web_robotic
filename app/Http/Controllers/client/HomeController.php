<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Docs;

class HomeController extends Controller
{
    public function index()
    {
        return view('client.index',[
            'title' => 'Home',
            'page' => 'home.index'
        ]);
    }


}
