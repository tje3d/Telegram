<?php

namespace Tje3d\Telegram\Messages;

use Tje3d\Telegram\Traits\FileMessage;
use Tje3d\Telegram\Traits\RepliableMessage;
use Tje3d\Telegram\Traits\SilentMessage;

class Audio extends Message
{
	use SilentMessage, RepliableMessage, FileMessage;

	/**
	 * Duration of the audio in seconds
	 * 
	 * @param  integer $seconds
	 */
	public function duration($seconds)
	{
		return $this->setConfig('duration', $seconds);
	}

	/**
	 * Performer
	 * 
	 * @param  string $name
	 */
	public function performer($name)
	{
		return $this->setConfig('performer', $name);
	}

	/**
	 * Title
	 * 
	 * @param  string $name
	 */
	public function title($name)
	{
		return $this->setConfig('title', $name);
	}
}