<?php

namespace Tje3d\Telegram\Traits;

trait FileMethod
{
    /**
     * File Path
     *
     * @param  string $path
     */
    public function file($path, $name = 'file')
    {
        return $this->setConfig('file', [
            'name'     => $name,
            'contents' => fopen($path, 'r'),
            'filename' => pathinfo($path, PATHINFO_BASENAME),
        ])
            ->setConfig('hasFile', true);
    }

    /**
     * Photo caption (may also be used when resending photos by file_id), 0-200 characters
     *
     * @param  string $str
     */
    public function caption($str)
    {
        return $this->setConfig('caption', $str);
    }
}
