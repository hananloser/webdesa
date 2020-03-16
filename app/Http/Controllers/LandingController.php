<?php

namespace App\Http\Controllers;

use App\Bumdes;
use App\Kelembagaan;

class LandingController extends Controller
{

    public function index()
    {
        $bumdes = Bumdes::all();
        $aparat = Kelembagaan::all();
        return view('landing', ['bumdes' => $bumdes , 'aparat' => $aparat]);
    }

    public function aparat()
    {
        $bumdes = Bumdes::all();
        return view('landingPage.aparat' , ['bumdes' => $bumdes]);
    }

    public function layanan(){
        $bumdes = Bumdes::all();
        return view('landingPage.layanan' , ['bumdes' => $bumdes]);
    }

    public function pengaduan(){
        $bumdes = Bumdes::all();
        return view('landingPage.pengaduan' , ['bumdes' => $bumdes]);
    }

}
