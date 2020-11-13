<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //
    public function index()
    {
        $images = Image::paginate(20);

        return view("client.pages.gallery.index")->with([
            "images" => $images
        ]);
    }
}
