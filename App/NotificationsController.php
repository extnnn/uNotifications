<?php
/*
 * Notifications Controller
 * Author: Olexiy Nakhod
 * Date: 2019-03-15
 */

namespace App;

use App\Helpers\Sender;


class NotificationsController {


    /*
     * send Notification to the customer
     * @param
     * @return
     *
     */

    public function make ($message)
    {

        $sendResult = new \StdClass();
        $sendResult->result = true;
        $sendResult->message = '';

        $user = User::find($message->userId);

        if (!$user) {

            $sendResult->result = FALSE;
            $sendResult->message = 'User not found with id: ' . $message->userId;

            return $sendResult;
        }

        try {

            $userEvent = Event::getStatus($message->userId, $message->event_id);

            if (!empty($userEvent)) {

                foreach ($userEvent as $eventName => $eventStatus)
                {
                    if ($eventStatus == 'yes') {

                        echo $eventName.'-'.$eventStatus;

                        $sendmessage = new SendController(new $eventName);
                        $sendmessage->send($message);

                        $sendResult->message = $sendResult->message . ' Notifications for user id: ' . $message->userId . 'has been sent';
                    }
                }

                return $sendResult;

            }

        } catch (\Exception $e) {
            $sendResult->general = new \stdClass();
            $sendResult->general->result = FALSE;
            $sendResult->general->message = $e->getMessage();

            return $sendResult;
        }


        return $sendResult;
    }



}