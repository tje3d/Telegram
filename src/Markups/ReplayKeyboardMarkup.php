<?php

namespace Tje3d\Telegram\Markups;

use Tje3d\Telegram\Buttons\KeyboardButton;
use Tje3d\Telegram\Contracts\KeyboardMarkup;
use Tje3d\Telegram\Traits\MarkupKeyboard;
use \Closure;

class ReplayKeyboardMarkup extends Markup implements KeyboardMarkup
{
	use MarkupKeyboard;

	public function buttonType()
	{
		return KeyboardButton::class;
	}

	public function to_array()
	{
		return ['keyboard' => $this->buttons];
	}
}