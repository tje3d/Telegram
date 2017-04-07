<?php

namespace Tje3d\Telegram\Contracts;

interface Method
{
	function __construct($config = []);
	function fromArray(array $array);
	function toArray();
}
