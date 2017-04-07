<?php

namespace Tje3d\Telegram\Methods;

use Tje3d\Telegram\Traits\FileMethod;
use Tje3d\Telegram\Traits\RepliableMethod;
use Tje3d\Telegram\Traits\SilentMethod;

class Audio extends MethodMethod
{
	use SilentMethod, RepliableMethod, FileMethod;

	/**
	 * Api name
	 * @return string
	 */
	public function api()
	{
		return 'sendAudio';
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