<?php

use agreed\notification;
use session\notifier;
use session\session;

require __DIR__ . '/../vendor/autoload.php';

class greeting extends notification
{
	protected $message = 'Greetings traveller';
}

$session = new session;

$notify = new notifier ( $session );
$notification = new greeting;
$notify->success ( $notification );

var_dump ( $_SESSION );