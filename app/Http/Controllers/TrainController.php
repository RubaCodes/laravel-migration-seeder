<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class TrainController extends Controller
{
    public function index(){
        $alltrains = Train::all();
        



        return view('welcome', compact('alltrains'));
    }
}
