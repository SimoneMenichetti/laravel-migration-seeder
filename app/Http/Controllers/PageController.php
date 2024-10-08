<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;




class PageController extends Controller
{

    public function myTrains()
    {

        $todayDate = date('Y-m-d');

        $trains = Train::whereDate('created_at', $todayDate)->get();

        return view('myTrains', ['trains' => $trains]);
    }
    public function index()
    {

        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contacts()
    {
        return view('contacts');
    }
}
