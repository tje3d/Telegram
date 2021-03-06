<?php

namespace Tje3d\Telegram\Contracts;

use Tje3d\Telegram\Contracts\Bot;
use Tje3d\Telegram\Contracts\Method;

interface Request
{
	public function __construct(Bot $bot = null);
	public function apiUrl();
	public function bot(Bot $bot);
	public function api($name);
	public function chat_id($id);
	public function hasFile();
	public function body($value);
	public function sendMethod(Method $message);
	public function send();
}
