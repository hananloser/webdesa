<?php

namespace App\Http\Controllers;

use App\Bumdes;

class LandingController extends Controller
{

    public function index()
    {
        $bumdes = Bumdes::all();
        return view('landing', compact('bumdes'));
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

}
