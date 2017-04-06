<?php

namespace Tje3d\Telegram\Markups;

use Tje3d\Telegram\Contracts\Markup as BaseMarkup;
use Tje3d\Telegram\Traits\Configurable;

abstract class Markup implements BaseMarkup
{
	use Configurable;

	public function toJson()
	{
		return json_encode([]);
	}
}