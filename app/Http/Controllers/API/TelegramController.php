<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Telegram\Bot\Api;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramController extends Controller
{

    public function testApi()
    {
        $tele = Telegram::getUpdates();
        $chat_id = array();
        foreach ($tele as $item) {
            $newitem = $item['message']['chat']['id'];
            array_push($chat_id, $newitem);
        }
        return array_unique($chat_id);
    }

    public function kirimPesan()
    {
        foreach ($this->testApi() as $value) {
            $response = Telegram::sendMessage([
                'chat_id' => $value,
                'text' => 'Test Satu kali Lagi',
            ]);
        }

        return response()->json([
            'status' => 'Pesan Telah Di Kirim',
        ]);
    }

    public function perintah()
    {
        $res = new Api(env('TELEGRAM_KEY'));
    }

    public function webhook(){
        $updates = Telegram::getWebhookUpdates();
        return $updates ;
    }



}
