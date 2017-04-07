<?php

namespace Tje3d\Telegram\Methods;

use Tje3d\Telegram\Contracts\Method;
use Tje3d\Telegram\Traits\Configurable;

abstract class BaseMethod implements Method
{
	use Configurable;

	public function __construct($config = [])
	{
		$this->fromArray($config);
	}

	/**
	 * Import configuration from array
	 * @param array $array
	 */
	public function fromArray(array $array)
	{
		foreach ($array as $key => $val) {
			if (method_exists($this, $key)) {
				$this->$key($val);
			}
		}

		return $this;
	}

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