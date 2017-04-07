<?php

namespace Tje3d\Telegram\Messages;

use Tje3d\Telegram\Traits\SilentMessage;
use Tje3d\Telegram\Traits\RepliableMessage;

class Text extends Message
{
	use SilentMessage, RepliableMessage;

	/**
	 * Api name
	 * @return string
	 */
	public function api()
	{
		return 'sendMessage';
	}

	/**
	 * Text of the message to be sent
	 * 
	 * @param  string $text
	 */
	public function text($text)
	{
		return $this->setConfig('text', $text);
	}

	/**
	 * Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in your bot's message.
	 * 
	 * @param  string $mode
	 */
	public function parse_mode($mode = '')
	{
		return $this->setConfig('parse_mode', $mode == '' ?: ($mode == "HTML" ?: "Markdown"));
	}

	/**
	 * Disables link previews for links in this message
	 * 
	 * @param  bool $value
	 */
	public function disable_web_page_preview($value)
	{
		return $this->setConfig('disable_web_page_preview', $value);
	}
}