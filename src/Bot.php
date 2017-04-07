<?php

namespace Tje3d\Telegram;

use Tje3d\Telegram\Contracts\Bot as BaseBot;
use Tje3d\Telegram\Contracts\MessageMethod;
use Tje3d\Telegram\Methods\GetMe;
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

    /**
     * Set bot token
     * @param  string $token
     */
    public function token($token)
    {
        return $this->setConfig('token', $token);
    }

    /**
     * Get new binded request
     */
    public function request()
    {
    	return new Request($this);
    }

    /**
     * Get information about bot
     */
    public function getMe()
    {
    	return $this->sendMethod(new GetMe());
    }

    /**
     * Is bot (token) still valid
     * @return boolean
     */
    public function isValid()
    {
    	return isset($this->getMe()->ok);
    }

    /**
     * Send a method via this bot
     * @param  MessageMethod $message
     */
    public function sendMethod(MessageMethod $message)
    {
    	return $this->request->sendMethod($message);
    }
}
