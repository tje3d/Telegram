<?php

namespace Tje3d\Telegram;

use Tje3d\Telegram\Contracts\Bot as BaseBot;
use Tje3d\Telegram\Contracts\Message;
use Tje3d\Telegram\Request;
use Tje3d\Telegram\Traits\Configurable;

class Bot implements BaseBot
{
    use Configurable;

    protected $request;

    public function __construct($token = null)
    {
    	if ($token) {
    		$this->token($token);
    	}

    	$this->request = new Request($this);
    }

    public function token($token)
    {
        return $this->setConfig('token', $token);
    }

    public function getMe()
    {
    	return $this->sendMessage(new Messages\GetMe());
    }

    public function sendMessage(Message $message)
    {
    	return $this->request->sendMessage($message);
    }

    public function request()
    {
    	return new Request($this);
    }

    public function isValid()
    {
    	return isset($this->getMe()->ok);
    }
}
