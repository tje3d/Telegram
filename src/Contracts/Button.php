<?php

namespace Tje3d\Telegram\Contracts;

interface Button
{
	public function text($str);
	public function toArray();
}
