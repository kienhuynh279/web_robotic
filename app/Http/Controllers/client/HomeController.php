<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use App\Models\Docs;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        return view("client.index")->with([
            "title" => "Trang chủ",
            "banners" => $banners
        ]);
    }


}
