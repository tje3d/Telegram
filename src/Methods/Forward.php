<?php

namespace Tje3d\Telegram\Methods;

use Tje3d\Telegram\Traits\SilentMethod;

class Forward extends MessageMethod
{
	use SilentMethod;

	/**
	 * Api name
	 * @return string
	 */
	public function api()
	{
		return 'forwardMessage';
	}

	/**
	 * Unique identifier for the chat where the original message was sent (or channel username in the format @channelusername)
	 * 
	 * @param  [Integer|String] $value
	 */
	public function from_chat_id($value)
	{
		return $this->setConfig('from_chat_id', $value);
	}

	/**
	 * Message identifier in the chat specified in from_chat_id
	 * 
	 * @param  [integer] $id
	 */
	public function message_id($id)
	{
		return $this->setConfig('message_id', $id);
	}
}