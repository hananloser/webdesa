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

        $this->kirimPesan($request->pengaduan , $request->nohp);

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

    private function getTelegram($url, $params)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url . $params);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 3);
        $content = curl_exec($ch);
        curl_close($ch);
        return json_decode($content, true);

    }
    private function kirimPesan($pengaduan, $nohp)
    {
        $key = env('TELEGRAM_KEY', null);
        $chat = $this->getTelegram('https://api.telegram.org/' . $key . '/getUpdates', '');
        if ($chat['ok']) {
            $chat_id = $chat['result'][1]['message']['chat']['id'];
            $pesan = 'Hai Admin Desa Bangun Jaya | Ingin Mengadukan ' . $pengaduan . 'Segera Di Cek | NO:HP' . $nohp;
            return $this->getTelegram('https://api.telegram.org/' . $key . '/sendMessage', '?chat_id=' . $chat_id . '&text=' . $pesan);
        }
    }

}
