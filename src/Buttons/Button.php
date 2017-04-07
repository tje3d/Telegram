<?php

namespace Tje3d\Telegram\Buttons;

use Tje3d\Telegram\Contracts\Button;
use Tje3d\Telegram\Traits\Configurable;

abstract class Button implements BaseButton
{
	use Configurable;

	/**
	 * Label text on the button
	 * 
	 * @param  string $str
	 */
	public function text($str)
	{
		return $this->setConfig('text', $str);
	}

	/**
	 * Convert to array
	 * @return array
	 */
	public function toArray()
	{
		$output = [];

		foreach ($this->config as $key => $val) {
			$output[$key] = $val;
		}

		return $output;
	}
}
