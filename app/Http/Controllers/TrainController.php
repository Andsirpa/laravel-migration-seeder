<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    //sposto qui la logica
    public function index()
    {
        dd(Train::all());
        return view('home');
    }
}
