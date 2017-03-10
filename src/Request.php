<?php

namespace Tje3d\Telegram;

use GuzzleHttp\Exception\ClientException;
use Tje3d\Telegram\Contracts\Request as RequestBase;
use Tje3d\Telegram\Traits\Configurable;
use Tje3d\Telegram\Traits\PreparedRequests;

class Request implements RequestBase
{
    use Configurable, PreparedRequests;

    private $httpClient;
    private $base_url = 'https://api.telegram.org/bot';

    public function __construct($input = [])
    {
        if (isset($input['token'])) {
            $this->token($input['token']);
        }

        $this->httpClient = new \GuzzleHttp\Client();
    }

    public function apiUrl()
    {
        $url = $this->baseUrl() . $this->token . '/' . $this->api;

        if ($this->chatId != false) {
            $url = $url . '?chat_id=' . $this->chatId;
        }

        return $url;
    }

    public function baseUrl()
    {
    	return $this->base_url;
    }

    public function httpClient()
    {
    	return $this->httpClient;
    }

    public function __get($name)
    {
    	if (isset($this->{$name})) {
    		return $this->{$name};
    	} else {
    		return $this->config($name, false);
    	}
    }

    public function __call($method, $params)
    {
    	if (method_exists($this, $method)) {
    		return call_user_func_array([$this, $method], $params);
    	} else {
    		$this->config([$method => array_pop($params)]);
    		return $this;
    	}
    }

    public function post()
    {
    	$BodyType = ($this->hasFile || $this->multipart) ? 'multipart' : 'json';

        try {
        	$response = (string) $this->httpClient()
	            ->request('POST', $this->apiUrl(), [
	            	$BodyType => $this->body ?: []
	        	])
	            ->getBody();
        } catch (ClientException $e) {
        	$response = (string)$e->getResponse()->getBody();
        }

        return json_decode($response);
    }
}
