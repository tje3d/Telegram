<?php

namespace Tje3d\Telegram\Messages;

use Tje3d\Telegram\Traits\FileMessage;
use Tje3d\Telegram\Traits\RepliableMessage;
use Tje3d\Telegram\Traits\SilentMessage;

class Venue extends Message
{
	use SilentMessage, RepliableMessage;

	/**
	 * Api name
	 * @return string
	 */
	public function api()
	{
		return 'sendVenue';
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

	/**
	 * Name of the venue
	 * 
	 * @param  string $title
	 */
	public function title($title)
	{
		return $this->setConfig('title', $title);
	}

	/**
	 * Address of the venue
	 * 
	 * @param  string $address
	 */
	public function address($address)
	{
		return $this->setConfig('address', $address);
	}

	/**
	 * Foursquare identifier of the venue
	 * 
	 * @param  string $square
	 */
	public function foursquare_id($square)
	{
		return $this->setConfig('square', $square);
	}
}