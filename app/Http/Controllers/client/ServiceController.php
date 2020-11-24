<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
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
        $solution = Service::where([['status', "=", 1], ["TypeId", "=", 1]])->get();

        return view('client.pages.service.solution', [
            'solutions' => $solution,
        ]);
    }

    public function traning()
    {
        $training = Service::where([['status', "=", 1], ["TypeId", "=", 2]])->get();

        return view('client.pages.service.traning', [
            'trainings' => $training,
        ]);
    }
}
