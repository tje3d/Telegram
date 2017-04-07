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
		return $this->setConfig(strtolower(__CLASS__), file_get_contents($path));
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