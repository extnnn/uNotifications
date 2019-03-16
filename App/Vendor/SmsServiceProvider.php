<?php
/**
 * Send to SMS external library connector
 * Author: Olexiy Nakhod
 * Date: 2019-03-15
 */

namespace App\Vendor;

class SmsServiceProvider{

    public static function send ($phone, $message){

        return true;

    }

}