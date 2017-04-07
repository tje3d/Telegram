# Telegram Bot API
PHP Telegram Bot API
# Installation
`composer require tje3d/telegram`
# Examples
### Initialize a Bot
```
$bot = new \Tje3d\Telegram\Bot($token);
$info = $bot->getMe();
print_r($info);
```
### Set Web Hook
```
$bot->setWebhook('https://sld.tld');
```

### Get Updates
```
$response = $bot->getUpdates();
...
$response = $bot->getUpdates($offset=0, $limit=100, $timeout=10); // Long pull
```

### Send text message (known as sendMessage)
```
$bot->sendMethod(
	(new \Tje3d\Telegram\Methods\Text())
	    ->text('test')
	    ->chat_id($chatId)
);
```

### Keyboard
```
@todo
```

### Photo, Audio, Video, Document ...
```
$bot->sendMethod(
	(new \Tje3d\Telegram\Methods\Photo)
		->chat_id($chatId)
		->photo(realpath('pic.png'))
);

...

$bot->sendMethod(
	(new \Tje3d\Telegram\Methods\Video)
		->chat_id($chatId)
		->video(realpath('video.mp4'))
		->duration(10) // optional
		->width(320) // optional
		->height(320) // optional
);

...

$bot->sendMethod(
	(new \Tje3d\Telegram\Methods\Audio)
		->chat_id($chatId)
		->audio(realpath('video.mp3'))
		->duration(30) // optional
		->performer('tje3d') // optional
		->title('Great music') // optional
);
...
```

### ChatAction
```
$bot->sendMethod(
	(new \Tje3d\Telegram\Methods\ChatAction)
		->chat_id($testChatId)
		->typing() // Could be: upload_photo, record_video, upload_video, record_audio, upload_audio, upload_document, find_location
);
```

# Contact me
You can contact me via [Telegram](https://telegram.me/tje3d) or [Email](mailto:tje3d@yahoo.com).