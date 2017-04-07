<?php

namespace Tje3d\Telegram\Traits;

trait FileMethod
{
	/**
	 * File Path
	 * 
	 * @param  string $path
	 */
	public function file($path)
	{
		return $this
			->setConfig(__FUNCTION__, file_get_contents($path))
			->setConfig('hasFile', true);
	}

	/**
	 * Photo caption (may also be used when resending photos by file_id), 0-200 characters
	 * 
	 * @param  string $str
	 */
	public function caption($str)
	{
		return $this->setConfig('caption', $str);
	}
}