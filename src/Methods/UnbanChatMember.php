<?php

namespace Tje3d\Telegram\Methods;

/**
 * Use this method to unban a previously kicked user in a supergroup. The user will not return to the group automatically, but will be able to join via link, etc. The bot must be an administrator in the group for this to work. Returns True on success.
 */
class UnbanChatMember extends BaseMethod
{
	/**
	 * Api name
	 * @return string
	 */
	public function api()
	{
		return 'unbanChatMember';
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