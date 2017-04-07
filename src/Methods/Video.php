<?php

namespace Tje3d\Telegram\Methods;

use Tje3d\Telegram\Traits\FileMethod;
use Tje3d\Telegram\Traits\RepliableMethod;
use Tje3d\Telegram\Traits\SilentMethod;

class Video extends MessageMethod
{
	use SilentMethod, RepliableMethod, FileMethod;

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