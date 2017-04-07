<?php

namespace Tje3d\Telegram\Markups;

use Tje3d\Telegram\Contracts\Markup as BaseMarkup;
use Tje3d\Telegram\Traits\Configurable;

abstract class Markup implements BaseMarkup
{
	use Configurable;

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