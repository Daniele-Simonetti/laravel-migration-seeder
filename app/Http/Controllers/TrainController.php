<?php

namespace App\Http\Controllers;
use App\Train;

use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::where('orario di partenza', '>', '2021/02/21')->get();
        $data = ['trains' => $trains];
        return view('trains.home', $data);
    }

    public function show(Train $train)
    {
        return view('trains.show', compact('train'));
    }
}
