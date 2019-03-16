<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 2019-03-16
 * Time: 00:29
 */

namespace App\Helpers;
use App\Vendor\SmsServiceProvider;

class SendToSms implements Sender {

    public function send ($message){
 
        return SmsServiceProvider::send($message->address, $message->subject.$message->text);

    }
}
