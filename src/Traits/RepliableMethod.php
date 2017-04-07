<?php

namespace Tje3d\Telegram\Traits;

use Tje3d\Telegram\Contracts\Markup;

trait RepliableMethod
{
	/**
	 * If the message is a reply, ID of the original message
	 * 
	 * @param  integer $id
	 */
	public function reply_to_message_id($id)
	{
		return $this->setConfig('reply_to_message_id', $id);
	}

	/**
	 * Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user.
	 * 
	 * @param  Markup $markup
	 */
	public function reply_markup(Markup $markup)
	{
		return $this->setConfig('reply_markup', (object)$markup->to_array());
	}
}