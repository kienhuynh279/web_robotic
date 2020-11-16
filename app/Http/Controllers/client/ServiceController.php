<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Type;
use Illuminate\Support\Facades\Route;

class ServiceController extends Controller
{
    // public function index()
    // {
    //     $service = Service::where('status',1)->get();
    //     $type = Type::where('status', 1)->get();
    //     return view('client.pages.service.index',[
    //         'services' => $service,
    //         'types' =>$type
    //     ]);
    // }

    public function solution()
    {
        $solution = Service::where('status', 1)->get();
        $type = Type::where([
            ['status', 1],
            ['Title', 'Solution']
        ])->first();
        $route = Route::currentRouteName();

        return view('client.pages.service.solution',[
            'solutions' => $solution,
            'type' => $type,
            'route' => $route
        ]);
    }

    public function traning()
    {   
        $type = Type::where([
            ['status', 1],
            ['Title', 'Training']
        ])->first();
        $route = Route::currentRouteName();
        $training = Service::where('status', 1)->get();
        return view('client.pages.service.traning',[
            'trainings' => $training, 
            'type' => $type,
            'route' => $route
        ]);
    }
}
