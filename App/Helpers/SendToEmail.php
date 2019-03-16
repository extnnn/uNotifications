<?php
/**
 * Send to email implementaions
 * Author: Olexiy Nakhod
 * Date: 2019-03-15
 */


namespace App\Helpers;

use App\Vendor\EmailServiceProvider;

class SendToEmail implements Sender
{

    /**
     * send message thru email
     * @param $message as Object
     * @return true or false
     */


    public function send($message)
    {

        return EmailServiceProvider::send($message->address, $message->subject, $message->text);

    }
}