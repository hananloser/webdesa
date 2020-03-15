<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Kelembagaan;
use Illuminate\Http\Request;

class AparatdesaController extends Controller
{

    public $headers = [
        'Content-Type' => 'application/json',
        'X-Requested-With' => 'XMLHttpRequest',
    ];


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $key = $request->keyword ;
        if($key == 'BPD') {
            $aparat = Kelembagaan::all()->whereIn('kelembagaan' , $key);
            return response()->json($aparat, 200, $this->headers);
        }
        $aparat = Kelembagaan::all();
        return response()->json($aparat, 200, $this->headers);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $aparat = Kelembagaan::findOrFail($id) ;
        return response()->json($aparat , 200 , $this->headers);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
