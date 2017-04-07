<?php

namespace Tje3d\Telegram\Methods;

use Tje3d\Telegram\Contracts\MessageMethod as BaseMessageMethod;
use Tje3d\Telegram\Traits\Configurable;

abstract class MessageMethod extends BaseMethod implements BaseMessageMethod
{
	/**
	 * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
	 * 
	 * @param  integer $id
	 */
	public function chat_id($id)
	{
		return $this->setConfig('chat_id', $id);
	}
}