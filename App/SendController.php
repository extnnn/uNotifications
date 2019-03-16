<?php
/**
 * Sender Controller
 * Author: Olexiy Nakhod
 * Date: 2019-03-15
 */

namespace App;

use App\Helpers\Sender;
use App\Helpers\SendToEmail;
use App\Helpers\SendToSms;

class SendController
{

    protected $sender;

    public function __construct(Sender $sender)
    {
        $this->sender = $sender;

    }


    /**
     * send message thru SMS
     * @param $message as Object
     * @return true or false
     */

    public function send($message)
    {

        return $this->sender->send($message);

    }

}