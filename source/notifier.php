<?php

namespace session;

use agreed\notification;

class notifier implements \agreed\notifier
{
	private $session = null;

	public function __construct ( session $session )
	{
		$this->session = $session;
	}

	public function success ( notification $notification )
	{
		$notification->stating ( 'success' );
		$this->session->flash ( 'notification', $notification );
	}

	public function notice ( notification $notification )
	{
		$notification->stating ( 'notice' );
		$this->session->flash ( 'notification', $notification );
	}

	public function warning ( notification $notification )
	{
		$notification->stating ( 'warning' );
		$this->session->flash ( 'notification', $notification );
	}

	public function error ( notification $notification )
	{
		$notification->stating ( 'error' );
		$this->session->flash ( 'notification', $notification );
	}
}