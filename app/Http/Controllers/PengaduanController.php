<?php

namespace App\Http\Controllers;

use App\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Gate;

class PengaduanController extends Controller
{

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (Gate::allows('isAdmin')) {
                return $next($request);
            }
            abort('403', 'Akses Tidak Sah');
        });
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengaduan = Pengaduan::orderBy('created_at', 'DESC')->get();

        return view('pengaduan.index', compact('pengaduan'));
    }

    public function create()
    {
        return view('pengaduan.create');
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
            'nama' => 'required|min:13',
            'pengaduan' => 'required|min:20',
            'nohp' => 'required',
        ]);
        DB::beginTransaction();
        Pengaduan::create([
            'no_pengaduan' => Str::random(5),
            'nama' => $request->nama,
            'pengaduan' => $request->pengaduan,
            'nohp' => $request->nohp,
        ]);
        DB::commit();
        return redirect()->route('pengaduan.index')->with('status', 'Pengaduan Berhasil Di Tambah Kan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function show(Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Pengaduan::find($id)->delete($id);
        return response()->json([
            'success' => 'Record deleted successfully!',
        ]);
    }
}
