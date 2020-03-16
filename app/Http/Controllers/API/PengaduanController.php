<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

        return response()->json([
            'status' => 'oke',
        ]);

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
            'nohp' => 'required|numeric|min:11',
            'pengaduan' => 'required',
        ]);

        Pengaduan::create([
            'no_pengaduan' => Str::uuid(5),
            'nama' => $request->nama,
            'nohp' => $request->nohp,
            'pengaduan' => $request->pengaduan,
        ]);

        $aduan = Pengaduan::latest()->first();
        return $this->kirimPesan($aduan->no_pengaduan, $aduan->pengaduan, $aduan->nohp);

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
    private function kirimPesan($nope, $pengaduan, $nohp)
    {

        $key = env('TELEGRAM_KEY', null);

        $chat = $this->getTelegram('https://api.telegram.org/' . $key . '/getUpdates', '');

        if ($chat['ok']) {
            $chat_id = $chat['result'][0]['message']['chat']['id'];
            $pesan = 'Hai Admin Desa Bangun Jaya ' . $nope . ' | Ingin Mengadukan ' . $pengaduan . 'Segera Di Cek | NO:HP' . $nohp;
            return $this->getTelegram('https://api.telegram.org/' . $key . '/sendMessage', '?chat_id=' . $chat_id . '&text=' . $pesan);
        }
    }

}