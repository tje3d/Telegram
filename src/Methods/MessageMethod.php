<?php

namespace Tje3d\Telegram\Messages;

use Tje3d\Telegram\Contracts\MessageMethod as BaseMessageMethod;
use Tje3d\Telegram\Traits\Configurable;

abstract class MessageMethod implements BaseMessageMethod
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
	 * Convert message to array
	 * @return array
	 */
	public function toArray()
	{
		$output = [];

		foreach ($this->config as $key => $val) {
			$output[$key] = $val;
		}

		return $output;
	}
}