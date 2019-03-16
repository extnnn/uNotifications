<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 2019-03-15
 * Time: 23:41
 */

namespace App;

use unity\App\Helpers\Sender;


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