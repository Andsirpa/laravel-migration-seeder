<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    //sposto qui la logica
    public function index()
    {
        // prendo i treni che partono oggi
        $trains = Train::whereDate("departure_time", today()->toDateString())->get();
        return view('home');
    }
}
