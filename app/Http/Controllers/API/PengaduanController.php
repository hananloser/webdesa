<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Str ;
class PengaduanController extends Controller
{

    /**
     * @return array $headers
     */
    public $headers = [
        'Content-Type' => 'application/json',
        'X-Requested-With' => 'XMLHttpRequest',
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nohp' => 'required|numeric',
            'pengaduan' => 'required',
        ]);

        Pengaduan::create([
            'no_pengaduan' => Str::uuid(5),
            'nama' => $request->nama,
            'nohp' => $request->nohp,
            'pengaduan' => $request->pengaduan
        ]);
        return response()->json([
            'status' => 200,
            'pesan' => 'Data Berhasil Di Buat',
        ], 201, $this->headers);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
