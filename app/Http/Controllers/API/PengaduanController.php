<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;
use Illuminate\Support\Str ;
use App\Pengaduan ;

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

        $bot = Telegram::getMe();
        return response()->json([
            'id' => $bot->getId(),
            'firstName' => $bot->getFirstName(),
            'username' => $bot->getUsername(),
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
        $this->kirimPesan($request->nama , $request->pengaduan , $request->nohp);
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

    private function getId()
    {
        $tele = Telegram::getUpdates();
        $chat_id = array();
        foreach ($tele as $item) {
            $newitem = $item['message']['chat']['id'];
            array_push($chat_id, $newitem);
        }
        return array_unique($chat_id);

    }

    private function kirimPesan($nama, $pengaduan, $no_hp)
    {
        foreach ($this->getId() as $key => $value) {
            Telegram::sendMessage([
                'chat_id' => $value,
                'text' => 'Hai Admin Nama :' . $nama . ' Ingin Mengadukan : ' . $pengaduan . ' Contact :  ' . $no_hp,
            ]);
        }

    }

}
