<?php

namespace Tje3d\Telegram\Methods;

use Tje3d\Telegram\Markups\InlineKeyboardMarkup;

/**
 * Use this method to edit text and game messages sent by the bot or via the bot (for inline bots). On success, if edited message is sent by the bot, the edited Message is returned, otherwise True is returned.
 */
class EditMessageText extends BaseMethod
{
	/**
	 * Api name
	 * @return string
	 */
	public function api()
	{
		return 'editMessageText';
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
	 * New text of the message
	 * @param  string $text
	 */
	public function text($text)
	{
		return $this->setConfig(__FUNCTION__, $text);
	}

	/**
	 * Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in your bot's message.
	 * @param  string $type
	 */
	public function parse_mode($type)
	{
		return $this->setConfig(__FUNCTION__, $type);
	}

	/**
	 * Disables link previews for links in this message
	 * @param  bool $bool
	 */
	public function disable_web_page_preview($bool)
	{
		return $this->setConfig(__FUNCTION__, $bool);
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