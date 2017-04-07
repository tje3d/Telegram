<?php

namespace Tje3d\Telegram\Methods;

use Tje3d\Telegram\Traits\FileMethod;
use Tje3d\Telegram\Traits\RepliableMethod;
use Tje3d\Telegram\Traits\SilentMethod;

class ChatAction extends MessageMethod
{
	/**
	 * Api name
	 * @return string
	 */
	public function api()
	{
		return 'sendChatAction';
	}

	/**
	 * Type of action to broadcast. Choose one, depending on what the user is about to receive:
	 * typing for text messages, upload_photo for photos, record_video or upload_video for videos,
	 * record_audio or upload_audio for audio files, upload_document for general files, find_location for location data.
	 * 
	 * @param  string $type
	 */
	public function action($type)
	{
		return $this->setConfig('action', $type);
	}

	public function typing()
	{
		return $this->action(__FUNCTION__);
	}

	public function upload_photo()
	{
		return $this->action(__FUNCTION__);
	}

	public function record_video()
	{
		return $this->action(__FUNCTION__);
	}

	public function upload_video()
	{
		return $this->action(__FUNCTION__);
	}

	public function record_audio()
	{
		return $this->action(__FUNCTION__);
	}

	public function upload_audio()
	{
		return $this->action(__FUNCTION__);
	}

	public function upload_document()
	{
		return $this->action(__FUNCTION__);
	}

	public function find_location()
	{
		return $this->action(__FUNCTION__);
	}
}