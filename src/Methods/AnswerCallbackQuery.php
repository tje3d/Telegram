<?php

namespace Tje3d\Telegram\Methods;

/**
 * Use this method to send answers to callback queries sent from inline keyboards. The answer will be displayed to the user as a notification at the top of the chat screen or as an alert. On success, True is returned.
 *
 * Alternatively, the user can be redirected to the specified Game URL. For this option to work, you must first create a game for your bot via BotFather and accept the terms. Otherwise, you may use links like telegram.me/your_bot?start=XXXX that open your bot with a parameter.
 */
class AnswerCallbackQuery extends BaseMethod
{
	/**
	 * Api name
	 * @return string
	 */
	public function api()
	{
		return 'answerCallbackQuery';
	}

	/**
	 * Unique identifier for the query to be answered
	 * 
	 * @param  string $id
	 */
	public function callback_query_id($id)
	{
		return $this->setConfig('callback_query_id', $id);
	}

	/**
	 * Text of the notification. If not specified, nothing will be shown to the user, 0-200 characters
	 * 
	 * @param  string $text
	 */
	public function text($text)
	{
		return $this->setConfig('text', $text);
	}

	/**
	 * If true, an alert will be shown by the client instead of a notification at the top of the chat screen. Defaults to false.
	 * 
	 * @param  bool $bool
	 */
	public function show_alert($bool)
	{
		return $this->setConfig('show_alert', $bool);
	}

	/**
	 * URL that will be opened by the user's client. If you have created a Game and accepted the conditions via @Botfather, specify the URL that opens your game – note that this will only work if the query comes from a callback_game button.
	 * Otherwise, you may use links like telegram.me/your_bot?start=XXXX that open your bot with a parameter.
	 * 
	 * @param  string $url
	 */
	public function url($url)
	{
		return $this->setConfig('url', $url);
	}

	/**
	 * The maximum amount of time in seconds that the result of the callback query may be cached client-side. Telegram apps will support caching starting in version 3.14. Defaults to 0.
	 * 
	 * @param  integer $second
	 */
	public function cache_time($second)
	{
		return $this->setConfig('cache_time', $second);
	}
}