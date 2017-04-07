<?php

namespace Tje3d\Telegram\Markups;
use Tje3d\Telegram\Buttons\InlineKeyboardButton;
use \Closure;

class InlineKeyboardMarkup extends Markup
{
	protected $buttons = [];
	protected $lastRow = 0;

	public function row(Closure $closure)
	{
		$this->buttons[$this->lastRow] = [];
		$closure($this);
		$this->lastRow++;
	}

	public function addButton($config)
	{
		$button = new InlineKeyboardButton;

		foreach ($config as $key => $val) {
			$button->$key($val);
		}

		$this->buttons[$this->lastRow][] = $button;
		return $this;
	}
}