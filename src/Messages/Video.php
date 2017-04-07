<?php

namespace Tje3d\Telegram\Messages;

use Tje3d\Telegram\Traits\FileMessage;
use Tje3d\Telegram\Traits\RepliableMessage;
use Tje3d\Telegram\Traits\SilentMessage;

class Video extends Message
{
	use SilentMessage, RepliableMessage, FileMessage;

	/**
	 * Api name
	 * @return string
	 */
	public function api()
	{
		return 'sendVideo';
	}

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
	 * Video width
	 * 
	 * @param  integer $width
	 */
	public function width($width)
	{
		return $this->setConfig('width', $width);
	}

	/**
	 * Video height
	 * 
	 * @param  integer $height
	 */
	public function height($height)
	{
		return $this->setConfig('height', $height);
	}
}