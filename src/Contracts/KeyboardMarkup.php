<?php

namespace Tje3d\Telegram\Contracts;
use \Closure;

interface KeyboardMarkup
{
	function row(Closure $closure);
	function addButton($config);
	function buttonType();
}
