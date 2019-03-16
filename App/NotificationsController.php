<?php
/**
 * Notifications Controller
 * Author: Olexiy Nakhod
 * Date: 2019-03-15
 */

namespace App;

use App\Helpers\Sender;
use App\Event;


class NotificationsController
{

    /**
     * send Notification to the customer
     * @param message as Object  with the next params
     * $message->userId
     * $message->eventId
     * $message->title
     * $message->body
     * @return Object with
     * name->result true or false
     * name->message
     */

    public function make($message)
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


            $userEventSendMethod = Event::getStatus($message->userId, $message->eventId);

            if (!empty($userEventSendMethod)) {

                foreach ($userEventSendMethod as $methodName => $methodStatus) {

                    if ($methodStatus == 'yes') {

                        $className = "App\\Helpers\\" . $methodName;
                        $sendmessage = new SendController(new $className);
                        if ($sendmessage->send($message)) {
                            $sendResult->result = true;
                            $sendResult->message = $sendResult->message . ' Notifications for user id: ' . $message->userId . ' with method ' . $methodName . ' has been sent' . PHP_EOL;
                        }

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

    }

}