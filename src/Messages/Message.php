<?php

namespace Tje3d\Telegram\Messages;

use Tje3d\Telegram\Contracts\Message as BaseMessage;
use Tje3d\Telegram\Traits\Configurable;

abstract class Message implements BaseMessage
{
	use Configurable;

	/**
	 * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
	 * 
	 * @param  integer $id
	 */
	public function chat_id($id)
	{
		return $this->setConfig('chat_id', $id);
	}

	/**
	 * Convert message to JSON
	 * @return [object]
	 */
	public function toJson()
	{
		$output = [];

		foreach ($this->config as $key => $val) {
			$output[$key] = $val;
		}

		return json_encode($output);
	}
}