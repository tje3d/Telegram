<?php

namespace Tje3d\Telegram\Exceptions;

class TelegramResponseException extends \Exception
{
    /**
     * The input data
     */
    protected $data;

    public function __construct($data)
    {
        $this->data = json_decode($data);
    }

    /**
     * Full input, For debugging purpose
     */
    public function response()
    {
        return $this->data;
    }

    /**
     * Error Description
     */
    public function errorMessage()
    {
        return $this->data->description;
    }

    /**
     * Error Code
     */
    public function errorCode()
    {
        return $this->data->error_code;
    }
}
