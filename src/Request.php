<?php

namespace Tje3d\Telegram;

use Tje3d\Telegram\Bot;
use Tje3d\Telegram\Contracts\Request as BaseRequest;

class Request implements BaseRequest
{
	protected $url = '';
	protected $bot;
	protected $api;
	protected $handler;

	public function __construct(Bot $bot = null)
	{
		if ($bot) {
			$this->bot($bot);
		}

		$this->handler = new \GuzzleHttp\Client;
	}

	public function bot(Bot $bot)
	{
		$this->bot = $bot;
		return $this;
	}

	public function api($name)
	{
		$this->api = $name;
		return $this;
	}

	public function send(Message $message)
	{
		if (!$this->bot) {
			throw new \Exception('Valid bot required');
		}

		if (!$this->api) {
			throw new \Exception('Please set a api name');
		}

		// @todo
	}
}