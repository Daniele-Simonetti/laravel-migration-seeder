<?php

namespace App\Http\Controllers;
use App\Train;

use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::where('data', '>', '2022/02/18');
        $data = ['trains' => $trains];
        return view('home', $data);
    }

    public function show(Train $train)
    {

    }
}
