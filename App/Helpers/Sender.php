<?php
/**
 * Sender Interface
 * Author: Olexiy Nakhod
 * Date: 2019-03-15
 */


namespace App\Helpers;


interface Sender {

    /**
     * send message interface
     * @param $message as Object
     */

    public function send ($message);
}


