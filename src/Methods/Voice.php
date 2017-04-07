<?php

namespace Tje3d\Telegram\Methods;

use Tje3d\Telegram\Traits\FileMethod;
use Tje3d\Telegram\Traits\RepliableMethod;
use Tje3d\Telegram\Traits\SilentMethod;

class Voice extends MessageMethod
{
	use SilentMethod, RepliableMethod, FileMethod;

	/**
	 * Api name
	 * @return string
	 */
	public function api()
	{
		return 'sendVoice';
	}

	/**
	 * Audio file to send. Pass a file_id as String to send a file that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data. More info on Sending Files »
	 * 
	 * @param  string $path
	 */
	public function voice($path)
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
}