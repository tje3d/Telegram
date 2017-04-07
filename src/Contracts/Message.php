<?php

namespace Tje3d\Telegram\Contracts;

interface Message
{
	function chat_id($id);
	function toArray();
}
