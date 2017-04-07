<?php

namespace Tje3d\Telegram\Methods;

use Tje3d\Telegram\Traits\FileMethod;
use Tje3d\Telegram\Traits\RepliableMethod;
use Tje3d\Telegram\Traits\SilentMethod;

class Photo extends MessageMethod
{
	use SilentMethod, RepliableMethod, FileMethod;

	/**
	 * Api name
	 * @return string
	 */
	public function api()
	{
		return 'sendPhoto';
	}
}