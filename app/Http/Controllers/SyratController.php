<?php

namespace App\Http\Controllers;

use App\Layanan;
use App\Syrat;
use Illuminate\Http\Request;

class SyratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $syrats = Layanan::orderBy('created_at', 'DESC')
            ->with('syrats')
            ->get();
        return view('syrat.index', compact('syrats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('syrat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , $id)
    {

        $layanan = Layanan::find($id);
        $data = $request->syrat ;
        $syarats;
        // dd($request->syrat);
        foreach ($data as $key => $value) {
            $syarats[] = [
                'syrat' => $value
            ];
        }

        $layanan->syrats()->createMany($syarats);
        $layanan->save();

        return redirect()->route('layanan')->with('status' , 'Syrat Berhasil Di Tambah Kan');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Syrat  $syrat
     * @return \Illuminate\Http\Response
     */
    public function show(Syrat $syrat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Syrat  $syrat
     * @return \Illuminate\Http\Response
     */
    public function edit(Syrat $syrat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Syrat  $syrat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Syrat $syrat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Syrat  $syrat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Syrat $syrat)
    {
        //
    }
}
