<?php

namespace Tje3d\Telegram\Contracts;

use Tje3d\Telegram\Contracts\MessageMethod;

interface Bot
{
	public function __construct($token = null);
	public function token($token);
	public function request();
	public function getMe();
	public function isValid();
	public function sendMethod(MessageMethod $message);
}
