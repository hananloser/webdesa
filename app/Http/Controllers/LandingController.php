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
        return view('landingPage.aparatdesa');
    }

}
