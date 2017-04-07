<?php

namespace Tje3d\Telegram\Traits;
use \Closure;

trait MarkupKeyboard
{
	protected $buttons = [];
	protected $lastRow = 0;

	public function row(Closure $closure)
	{
		$this->buttons[$this->lastRow] = [];
		$closure($this);
		$this->lastRow++;
		return $this;
	}

	public function addButton($config)
	{
		$class = $this->buttonType();
		$button = new $class;

		if (is_array($config)) {
			foreach ($config as $key => $val) {
				$button->$key($val);
			}
		} else {
			$button->text($config);
		}

		$this->buttons[$this->lastRow][] = $button->to_array();
		return $this;
	}
}
