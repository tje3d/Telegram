<?php

namespace Tje3d\Telegram;

use Tje3d\Telegram\Request as TelegramRequest;

class Telegram
{
    private $token = "";
    private $requestHandler;

    public function __construct($token = '')
    {
        $this
            ->token($token)
            ->setRequestHandler(TelegramRequest::class);
    }

    public function token($value)
    {
        $this->token = $value;
        return $this;
    }

    public function setRequestHandler($handler)
    {
        $this->requestHandler = $handler;
        return $this;
    }

    public function requestBuilder()
    {
        $request = new $this->requestHandler();
        $request->token($this->token);
        return $request;
    }

    public function webHook()
    {
    	return $this->request()->api($api)->message($input)->post();
    }
}
