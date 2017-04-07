<?php

namespace Tje3d\Telegram\Contracts;

interface Markup
{
	function toArray();
	function row();
	function addButton($config);
}
