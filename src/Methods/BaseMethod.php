<?php

namespace Tje3d\Telegram\Methods;

use Tje3d\Telegram\Contracts\Method;
use Tje3d\Telegram\Traits\Configurable;

abstract class BaseMethod implements Method
{
	use Configurable;

	/**
	 * Convert message to array
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