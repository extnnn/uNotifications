<?php

// Require psr-0 autoloader
require 'autoload.php';

$notifications =  new App\NotificationsController();

$orderId = 12345678;

$message = new StdClass;
$message->userId = 1;
$message->eventId = 1;
$message->title = 'Order complete';
$message->body = <<<MSG
Hello and thank you for your order!

We are happy to confirm that your order has been received and your payment has successfully processed.

Your order number is  $orderId
MSG;

// var_dump($message);

$result = $notifications->make($message);

var_dump($result);