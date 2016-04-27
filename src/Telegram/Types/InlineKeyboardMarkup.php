<?php

declare(strict_types = 1);

namespace unreal4u\TelegramAPI\Telegram\Types;

/**
 * This object represents an inline keyboard that appears right next to the message it belongs to.
 *
 * Warning: Inline keyboards are currently being tested and are only available in one-on-one chats (i.e., user-bot or
 * user-user in the case of inline bots).
 *
 * Note: This will only work in Telegram versions released after 9 April, 2016. Older clients will display unsupported
 * message.
 *
 * Objects defined as-is April 2016
 *
 * @see https://core.telegram.org/bots/api#replykeyboardhide
 */
class InlineKeyboardMarkup
{
    /**
     * Array of button rows, each represented by an Array of InlineKeyboardButton objects
     * @var array
     */
    public $inline_keyboard = [];

    protected function mapSubObjects(): array
    {
        return [
            'inline_keyboard' => 'Custom\\InlineKeyboardButtonArray',
        ];
    }
}
