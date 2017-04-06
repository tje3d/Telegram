<?php

namespace Tje3d\Telegram\Traits;

trait Configurable
{
	protected $config = [];

	public function setConfig($key, $value = '')
	{
		if (is_array($key)) {
			foreach ($key as $loop_key => $loop_value) {
				$this->setConfig($loop_key, $loop_value);
			}

			return $this;
		}

		$this->config[$key] = $value;
		return $this;
	}

	public function hasConfig($key)
	{
		return isset($this->config[$key]);
	}

	public function getConfig($key, $default = '')
	{
		return $this->hasConfig($key) ? $this->config[$key] : $default;
	}
}
