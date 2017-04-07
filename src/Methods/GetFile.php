<?php

namespace Tje3d\Telegram\Methods;

/**
 * Use this method to get basic info about a file and prepare it for downloading. For the moment, bots can download files of up to 20MB in size. On success, a File object is returned. The file can then be downloaded via the link https://api.telegram.org/file/bot<token>/<file_path>, where <file_path> is taken from the response. It is guaranteed that the link will be valid for at least 1 hour. When the link expires, a new one can be requested by calling getFile again.
 * 
 * @note This function may not preserve the original file name and MIME type. You should save the file's MIME type and name (if available) when the File object is received.
 */
class GetFile extends BaseMethod
{
	/**
	 * Api name
	 * @return string
	 */
	public function api()
	{
		return 'getFile';
	}

	/**
	 * File identifier to get info about
	 * 
	 * @param  integer $id
	 */
	public function file_id($id)
	{
		return $this->setConfig('file_id', $id);
	}
}