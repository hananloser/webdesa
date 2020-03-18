<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Telegram\Bot\Api;
use Telegram\Bot\Exceptions\TelegramSDKException;
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


    public function webhook(){
        $updates = Telegram::getWebhookUpdates();
        Telegram::commandsHandler(true);
        try {
            $bot = new Api(env('TELEGRAM_KEY'));
            return $bot->getLastResponse();

        }catch(TelegramSDKException $th) {
            return $th ;
        }

    }



}
