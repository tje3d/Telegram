<?php

namespace Tje3d\Telegram\Messages;

use Tje3d\Telegram\Traits\FileMessage;
use Tje3d\Telegram\Traits\RepliableMessage;
use Tje3d\Telegram\Traits\SilentMessage;

class Contact extends Message
{
	use SilentMessage, RepliableMessage;

	/**
	 * Contact's phone number
	 * 
	 * @param  string $number
	 */
	public function phone_number($number)
	{
		return $this->setConfig('phone_number', $number);
	}

	/**
	 * Contact's first name
	 * 
	 * @param  string $name
	 */
	public function first_name($name)
	{
		return $this->setConfig('first_name', $name);
	}

	/**
	 * Contact's last name
	 * 
	 * @param  string $name
	 */
	public function last_name($name)
	{
		return $this->setConfig('last_name', $name);
	}
}