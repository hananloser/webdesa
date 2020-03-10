<?php

namespace App\Http\Controllers;

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
        $syrat = Syrat::orderBy('created_at' , 'DESC')
                    ->with('layanan')
                    ->paginate(10);
        return $syrat ; 
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
    public function store(Request $request)
    {
        //
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
