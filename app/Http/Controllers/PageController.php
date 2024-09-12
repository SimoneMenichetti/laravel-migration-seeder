<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;


class PageController extends Controller
{

    public function myTrains()
    {
        // funzione per estrapolare la data odierna
        $now = Carbon::now()->format('Y-m-d');

        // estrapolo i treni in partenza oggi

        $trains = Train::whereDate('created_at', $now)->get();

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
