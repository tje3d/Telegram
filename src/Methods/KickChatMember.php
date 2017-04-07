<?php

namespace Tje3d\Telegram\Methods;

/**
 * Use this method to kick a user from a group or a supergroup. In the case of supergroups, the user will not be able to return to the group on their own using invite links, etc., unless unbanned first. The bot must be an administrator in the group for this to work. Returns True on success.
 * 
 * @note This will method only work if the ‘All Members Are Admins’ setting is off in the target group. Otherwise members may only be removed by the group's creator or by the member that added them.
 */
class KickChatMember extends BaseMethod
{
	/**
	 * Api name
	 * @return string
	 */
	public function api()
	{
		return 'kickChatMember';
	}

	/**
	 * Unique identifier for the target group or username of the target supergroup (in the format @supergroupusername)
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