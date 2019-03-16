<?php
/**
 * Events class
 * Author: Olexiy Nakhod
 * Date: 2019-03-15
 */

namespace App;

class Event
{

    /**
     * storing settings for the user with notifications methods
     *
     */

    static $EVENTS = [
        '1' => [

            '1' => [
                'SendToSms' => 'yes',
                'SendToEmail' => 'yes'],
            '2' => [
                'SendToSms' => 'yes',
                'SendToEmail' => 'no'],
            '22' => [
                'SendToSms' => 'no',
                'SendToEmail' => 'no']
        ],
        '2' => [

            '1' => [
                'SendToSms' => 'no',
                'SendToEmail' => 'yes'],
            '2' => [
                'SendToSms' => 'yes',
                'SendToEmail' => 'yes'],
            '22' => [
                'SendToSms' => 'no',
                'SendToEmail' => 'no']
        ]

    ];


    /*
     * return status  of the notification settings for user and even
     * @param
     * user ID
     * event ID
     * @return array with notification method and status
     *
     */

    public static function getStatus($userId, $eventId)
    {

        if ($eventId > 0) {

            return self::$EVENTS[$userId][$eventId];
        } else {
            return null;
        }

    }

}