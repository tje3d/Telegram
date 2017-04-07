<?php

namespace Tje3d\Telegram\Methods;

class GetUserProfilePhotos extends BaseMethod
{
	/**
	 * Api name
	 * @return string
	 */
	public function api()
	{
		return 'getUserProfilePhotos';
	}

	/**
	 * Unique identifier of the target user
	 * 
	 * @param  integer $id
	 */
	public function user_id($id)
	{
		return $this->setConfig('user_id', $id);
	}

	/**
	 * Sequential number of the first photo to be returned. By default, all photos are returned.
	 * 
	 * @param  integer $offset
	 */
	public function offset($offset)
	{
		return $this->setConfig('offset', $offset);
	}

	/**
	 * Limits the number of photos to be retrieved. Values between 1—100 are accepted. Defaults to 100.
	 * 
	 * @param  integer $limit
	 */
	public function limit($limit)
	{
		return $this->setConfig('limit', $limit);
	}
}