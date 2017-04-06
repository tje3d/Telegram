<?php

namespace Tje3d\Telegram\Contracts;

interface Bot
{
	public function credentials();
	public function isValid();
	public function getMe();
}
