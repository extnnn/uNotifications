<?php
/**
 * Send to email implementaions
 * Author: Olexiy Nakhod
 * Date: 2019-03-15
 */

namespace App\Helpers;
use App\Vendor\SmsServiceProvider;

class SendToSms implements Sender {


    /**
     * send message thru SMS
     * @param $message as Object
     * @return true or false
     */

    public function send ($message){
 
        return SmsServiceProvider::send($message->address, $message->subject.$message->text);

    }
}
