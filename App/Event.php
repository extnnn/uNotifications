<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 2019-03-15
 * Time: 23:19
 */

namespace App;

class Event
{
    static $EVENTS =  [
            '1' => [

                '1' => [
                    'SendToSms' => 'yes',
                    'SendToEmail' => 'yes' ],
                '2' => [
                    'SendToSms' => 'yes',
                    'SendToEmail' => 'no' ],
                '22' => [
                    'SendToSms' => 'no',
                    'SendToEmail' => 'no' ]
            ],
            '2' => [

                '1' => [
                    'SendToSms' => 'no',
                    'SendToEmail' => 'yes' ],
                '2' => [
                    'SendToSms' => 'yes',
                    'SendToEmail' => 'yes' ],
                '22' => [
                    'SendToSms' => 'no',
                    'SendToEmail' => 'no' ]
            ]

        ];
    

    public static function getStatus ($userId, $eventId)
    {

        if ($eventId > 0) {

            return self::$EVENTS[$userId][$eventId];
        }
        else {
            return null;
        }

    }

}