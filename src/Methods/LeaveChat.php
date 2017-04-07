<?php

namespace Tje3d\Telegram\Methods;

/**
 * Use this method for your bot to leave a group, supergroup or channel. Returns True on success.
 */
class LeaveChat extends BaseMethod
{
	/**
	 * Api name
	 * @return string
	 */
	public function api()
	{
		return 'leaveChat';
	}

	/**
	 * Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
	 * 
	 * @param  integer $id
	 */
	public function chat_id($id)
	{
		return $this->setConfig('chat_id', $id);
	}
}