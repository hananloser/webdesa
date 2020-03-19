<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramController extends Controller
{

    public function getId(){
        $res = Telegram::getUpdates();
        return $res ;
    }

    public function kirim(){

        $chat_id = $this->getId();
        $container = array();
        foreach ($chat_id as $key => $item) {
            $container[] = $item ;
        }
        return $container ;
    }



}
