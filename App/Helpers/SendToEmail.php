<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 2019-03-16
 * Time: 00:30
 */

namespace App\Helpers;
use App\Vendor\EmailServiceProvider;

class SendToEmail implements  Sender {

    public function send ($message){

        
        echo "email\n";
        return EmailServiceProvider::send($message->address, $message->subject, $message->text);

    }
}