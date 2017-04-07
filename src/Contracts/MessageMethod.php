<?php

namespace Tje3d\Telegram\Contracts;

interface MessageMethod
{
	function chat_id($id);
	function toArray();
}
