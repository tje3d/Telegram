<?php

namespace Tje3d\Telegram\Messages;

class GetMe extends Message
{
	/**
	 * Api name
	 * @return string
	 */
	public function api()
	{
		return 'getMe';
	}
}