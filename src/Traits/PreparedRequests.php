<?php

namespace Tje3d\Telegram\Traits;

trait PreparedRequests
{
    public function getUpdates()
    {
        return $this->api(__FUNCTION__)->body([
            'offset'          => $this->offset ?: '',
            'limit'           => $this->limit ?: '',
            'timeout'         => $this->timeout ?: '',
            'allowed_updates' => $this->allowed_updates ?: '',
        ])->post();
    }

    public function setWebhook($url)
    {
        return $this->api(__FUNCTION__)->body(['url' => $url])->post();
    }

    public function deleteWebhook()
    {
        return $this->api(__FUNCTION__)->post();
    }

    public function getWebhookInfo()
    {
        return $this->api(__FUNCTION__)->post();
    }

    public function getMe()
    {
        return $this->api(__FUNCTION__)->post();
    }

    public function forwardMessage()
    {
        return $this->api(__FUNCTION__)->body([
            'chat_id'              => $this->chat_id,
            'from_chat_id'         => $this->from_chat_id,
            'disable_notification' => $this->disable_notification ?: '',
            'message_id'           => $this->message_id ?: '',
        ])->post();
    }

    public function sendMessage()
    {
        return $this->api(__FUNCTION__)->body([
            'chat_id'                  => $this->chat_id,
            'text'                     => $this->text,
            'parse_mode'               => $this->parse_mode ?: '',
            'disable_web_page_preview' => $this->disable_web_page_preview ?: '',
            'disable_notification'     => $this->disable_notification ?: '',
            'reply_to_message_id'      => $this->reply_to_message_id ?: '',
            'reply_markup'             => $this->reply_markup ?: '',
        ])->post();
    }

    public function sendPhoto()
    {
        $Photo  = $this->photo;
        $IsFile = is_file($Photo);

        $Body          = $this->configs('chat_id', 'caption', 'disable_notification', 'reply_to_message_id', 'reply_markup');
        $Body['photo'] = $IsFile ? file_get_contents($Photo) : $Photo;

        return $this->api(__FUNCTION__)->body($Body)->hasFile()->post();
    }

    public function sendAudio()
    {
        $audio  = $this->audio;
        $IsFile = is_file($audio);

        $Body          = $this->configs('chat_id', 'caption', 'duration', 'performer', 'title', 'disable_notification', 'reply_to_message_id', 'reply_markup');
        $Body['audio'] = $IsFile ? file_get_contents($audio) : $audio;

        return $this->api(__FUNCTION__)->body($Body)->hasFile()->post();
    }

    public function sendDocument()
    {
        $document = $this->document;
        $IsFile   = is_file($document);

        $Body          = $this->configs('chat_id', 'caption', 'disable_notification', 'reply_to_message_id', 'reply_markup');
        $Body['document'] = $IsFile ? file_get_contents($document) : $document;

        return $this->api(__FUNCTION__)->body($Body)->hasFile()->post();
    }

    public function sendSticker()
    {
        $sticker = $this->sticker;
        $IsFile  = is_file($sticker);

        $Body          = $this->configs('chat_id', 'caption', 'disable_notification', 'reply_to_message_id', 'reply_markup');
        $Body['sticker'] = $IsFile ? file_get_contents($sticker) : $sticker;

        return $this->api(__FUNCTION__)->body($Body)->hasFile()->post();
    }

    public function sendVideo()
    {
        $video  = $this->video;
        $IsFile = is_file($video);

        $Body          = $this->configs('chat_id', 'duration', 'width', 'height', 'caption', 'disable_notification', 'reply_to_message_id', 'reply_markup');
        $Body['video'] = $IsFile ? file_get_contents($video) : $video;

        return $this->api(__FUNCTION__)->body($Body)->hasFile()->post();
    }

    public function sendVoice()
    {
        $voice  = $this->voice;
        $IsFile = is_file($voice);

        $Body          = $this->configs('chat_id', 'caption', 'caption', 'disable_notification', 'reply_to_message_id', 'reply_markup');
        $Body['voice'] = $IsFile ? file_get_contents($voice) : $voice;

        return $this->api(__FUNCTION__)->body($Body)->hasFile()->post();
    }

    public function sendLocation()
    {
        return $this->api(__FUNCTION__)->body([
            'chat_id'              => $this->chat_id,
            'latitude'             => $this->latitude,
            'longitude'            => $this->longitude,
            'disable_notification' => $this->disable_notification ?: '',
            'reply_to_message_id'  => $this->reply_to_message_id ?: '',
            'reply_markup'         => $this->reply_markup ?: '',
        ])->post();
    }

    public function sendVenue()
    {
        return $this->api(__FUNCTION__)->body([
            'chat_id'              => $this->chat_id,
            'latitude'             => $this->latitude,
            'longitude'            => $this->longitude,
            'title'                => $this->title,
            'address'              => $this->address,
            'foursquare_id'        => $this->foursquare_id ?: '',
            'disable_notification' => $this->disable_notification ?: '',
            'reply_to_message_id'  => $this->reply_to_message_id ?: '',
            'reply_markup'         => $this->reply_markup ?: '',
        ])->post();
    }

    public function sendContact()
    {
        return $this->api(__FUNCTION__)->body([
            'chat_id'              => $this->chat_id,
            'phone_number'         => $this->phone_number,
            'first_name'           => $this->first_name,
            'last_name'            => $this->last_name ?: '',
            'disable_notification' => $this->disable_notification ?: '',
            'reply_to_message_id'  => $this->reply_to_message_id ?: '',
            'reply_markup'         => $this->reply_markup ?: '',
        ])->post();
    }

    public function sendChatAction()
    {
        return $this->api(__FUNCTION__)->body([
            'chat_id' => $this->chat_id,
            'action'  => $this->action,
        ])->post();
    }

    public function getUserProfilePhotos()
    {
        return $this->api(__FUNCTION__)->body([
            'user_id' => $this->user_id,
            'offset'  => $this->offset ?: '',
            'limit'   => $this->limit ?: '',
        ])->post();
    }

    public function getFile()
    {
        return $this->api(__FUNCTION__)->body(['file_id' => $this->file_id])->post();
    }

    public function kickChatMember()
    {
        return $this->api(__FUNCTION__)->body([
            'chat_id' => $this->chat_id,
            'user_id' => $this->user_id,
        ])->post();
    }

    public function leaveChat()
    {
        return $this->api(__FUNCTION__)->body(['chat_id' => $this->chat_id])->post();
    }

    public function unbanChatMember()
    {
        return $this->api(__FUNCTION__)->body([
            'chat_id' => $this->chat_id,
            'user_id' => $this->user_id,
        ])->post();
    }

    public function getChat()
    {
        return $this->api(__FUNCTION__)->body(['chat_id' => $this->chat_id])->post();
    }

    public function getChatAdministrators()
    {
        return $this->api(__FUNCTION__)->body(['chat_id' => $this->chat_id])->post();
    }

    public function getChatMembersCount()
    {
        return $this->api(__FUNCTION__)->body(['chat_id' => $this->chat_id])->post();
    }

    public function getChatMember()
    {
        return $this->api(__FUNCTION__)->body([
            'chat_id' => $this->chat_id,
            'user_id' => $this->user_id,
        ])->post();
    }

    public function answerCallbackQuery()
    {
        return $this->api(__FUNCTION__)->body([
            'callback_query_id' => $this->callback_query_id,
            'text'              => $this->text ?: '',
            'show_alert'        => $this->show_alert ?: false,
            'url'               => $this->url ?: '',
            'cache_time'        => $this->cache_time ?: 0,
        ])->post();
    }

    public function editMessageText()
    {
        return $this->api(__FUNCTION__)->body([
            'chat_id'                  => $this->chat_id,
            'message_id'               => $this->message_id ?: '',
            'inline_message_id'        => $this->inline_message_id ?: '',
            'text'                     => $this->text,
            'parse_mode'               => $this->parse_mode ?: '',
            'disable_web_page_preview' => $this->disable_web_page_preview ?: '',
            'reply_markup'             => $this->reply_markup ?: '',
        ])->post();
    }

    public function editMessageCaption()
    {
        return $this->api(__FUNCTION__)->body([
            'chat_id'           => $this->chat_id,
            'message_id'        => $this->message_id ?: '',
            'inline_message_id' => $this->inline_message_id ?: '',
            'caption'           => $this->caption,
            'reply_markup'      => $this->reply_markup ?: '',
        ])->post();
    }

    public function editMessagereply_markup()
    {
        return $this->api(__FUNCTION__)->body([
            'chat_id'           => $this->chat_id,
            'message_id'        => $this->message_id ?: '',
            'inline_message_id' => $this->inline_message_id ?: '',
            'reply_markup'      => $this->reply_markup ?: '',
        ])->post();
    }

    public function answerInlineQuery()
    {
        return $this->api(__FUNCTION__)->body([
            'inline_query_id'     => $this->inline_query_id,
            'results'             => $this->results,
            'cache_time'          => $this->cache_time ?: '',
            'is_personal'         => $this->is_personal ?: '',
            'next_offset'         => $this->next_offset ?: '',
            'switch_pm_text'      => $this->switch_pm_text ?: '',
            'switch_pm_parameter' => $this->switch_pm_parameter ?: '',
        ])->post();
    }

    public function sendGame()
    {
        return $this->api(__FUNCTION__)->body([
            'chat_id'              => $this->chat_id,
            'game_short_name'      => $this->game_short_name,
            'disable_notification' => $this->disable_notification ?: '',
            'reply_to_message_id'  => $this->reply_to_message_id ?: '',
            'reply_markup'         => $this->reply_markup ?: '',
        ])->post();
    }

    public function setGameScore()
    {
        return $this->api(__FUNCTION__)->body([
            'user_id'              => $this->user_id,
            'score'                => $this->score,
            'force'                => $this->force ?: '',
            'disable_edit_message' => $this->disable_edit_message ?: '',
            'chat_id'              => $this->chat_id ?: '',
            'message_id'           => $this->message_id ?: '',
            'inline_message_id'    => $this->inline_message_id ?: '',
        ])->post();
    }

    public function getGameHighScores()
    {
        return $this->api(__FUNCTION__)->body([
            'user_id'           => $this->user_id,
            'chat_id'           => $this->chat_id,
            'message_id'        => $this->message_id ?: '',
            'inline_message_id' => $this->inline_message_id ?: '',
        ])->post();
    }
}
