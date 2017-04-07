<?php

namespace Tje3d\Telegram\Contracts;

use Tje3d\Telegram\Contracts\Bot;
use Tje3d\Telegram\Contracts\Message;

interface Request
{
	public function __construct(Bot $bot = null);
	public function api($name);
	public function bot(Bot $bot);
	public function sendMessage(Message $message);
	public function send();
}
