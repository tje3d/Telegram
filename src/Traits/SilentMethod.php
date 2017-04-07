<?php

namespace Tje3d\Telegram\Traits;

trait SilentMethod
{
	/**
	 * Sends the message silently. iOS users will not receive a notification, Android users will receive a notification with no sound.
	 * 
	 * @param  bool $value
	 */
	public function disable_notification($value)
	{
		return $this->setConfig('disable_notification', $value);
	}
}