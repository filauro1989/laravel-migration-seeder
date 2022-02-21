<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index() {

        $todayDate = Carbon::today();
        $trains = Train::paginate(12);
        // $trains = Train::all();

        $data = ['trains' => $trains];

        return view('home', $data);
    }

    public function show(Train $train){
        return view('show', compact('train'));
    }
}
