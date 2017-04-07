<?php

namespace Tje3d\Telegram\Methods;

/**
 * Use this method to get the number of members in a chat. Returns Int on success.
 */
class GetChatMembersCount extends BaseMethod
{
	/**
	 * Api name
	 * @return string
	 */
	public function api()
	{
		return 'getChatMembersCount';
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