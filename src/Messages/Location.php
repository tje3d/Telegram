<?php

namespace Tje3d\Telegram\Messages;

use Tje3d\Telegram\Traits\FileMessage;
use Tje3d\Telegram\Traits\RepliableMessage;
use Tje3d\Telegram\Traits\SilentMessage;

class Location extends Message
{
	use SilentMessage, RepliableMessage;

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