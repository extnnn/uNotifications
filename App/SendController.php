<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 2019-03-15
 * Time: 23:41
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


    public function send ($message)
    {

        return $this->sender->send($message);

    }

}