<?php

namespace Tje3d\Telegram\Methods;

/**
 * Use this method to get up to date information about the chat (current name of the user for one-on-one conversations, current username of a user, group or channel, etc.). Returns a Chat object on success.
 */
class GetChat extends BaseMethod
{
	/**
	 * Api name
	 * @return string
	 */
	public function api()
	{
		return 'getChat';
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