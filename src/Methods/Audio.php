<?php

namespace Tje3d\Telegram\Methods;

use Tje3d\Telegram\Traits\FileMethod;
use Tje3d\Telegram\Traits\RepliableMethod;
use Tje3d\Telegram\Traits\SilentMethod;

class Audio extends MessageMethod
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
	 * Audio file to send. Pass a file_id as String to send an audio file that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get an audio file from the Internet, or upload a new one using multipart/form-data. More info on Sending Files »
	 * 
	 * @param  string $path
	 */
	public function audio($path)
	{
		return $this->file($path, __FUNCTION__);
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