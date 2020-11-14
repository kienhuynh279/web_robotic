<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Type;

class ServiceController extends Controller
{
    public function index()
    {
        $service = Service::where('status',1)->get();
        $type = Type::where('status', 1)->get();
        return view('client.pages.service.index',[
            'services' => $service,
            'types' =>$type
        ]);
    }

    public function solution()
    {
        return view('client.pages.service.solution');
    }

    public function traning()
    {
        return view('client.pages.service.traning');
    }
}
