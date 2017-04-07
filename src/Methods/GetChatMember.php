<?php

namespace Tje3d\Telegram\Methods;

/**
 * Use this method to get information about a member of a chat. Returns a ChatMember object on success.
 */
class GetChatMember extends BaseMethod
{
	/**
	 * Api name
	 * @return string
	 */
	public function api()
	{
		return 'getChatMember';
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

	/**
	 * Unique identifier of the target user
	 * 
	 * @param  integer $id
	 */
	public function user_id($id)
	{
		return $this->setConfig('user_id', $id);
	}
}