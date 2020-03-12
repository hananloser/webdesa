<?php

namespace App\Http\Controllers;

use App\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Construct Ketika Route Di panggil 
     */
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $layanan = Layanan::all() ;
        return view('layanan.index', compact('layanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layanan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $pesan = [
            'required' => 'Error :attribute isi field terlebih dahulu',
            'min' => 'Error jumlah characters harus lebih dari 10'
        ];

        $validasi = [
            'layanan' => ['required', 'string' , 'max:200' , 'min:10']
        ];

        $_validLayanan = $request->validate($validasi,$pesan);

        if($_validLayanan) {
            Layanan::create([
                'layanan' => $request->layanan
            ]);
        }

        return view('layanan.index')->with('status' , 'Data Berhasil Di Tambah Kan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function show(Layanan $layanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Layanan $layanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Layanan $layanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Layanan $layanan)
    {
        //
    }
}
