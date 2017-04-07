<?php

namespace Tje3d\Telegram\Methods;

/**
 * Use this method to edit only the reply markup of messages sent by the bot or via the bot (for inline bots). On success, if edited message is sent by the bot, the edited Message is returned, otherwise True is returned.
 */
class EditMessageReplyMarkup extends BaseMethod
{
	/**
	 * Api name
	 * @return string
	 */
	public function api()
	{
		return 'editMessageReplyMarkup';
	}

	/**
	 * Required if inline_message_id is not specified. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
	 * @param  integer|string $id
	 */
	public function chat_id($id)
	{
		return $this->setConfig(__FUNCTION__, $id);
	}

	/**
	 * Required if inline_message_id is not specified. Identifier of the sent message
	 * @param  integer $id
	 */
	public function message_id($id)
	{
		return $this->setConfig(__FUNCTION__, $id);
	}

	/**
	 * Required if chat_id and message_id are not specified. Identifier of the inline message
	 * @param  integer $id
	 */
	public function inline_message_id($id)
	{
		return $this->setConfig(__FUNCTION__, $id);
	}

	/**
	 * A JSON-serialized object for an inline keyboard.
	 * @param  bool $bool
	 */
	public function reply_markup(InlineKeyboardMarkup $markup)
	{
		return $this->setConfig(__FUNCTION__, $markup->to_array());
	}
}