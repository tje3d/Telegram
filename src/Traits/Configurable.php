<?php

namespace Tje3d\Telegram\Traits;

trait Configurable
{
	public $config;

	public function config($input, $default = '')
	{
		if (is_array($input)) {
			foreach ($input as $key => $val) {
				$this->config[$key] = $val;
			}
			return $this;
		}

		return isset($this->config[$input]) ? $this->config[$input] : $default;
	}

	public function configs(...$keys)
	{
		$Output = [];

		foreach ($keys as $key) {
			$Output[$key] = $this->config($key);
		}

		return $Output;
	}
}