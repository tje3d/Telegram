<?php

namespace Tje3d\Telegram\Buttons;

class KeyboardButton extends Button
{
	/**
	 * Optional. If True, the user's phone number will be sent as a contact when the button is pressed. Available in private chats only
	 * 
	 * @param  bool $data
	 */
	public function request_contact($data)
	{
		return $this->setConfig('request_contact', $data);
	}

	/**
	 * Optional. If True, the user's current location will be sent when the button is pressed. Available in private chats only
	 * 
	 * @param  bool $data
	 */
	public function request_location($data)
	{
		return $this->setConfig('request_location', $data);
	}
}