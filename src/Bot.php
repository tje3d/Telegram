<?php

namespace Tje3d\Telegram;

use Tje3d\Telegram\Contracts\Bot as BaseBot;
use Tje3d\Telegram\Traits\Configurable;

class Bot implements BaseBot
{
    use Configurable;

    public function token($token)
    {
        return $this->setConfig('token', $token);
    }

    public function getMe()
    {
    	// @todo
    }

    public function isValid()
    {
    	return $this->getMe() ? true : false;
    }
}
