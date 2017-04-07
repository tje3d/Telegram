<?php

namespace Tje3d\Telegram;

use Tje3d\Telegram\Contracts\Bot;
use Tje3d\Telegram\Contracts\Message;
use Tje3d\Telegram\Contracts\Request as BaseRequest;
use Tje3d\Telegram\Traits\Configurable;

class Request implements BaseRequest
{
    use Configurable;

    protected $url = 'https://api.telegram.org/bot';
    protected $bot;
    protected $handler;

    public function __construct(Bot $bot = null)
    {
        if ($bot) {
            $this->bot($bot);
        }

        $this->handler = new \GuzzleHttp\Client;
    }

    private function apiUrl()
    {
    	$url = $this->url . $this->bot->getConfig('token') . '/' . $this->getConfig('api');

        if ($this->getConfig('chat_id')) {
            $url = $url . '?chat_id=' . $this->getConfig('chat_id');
        }

        return $url;
    }

    public function bot(Bot $bot)
    {
        $this->bot = $bot;
        return $this;
    }

    public function api($name)
    {
        return $this->setConfig('api', $name);
    }

    public function chat_id($id)
    {
        return $this->setConfig('chat_id', $id);
    }

    public function hasFile()
    {
        return $this->setConfig('hasFile', true);
    }

    public function body($value)
    {
        return $this->setConfig('body', $value);
    }

    public function sendMessage(Message $message)
    {
    	return $this->body($message->toArray())
    		->api($message->api())
    		->send();
    }

    public function send()
    {
        if (!$this->bot) {
            throw new \Exception('Valid bot required');
        }

        if (!$this->getConfig('api')) {
            throw new \Exception('Please set a api name');
        }

        $bodyType = $this->getConfig('hasFile') ? 'multipart' : 'json';

        try {
            $response = (string) $this->handler->request('POST', $this->apiUrl(), [
                    $bodyType => $this->getConfig('body', '') ?: [],
                ])
                ->getBody();
        } catch (ClientException $e) {
            $response = (string) $e->getResponse()->getBody();
        }

        return json_decode($response);
    }
}
