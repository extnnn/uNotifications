<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 2019-03-15
 * Time: 20:19
 */

namespace App\Helpers;

use unity\App\Vendor\SmsServiceProvider;
use unity\App\Vendor\EmailServiceProvider;


interface Sender {

    public function send ($message);
}


