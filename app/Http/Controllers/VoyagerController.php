<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voyager;

class VoyagerController extends Controller
{
    public function Voyager()
    {
        $pacchetti = Voyager::all();
        return view('myVoyager', ['travel_packages' => $pacchetti]);
    }
}
