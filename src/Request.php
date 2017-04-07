<?php

namespace Tje3d\Telegram;

use Tje3d\Telegram\Contracts\Bot;
use Tje3d\Telegram\Contracts\MessageMethod;
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

    /**
     * Return api url + token + chat_id
     * @return string
     */
    private function apiUrl()
    {
    	$url = $this->url . $this->bot->getConfig('token') . '/' . $this->getConfig('api');

        if ($this->getConfig('chat_id')) {
            $url = $url . '?chat_id=' . $this->getConfig('chat_id');
        }

        return $url;
    }

    /**
     * Set bot to send request via bot
     * @param  Bot    $bot
     */
    public function bot(Bot $bot)
    {
        $this->bot = $bot;
        return $this;
    }

    /**
     * Set api name
     * @param  string $name
     */
    public function api($name)
    {
        return $this->setConfig('api', $name);
    }

    /**
     * Set chat_id
     * @param  integer $id
     */
    public function chat_id($id)
    {
        return $this->setConfig('chat_id', $id);
    }

    /**
     * Set request hasFile
     * So request type would change to multipart
     */
    public function hasFile()
    {
        return $this->setConfig('hasFile', true);
    }

    /**
     * Set body of request
     */
    public function body($value)
    {
        return $this->setConfig('body', $value);
    }

    /**
     * Send a method
     * @param  MessageMethod $message
     */
    public function sendMethod(MessageMethod $message)
    {
    	return $this->body($message->toArray())
    		->api($message->api())
    		->send();
    }

    /**
     * Send request to apiUrl
     */
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
