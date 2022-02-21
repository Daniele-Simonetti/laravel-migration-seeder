<?php

namespace App\Http\Controllers;
use App\Train;

use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::where('orario_di_partenza', '>', '2022/02/21')->get();
        return view('trains.home', ['trains' => $trains]);
    }

    public function show(Train $train)
    {
        return view('trains.show', compact('train'));
    }
}
