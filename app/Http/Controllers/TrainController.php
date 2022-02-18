<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index() {

        $date = Carbon::today();
        $trains = Train::where('data', '>=', $date->toDateString())
        ->get();
        // $trains = Train::all();

        $data = ['trains' => $trains];

        return view('home', $data);
    }
}
