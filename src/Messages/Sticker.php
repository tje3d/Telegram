<?php

namespace Tje3d\Telegram\Messages;

use Tje3d\Telegram\Traits\FileMessage;
use Tje3d\Telegram\Traits\RepliableMessage;
use Tje3d\Telegram\Traits\SilentMessage;

class Sticker extends Message
{
	use SilentMessage, RepliableMessage, FileMessage;

	/**
	 * Api name
	 * @return string
	 */
	public function api()
	{
		return 'sendSticker';
	}
}