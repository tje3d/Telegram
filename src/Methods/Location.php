<?php

namespace Tje3d\Telegram\Methods;

use Tje3d\Telegram\Traits\FileMethod;
use Tje3d\Telegram\Traits\RepliableMethod;
use Tje3d\Telegram\Traits\SilentMethod;

class Location extends MessageMethod
{
	use SilentMethod, RepliableMethod;

	/**
	 * Api name
	 * @return string
	 */
	public function api()
	{
		return 'sendLocation';
	}

	/**
	 * Latitude of location
	 * 
	 * @param  float $latitude
	 */
	public function latitude($latitude)
	{
		return $this->setConfig('latitude', $latitude);
	}

	/**
	 * Longitude of location
	 * 
	 * @param  float $longitude
	 */
	public function longitude($longitude)
	{
		return $this->setConfig('longitude', $longitude);
	}
}