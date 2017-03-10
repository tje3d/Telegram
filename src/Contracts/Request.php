<?php

namespace Tje3d\Telegram\Contracts;

interface Request
{
    public function httpClient();
    public function baseUrl();
	public function apiUrl();
	public function post();
}
