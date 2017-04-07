<?php

namespace Tje3d\Telegram\Methods;

use Tje3d\Telegram\Traits\FileMethod;
use Tje3d\Telegram\Traits\RepliableMethod;
use Tje3d\Telegram\Traits\SilentMethod;

class Contact extends MethodMethod
{
	use SilentMethod, RepliableMethod;

	/**
	 * Api name
	 * @return string
	 */
	public function api()
	{
		return 'sendContact';
	}

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