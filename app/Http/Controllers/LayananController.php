<?php

namespace App\Http\Controllers;

use App\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class LayananController extends Controller
{


    /**
     * Construct Ketika Route Di panggil
     */
    public function __construct()
    {
        $this->middleware(function($request , $next){
            if(Gate::allows('isAdmin')) return $next($request);
            abort('403' , 'Akses Tidak Sah');
        });
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $layanans = Layanan::latest()->paginate(5);
        // return $layanans ;
        return view('layanan.index', compact('layanans'));
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
            'layanan' => ['required', 'string', 'max:200', 'min:10']
        ];
        $request->validate($validasi, $pesan);
        Layanan::create($request->all());

        return redirect()->route('layanan')->with('status', 'Data Berhasil Di Tambah Kan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function show(Layanan $layanan , $id)
    {
        $layanan = Layanan::findOrFail($id);
        return view('layanan.show' , compact('layanan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Layanan $layanans, $id)
    {
        $layanan = $layanans->findOrFail($id);
        return view('layanan.edit', compact('layanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Layanan $layanan, $id)
    {
        $pesan = [
            'required' => 'Error :attribute isi field terlebih dahulu',
            'min' => 'Error jumlah characters harus lebih dari 10'
        ];
        $validasi = [
            'layanan' => ['required', 'string', 'max:200', 'min:10']
        ];
        $request->validate($validasi, $pesan);
        $layanan->find($id)
            ->update($request->all());

        return redirect()->route('layanan')->with('status', 'data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Layanan $layanan, $id)
    {
        $layanan->find($id)->delete();
        return redirect()->route('layanan')->with('status', 'Berhasil di Hapus');
    }
}
