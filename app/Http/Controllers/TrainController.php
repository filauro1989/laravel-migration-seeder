<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index() {

        $todayDate = Carbon::today();
        $trains = Train::where('data', '>=', $todayDate->toDateString())
        ->get();
        // $trains = Train::all();

        $data = ['trains' => $trains];

        return view('home', $data);
    }
}
