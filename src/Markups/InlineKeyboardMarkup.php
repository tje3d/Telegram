<?php

namespace Tje3d\Telegram\Markups;

use Tje3d\Telegram\Buttons\InlineKeyboardButton;
use Tje3d\Telegram\Contracts\KeyboardMarkup;
use Tje3d\Telegram\Traits\MarkupKeyboard;

class InlineKeyboardMarkup extends Markup implements KeyboardMarkup
{
    use MarkupKeyboard;

    public function buttonType()
    {
        return InlineKeyboardButton::class;
    }

    public function to_array()
    {
        return ['inline_keyboard' => $this->buttons];
    }
}
