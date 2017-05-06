<?php

namespace Tje3d\Telegram\Markups;

use Tje3d\Telegram\Buttons\KeyboardButton;
use Tje3d\Telegram\Contracts\KeyboardMarkup;
use Tje3d\Telegram\Traits\MarkupKeyboard;

class ReplayKeyboardMarkup extends Markup implements KeyboardMarkup
{
    use MarkupKeyboard;

    public function buttonType()
    {
        return KeyboardButton::class;
    }

    /**
     * Optional. Requests clients to resize the keyboard vertically for optimal fit (e.g., make the keyboard smaller if there are just two rows of buttons). Defaults to false, in which case the custom keyboard is always of the same height as the app's standard keyboard.
     */
    public function resizeKeyboard($value)
    {
        return $this->setConfig('resize_keyboard', $value);
    }

    public function to_array()
    {
        return [
            'keyboard'        => $this->buttons,
            'resize_keyboard' => $this->getConfig('resize_keyboard', false)
        ];
    }
}
