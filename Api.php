<?php /** @noinspection PhpOptionalBeforeRequiredParametersInspection */

//functions automatically generated from https://core.telegram.org/bots/api
//generator source code https://github.com/davtur19/TuriBotGen
function Request(string $method, array $args = [])
    {
      
      $api = "1727027236:AAE1n6hLGrloh_JcV_My3tm3godB5u7j7xU";
        $url = "https://api.telegram.org/bot". $api ."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$args);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}}

       function debug($chat_id, ...$vars): bool
    {
        foreach ($vars as $debug) {
            $str = var_export($debug, true);
            $array_str = str_split($str, 4050);

            foreach ($array_str as $value) {
                $result =  sendMessage($chat_id, "Debug:" . PHP_EOL . $value);
                if ($result->ok === false) {
                    return false;
                }
            }
        }

        return true;
    }


      function getUpdates(
        int $offset = null,
        int $limit = null,
        int $timeout = null,
        array $allowed_updates = null
    ) {
        $args = [];

        if ($offset !== null) {
            $args['offset'] = $offset;
        }

        if ($limit !== null) {
            $args['limit'] = $limit;
        }

        if ($timeout !== null) {
            $args['timeout'] = $timeout;
        }

        if ($allowed_updates !== null) {
            $args['allowed_updates'] = json_encode($allowed_updates);
        }

        return  Request('getUpdates', $args);
    }

      function setWebhook(
        string $url,
        \CURLFile $certificate = null,
        string $ip_address = null,
        int $max_connections = null,
        array $allowed_updates = null,
        bool $drop_pending_updates = null
    ) {
        $args = [
            'url' => $url
        ];

        if ($certificate !== null) {
            $args['certificate'] = $certificate;
        }

        if ($ip_address !== null) {
            $args['ip_address'] = $ip_address;
        }

        if ($max_connections !== null) {
            $args['max_connections'] = $max_connections;
        }

        if ($allowed_updates !== null) {
            $args['allowed_updates'] = json_encode($allowed_updates);
        }

        if ($drop_pending_updates !== null) {
            $args['drop_pending_updates'] = $drop_pending_updates;
        }

        return  Request('setWebhook', $args);
    }

      function deleteWebhook(
        bool $drop_pending_updates = null
    ) {
        $args = [];
        if ($drop_pending_updates !== null) {
            $args['drop_pending_updates'] = $drop_pending_updates;
        }

        return  Request('deleteWebhook', $args);
    }

      function getWebhookInfo()
    {
        return  Request('getWebhookInfo', []);
    }

      function getMe()
    {
        return  Request('getMe', []);
    }

      function logOut()
    {
        return  Request('logOut', []);
    }

      function close()
    {
        return  Request('close', []);
    }

      function sendMessage(
        $chat_id,
        string $text,
        string $parse_mode = null,
        $reply_markup = null,
        array $entities = null,
        bool $disable_web_page_preview = null,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null
    ) {
        $args = [
            'chat_id' => $chat_id,
            'text'    => $text
        ];

        if ($parse_mode !== null) {
            $args['parse_mode'] = $parse_mode;
        }

        if ($entities !== null) {
            $args['entities'] = json_encode($entities);
        }

        if ($disable_web_page_preview !== null) {
            $args['disable_web_page_preview'] = $disable_web_page_preview;
        }

        if ($disable_notification !== null) {
            $args['disable_notification'] = $disable_notification;
        }

        if ($reply_to_message_id !== null) {
            $args['reply_to_message_id'] = $reply_to_message_id;
        }

        if ($allow_sending_without_reply !== null) {
            $args['allow_sending_without_reply'] = $allow_sending_without_reply;
        }

        if ($reply_markup !== null) {
          $menu = $reply_markup;
            $args['reply_markup'] = $menu;
        }

        return  Request('sendMessage', $args);
    }

      function forwardMessage(
        $chat_id,
        $from_chat_id,
        bool $disable_notification = null,
        int $message_id
    ) {
        $args = [
            'chat_id'      => $chat_id,
            'from_chat_id' => $from_chat_id,
            'message_id'   => $message_id
        ];

        if ($disable_notification !== null) {
            $args['disable_notification'] = $disable_notification;
        }

        return  Request('forwardMessage', $args);
    }

      function copyMessage(
        $chat_id,
        $from_chat_id,
        int $message_id,
        string $caption = null,
        string $parse_mode = null,
        array $caption_entities = null,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
        array $reply_markup = null
    ) {
        $args = [
            'chat_id'      => $chat_id,
            'from_chat_id' => $from_chat_id,
            'message_id'   => $message_id
        ];

        if ($caption !== null) {
            $args['caption'] = $caption;
        }

        if ($parse_mode !== null) {
            $args['parse_mode'] = $parse_mode;
        }

        if ($caption_entities !== null) {
            $args['caption_entities'] = json_encode($caption_entities);
        }

        if ($disable_notification !== null) {
            $args['disable_notification'] = $disable_notification;
        }

        if ($reply_to_message_id !== null) {
            $args['reply_to_message_id'] = $reply_to_message_id;
        }

        if ($allow_sending_without_reply !== null) {
            $args['allow_sending_without_reply'] = $allow_sending_without_reply;
        }

        if ($reply_markup !== null) {
            $args['reply_markup'] = json_encode($reply_markup);
        }

        return  Request('copyMessage', $args);
    }

      function sendPhoto(
        $chat_id,
        $photo,
        string $caption = null,
        string $parse_mode = null,
        array $caption_entities = null,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
        array $reply_markup = null
    ) {
        $args = [
            'chat_id' => $chat_id,
            'photo'   => $photo
        ];

        if ($caption !== null) {
            $args['caption'] = $caption;
        }

        if ($parse_mode !== null) {
            $args['parse_mode'] = $parse_mode;
        }

        if ($caption_entities !== null) {
            $args['caption_entities'] = json_encode($caption_entities);
        }

        if ($disable_notification !== null) {
            $args['disable_notification'] = $disable_notification;
        }

        if ($reply_to_message_id !== null) {
            $args['reply_to_message_id'] = $reply_to_message_id;
        }

        if ($allow_sending_without_reply !== null) {
            $args['allow_sending_without_reply'] = $allow_sending_without_reply;
        }

        if ($reply_markup !== null) {
            $args['reply_markup'] = json_encode($reply_markup);
        }

        return  Request('sendPhoto', $args);
    }

      function sendAudio(
        $chat_id,
        $audio,
        string $caption = null,
        string $parse_mode = null,
        array $caption_entities = null,
        int $duration = null,
        string $performer = null,
        string $title = null,
        $thumb = null,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
        array $reply_markup = null
    ) {
        $args = [
            'chat_id' => $chat_id,
            'audio'   => $audio
        ];

        if ($caption !== null) {
            $args['caption'] = $caption;
        }

        if ($parse_mode !== null) {
            $args['parse_mode'] = $parse_mode;
        }

        if ($caption_entities !== null) {
            $args['caption_entities'] = json_encode($caption_entities);
        }

        if ($duration !== null) {
            $args['duration'] = $duration;
        }

        if ($performer !== null) {
            $args['performer'] = $performer;
        }

        if ($title !== null) {
            $args['title'] = $title;
        }

        if ($thumb !== null) {
            $args['thumb'] = $thumb;
        }

        if ($disable_notification !== null) {
            $args['disable_notification'] = $disable_notification;
        }

        if ($reply_to_message_id !== null) {
            $args['reply_to_message_id'] = $reply_to_message_id;
        }

        if ($allow_sending_without_reply !== null) {
            $args['allow_sending_without_reply'] = $allow_sending_without_reply;
        }

        if ($reply_markup !== null) {
            $args['reply_markup'] = json_encode($reply_markup);
        }

        return  Request('sendAudio', $args);
    }

      function sendDocument(
        $chat_id,
        $document,
        $thumb = null,
        string $caption = null,
        string $parse_mode = null,
        array $caption_entities = null,
        bool $disable_content_type_detection = null,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
        array $reply_markup = null
    ) {
        $args = [
            'chat_id'  => $chat_id,
            'document' => $document
        ];

        if ($thumb !== null) {
            $args['thumb'] = $thumb;
        }

        if ($caption !== null) {
            $args['caption'] = $caption;
        }

        if ($parse_mode !== null) {
            $args['parse_mode'] = $parse_mode;
        }

        if ($caption_entities !== null) {
            $args['caption_entities'] = json_encode($caption_entities);
        }

        if ($disable_content_type_detection !== null) {
            $args['disable_content_type_detection'] = $disable_content_type_detection;
        }

        if ($disable_notification !== null) {
            $args['disable_notification'] = $disable_notification;
        }

        if ($reply_to_message_id !== null) {
            $args['reply_to_message_id'] = $reply_to_message_id;
        }

        if ($allow_sending_without_reply !== null) {
            $args['allow_sending_without_reply'] = $allow_sending_without_reply;
        }

        if ($reply_markup !== null) {
            $args['reply_markup'] = json_encode($reply_markup);
        }

        return  Request('sendDocument', $args);
    }

      function sendVideo(
        $chat_id,
        $video,
        int $duration = null,
        int $width = null,
        int $height = null,
        $thumb = null,
        string $caption = null,
        string $parse_mode = null,
        array $caption_entities = null,
        bool $supports_streaming = null,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
        array $reply_markup = null
    ) {
        $args = [
            'chat_id' => $chat_id,
            'video'   => $video
        ];

        if ($duration !== null) {
            $args['duration'] = $duration;
        }

        if ($width !== null) {
            $args['width'] = $width;
        }

        if ($height !== null) {
            $args['height'] = $height;
        }

        if ($thumb !== null) {
            $args['thumb'] = $thumb;
        }

        if ($caption !== null) {
            $args['caption'] = $caption;
        }

        if ($parse_mode !== null) {
            $args['parse_mode'] = $parse_mode;
        }

        if ($caption_entities !== null) {
            $args['caption_entities'] = json_encode($caption_entities);
        }

        if ($supports_streaming !== null) {
            $args['supports_streaming'] = $supports_streaming;
        }

        if ($disable_notification !== null) {
            $args['disable_notification'] = $disable_notification;
        }

        if ($reply_to_message_id !== null) {
            $args['reply_to_message_id'] = $reply_to_message_id;
        }

        if ($allow_sending_without_reply !== null) {
            $args['allow_sending_without_reply'] = $allow_sending_without_reply;
        }

        if ($reply_markup !== null) {
            $args['reply_markup'] = json_encode($reply_markup);
        }

        return  Request('sendVideo', $args);
    }

      function sendAnimation(
        $chat_id,
        $animation,
        int $duration = null,
        int $width = null,
        int $height = null,
        $thumb = null,
        string $caption = null,
        string $parse_mode = null,
        array $caption_entities = null,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
        array $reply_markup = null
    ) {
        $args = [
            'chat_id'   => $chat_id,
            'animation' => $animation
        ];

        if ($duration !== null) {
            $args['duration'] = $duration;
        }

        if ($width !== null) {
            $args['width'] = $width;
        }

        if ($height !== null) {
            $args['height'] = $height;
        }

        if ($thumb !== null) {
            $args['thumb'] = $thumb;
        }

        if ($caption !== null) {
            $args['caption'] = $caption;
        }

        if ($parse_mode !== null) {
            $args['parse_mode'] = $parse_mode;
        }

        if ($caption_entities !== null) {
            $args['caption_entities'] = json_encode($caption_entities);
        }

        if ($disable_notification !== null) {
            $args['disable_notification'] = $disable_notification;
        }

        if ($reply_to_message_id !== null) {
            $args['reply_to_message_id'] = $reply_to_message_id;
        }

        if ($allow_sending_without_reply !== null) {
            $args['allow_sending_without_reply'] = $allow_sending_without_reply;
        }

        if ($reply_markup !== null) {
            $args['reply_markup'] = json_encode($reply_markup);
        }

        return  Request('sendAnimation', $args);
    }

      function sendVoice(
        $chat_id,
        $voice,
        string $caption = null,
        string $parse_mode = null,
        array $caption_entities = null,
        int $duration = null,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
        array $reply_markup = null
    ) {
        $args = [
            'chat_id' => $chat_id,
            'voice'   => $voice
        ];

        if ($caption !== null) {
            $args['caption'] = $caption;
        }

        if ($parse_mode !== null) {
            $args['parse_mode'] = $parse_mode;
        }

        if ($caption_entities !== null) {
            $args['caption_entities'] = json_encode($caption_entities);
        }

        if ($duration !== null) {
            $args['duration'] = $duration;
        }

        if ($disable_notification !== null) {
            $args['disable_notification'] = $disable_notification;
        }

        if ($reply_to_message_id !== null) {
            $args['reply_to_message_id'] = $reply_to_message_id;
        }

        if ($allow_sending_without_reply !== null) {
            $args['allow_sending_without_reply'] = $allow_sending_without_reply;
        }

        if ($reply_markup !== null) {
            $args['reply_markup'] = json_encode($reply_markup);
        }

        return  Request('sendVoice', $args);
    }

      function sendVideoNote(
        $chat_id,
        $video_note,
        int $duration = null,
        int $length = null,
        $thumb = null,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
        array $reply_markup = null
    ) {
        $args = [
            'chat_id'    => $chat_id,
            'video_note' => $video_note
        ];

        if ($duration !== null) {
            $args['duration'] = $duration;
        }

        if ($length !== null) {
            $args['length'] = $length;
        }

        if ($thumb !== null) {
            $args['thumb'] = $thumb;
        }

        if ($disable_notification !== null) {
            $args['disable_notification'] = $disable_notification;
        }

        if ($reply_to_message_id !== null) {
            $args['reply_to_message_id'] = $reply_to_message_id;
        }

        if ($allow_sending_without_reply !== null) {
            $args['allow_sending_without_reply'] = $allow_sending_without_reply;
        }

        if ($reply_markup !== null) {
            $args['reply_markup'] = json_encode($reply_markup);
        }

        return  Request('sendVideoNote', $args);
    }

      function sendMediaGroup(
        $chat_id,
        array $media,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null
    ) {
        $args = [
            'chat_id' => $chat_id,
            'media'   => json_encode($media)
        ];

        if ($disable_notification !== null) {
            $args['disable_notification'] = $disable_notification;
        }

        if ($reply_to_message_id !== null) {
            $args['reply_to_message_id'] = $reply_to_message_id;
        }

        if ($allow_sending_without_reply !== null) {
            $args['allow_sending_without_reply'] = $allow_sending_without_reply;
        }

        return  Request('sendMediaGroup', $args);
    }

      function sendLocation(
        $chat_id,
        float $latitude,
        float $longitude,
        float $horizontal_accuracy = null,
        int $live_period = null,
        int $heading = null,
        int $proximity_alert_radius = null,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
        array $reply_markup = null
    ) {
        $args = [
            'chat_id'   => $chat_id,
            'latitude'  => $latitude,
            'longitude' => $longitude
        ];

        if ($horizontal_accuracy !== null) {
            $args['horizontal_accuracy'] = $horizontal_accuracy;
        }

        if ($live_period !== null) {
            $args['live_period'] = $live_period;
        }

        if ($heading !== null) {
            $args['heading'] = $heading;
        }

        if ($proximity_alert_radius !== null) {
            $args['proximity_alert_radius'] = $proximity_alert_radius;
        }

        if ($disable_notification !== null) {
            $args['disable_notification'] = $disable_notification;
        }

        if ($reply_to_message_id !== null) {
            $args['reply_to_message_id'] = $reply_to_message_id;
        }

        if ($allow_sending_without_reply !== null) {
            $args['allow_sending_without_reply'] = $allow_sending_without_reply;
        }

        if ($reply_markup !== null) {
            $args['reply_markup'] = json_encode($reply_markup);
        }

        return  Request('sendLocation', $args);
    }

      function editMessageLiveLocation(
        $chat_id = null,
        int $message_id = null,
        string $inline_message_id = null,
        float $latitude,
        float $longitude,
        float $horizontal_accuracy = null,
        int $heading = null,
        int $proximity_alert_radius = null,
        array $reply_markup = null
    ) {
        $args = [
            'latitude'  => $latitude,
            'longitude' => $longitude
        ];

        if ($chat_id !== null) {
            $args['chat_id'] = $chat_id;
        }

        if ($message_id !== null) {
            $args['message_id'] = $message_id;
        }

        if ($inline_message_id !== null) {
            $args['inline_message_id'] = $inline_message_id;
        }

        if ($horizontal_accuracy !== null) {
            $args['horizontal_accuracy'] = $horizontal_accuracy;
        }

        if ($heading !== null) {
            $args['heading'] = $heading;
        }

        if ($proximity_alert_radius !== null) {
            $args['proximity_alert_radius'] = $proximity_alert_radius;
        }

        if ($reply_markup !== null) {
            $args['reply_markup'] = json_encode($reply_markup);
        }

        return  Request('editMessageLiveLocation', $args);
    }

      function stopMessageLiveLocation(
        $chat_id = null,
        int $message_id = null,
        string $inline_message_id = null,
        array $reply_markup = null
    ) {
        $args = [];

        if ($chat_id !== null) {
            $args['chat_id'] = $chat_id;
        }

        if ($message_id !== null) {
            $args['message_id'] = $message_id;
        }

        if ($inline_message_id !== null) {
            $args['inline_message_id'] = $inline_message_id;
        }

        if ($reply_markup !== null) {
            $args['reply_markup'] = json_encode($reply_markup);
        }

        return  Request('stopMessageLiveLocation', $args);
    }

      function sendVenue(
        $chat_id,
        float $latitude,
        float $longitude,
        string $title,
        string $address,
        string $foursquare_id = null,
        string $foursquare_type = null,
        string $google_place_id = null,
        string $google_place_type = null,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
        array $reply_markup = null
    ) {
        $args = [
            'chat_id'   => $chat_id,
            'latitude'  => $latitude,
            'longitude' => $longitude,
            'title'     => $title,
            'address'   => $address
        ];

        if ($foursquare_id !== null) {
            $args['foursquare_id'] = $foursquare_id;
        }

        if ($foursquare_type !== null) {
            $args['foursquare_type'] = $foursquare_type;
        }

        if ($google_place_id !== null) {
            $args['google_place_id'] = $google_place_id;
        }

        if ($google_place_type !== null) {
            $args['google_place_type'] = $google_place_type;
        }

        if ($disable_notification !== null) {
            $args['disable_notification'] = $disable_notification;
        }

        if ($reply_to_message_id !== null) {
            $args['reply_to_message_id'] = $reply_to_message_id;
        }

        if ($allow_sending_without_reply !== null) {
            $args['allow_sending_without_reply'] = $allow_sending_without_reply;
        }

        if ($reply_markup !== null) {
            $args['reply_markup'] = json_encode($reply_markup);
        }

        return  Request('sendVenue', $args);
    }

      function sendContact(
        $chat_id,
        string $phone_number,
        string $first_name,
        string $last_name = null,
        string $vcard = null,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
        array $reply_markup = null
    ) {
        $args = [
            'chat_id'      => $chat_id,
            'phone_number' => $phone_number,
            'first_name'   => $first_name
        ];

        if ($last_name !== null) {
            $args['last_name'] = $last_name;
        }

        if ($vcard !== null) {
            $args['vcard'] = $vcard;
        }

        if ($disable_notification !== null) {
            $args['disable_notification'] = $disable_notification;
        }

        if ($reply_to_message_id !== null) {
            $args['reply_to_message_id'] = $reply_to_message_id;
        }

        if ($allow_sending_without_reply !== null) {
            $args['allow_sending_without_reply'] = $allow_sending_without_reply;
        }

        if ($reply_markup !== null) {
            $args['reply_markup'] = json_encode($reply_markup);
        }

        return  Request('sendContact', $args);
    }

      function sendPoll(
        $chat_id,
        string $question,
        array $options,
        bool $is_anonymous = null,
        string $type = null,
        bool $allows_multiple_answers = null,
        int $correct_option_id = null,
        string $explanation = null,
        string $explanation_parse_mode = null,
        array $explanation_entities = null,
        int $open_period = null,
        int $close_date = null,
        bool $is_closed = null,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
        array $reply_markup = null
    ) {
        $args = [
            'chat_id'  => $chat_id,
            'question' => $question,
            'options'  => json_encode($options)
        ];

        if ($is_anonymous !== null) {
            $args['is_anonymous'] = $is_anonymous;
        }

        if ($type !== null) {
            $args['type'] = $type;
        }

        if ($allows_multiple_answers !== null) {
            $args['allows_multiple_answers'] = $allows_multiple_answers;
        }

        if ($correct_option_id !== null) {
            $args['correct_option_id'] = $correct_option_id;
        }

        if ($explanation !== null) {
            $args['explanation'] = $explanation;
        }

        if ($explanation_parse_mode !== null) {
            $args['explanation_parse_mode'] = $explanation_parse_mode;
        }

        if ($explanation_entities !== null) {
            $args['explanation_entities'] = json_encode($explanation_entities);
        }

        if ($open_period !== null) {
            $args['open_period'] = $open_period;
        }

        if ($close_date !== null) {
            $args['close_date'] = $close_date;
        }

        if ($is_closed !== null) {
            $args['is_closed'] = $is_closed;
        }

        if ($disable_notification !== null) {
            $args['disable_notification'] = $disable_notification;
        }

        if ($reply_to_message_id !== null) {
            $args['reply_to_message_id'] = $reply_to_message_id;
        }

        if ($allow_sending_without_reply !== null) {
            $args['allow_sending_without_reply'] = $allow_sending_without_reply;
        }

        if ($reply_markup !== null) {
            $args['reply_markup'] = json_encode($reply_markup);
        }

        return  Request('sendPoll', $args);
    }

      function sendDice(
        $chat_id,
        string $emoji = null,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
        array $reply_markup = null
    ) {
        $args = [
            'chat_id' => $chat_id
        ];

        if ($emoji !== null) {
            $args['emoji'] = $emoji;
        }

        if ($disable_notification !== null) {
            $args['disable_notification'] = $disable_notification;
        }

        if ($reply_to_message_id !== null) {
            $args['reply_to_message_id'] = $reply_to_message_id;
        }

        if ($allow_sending_without_reply !== null) {
            $args['allow_sending_without_reply'] = $allow_sending_without_reply;
        }

        if ($reply_markup !== null) {
            $args['reply_markup'] = json_encode($reply_markup);
        }

        return  Request('sendDice', $args);
    }

      function sendChatAction(
        $chat_id,
        string $action
    ) {
        $args = [
            'chat_id' => $chat_id,
            'action'  => $action
        ];

        return  Request('sendChatAction', $args);
    }

      function getUserProfilePhotos(
        int $user_id,
        int $offset = null,
        int $limit = null
    ) {
        $args = [
            'user_id' => $user_id
        ];

        if ($offset !== null) {
            $args['offset'] = $offset;
        }

        if ($limit !== null) {
            $args['limit'] = $limit;
        }

        return  Request('getUserProfilePhotos', $args);
    }

      function getFile(
        string $file_id
    ) {
        $args = [
            'file_id' => $file_id
        ];

        return  Request('getFile', $args);
    }

      function kickChatMember(
        $chat_id,
        int $user_id,
        int $until_date = null,
        bool $revoke_messages = null
    ) {
        $args = [
            'chat_id' => $chat_id,
            'user_id' => $user_id
        ];

        if ($until_date !== null) {
            $args['until_date'] = $until_date;
        }

        if ($revoke_messages !== null) {
            $args['revoke_messages'] = $revoke_messages;
        }

        return  Request('kickChatMember', $args);
    }

      function unbanChatMember(
        $chat_id,
        int $user_id,
        bool $only_if_banned = null
    ) {
        $args = [
            'chat_id' => $chat_id,
            'user_id' => $user_id
        ];

        if ($only_if_banned !== null) {
            $args['only_if_banned'] = $only_if_banned;
        }

        return  Request('unbanChatMember', $args);
    }

      function restrictChatMember(
        $chat_id,
        int $user_id,
        array $permissions,
        int $until_date = null
    ) {
        $args = [
            'chat_id'     => $chat_id,
            'user_id'     => $user_id,
            'permissions' => json_encode($permissions)
        ];

        if ($until_date !== null) {
            $args['until_date'] = $until_date;
        }

        return  Request('restrictChatMember', $args);
    }

      function promoteChatMember(
        $chat_id,
        int $user_id,
        bool $is_anonymous = null,
        bool $can_manage_chat = null,
        bool $can_post_messages = null,
        bool $can_edit_messages = null,
        bool $can_delete_messages = null,
        bool $can_manage_voice_chats = null,
        bool $can_restrict_members = null,
        bool $can_promote_members = null,
        bool $can_change_info = null,
        bool $can_invite_users = null,
        bool $can_pin_messages = null
    ) {
        $args = [
            'chat_id' => $chat_id,
            'user_id' => $user_id
        ];

        if ($is_anonymous !== null) {
            $args['is_anonymous'] = $is_anonymous;
        }

        if ($can_manage_chat !== null) {
            $args['can_manage_chat'] = $can_manage_chat;
        }

        if ($can_post_messages !== null) {
            $args['can_post_messages'] = $can_post_messages;
        }

        if ($can_edit_messages !== null) {
            $args['can_edit_messages'] = $can_edit_messages;
        }

        if ($can_delete_messages !== null) {
            $args['can_delete_messages'] = $can_delete_messages;
        }

        if ($can_manage_voice_chats !== null) {
            $args['can_manage_voice_chats'] = $can_manage_voice_chats;
        }

        if ($can_restrict_members !== null) {
            $args['can_restrict_members'] = $can_restrict_members;
        }

        if ($can_promote_members !== null) {
            $args['can_promote_members'] = $can_promote_members;
        }

        if ($can_change_info !== null) {
            $args['can_change_info'] = $can_change_info;
        }

        if ($can_invite_users !== null) {
            $args['can_invite_users'] = $can_invite_users;
        }

        if ($can_pin_messages !== null) {
            $args['can_pin_messages'] = $can_pin_messages;
        }

        return  Request('promoteChatMember', $args);
    }

      function setChatAdministratorCustomTitle(
        $chat_id,
        int $user_id,
        string $custom_title
    ) {
        $args = [
            'chat_id'      => $chat_id,
            'user_id'      => $user_id,
            'custom_title' => $custom_title
        ];

        return  Request('setChatAdministratorCustomTitle', $args);
    }

      function setChatPermissions(
        $chat_id,
        array $permissions
    ) {
        $args = [
            'chat_id'     => $chat_id,
            'permissions' => json_encode($permissions)
        ];

        return  Request('setChatPermissions', $args);
    }

      function exportChatInviteLink(
        $chat_id
    ) {
        $args = [
            'chat_id' => $chat_id
        ];

        return  Request('exportChatInviteLink', $args);
    }

      function createChatInviteLink(
        $chat_id,
        int $expire_date = null,
        int $member_limit = null
    ) {
        $args = [
            'chat_id' => $chat_id
        ];

        if ($expire_date !== null) {
            $args['expire_date'] = $expire_date;
        }

        if ($member_limit !== null) {
            $args['member_limit'] = $member_limit;
        }

        return  Request('createChatInviteLink', $args);
    }

      function editChatInviteLink(
        $chat_id,
        string $invite_link,
        int $expire_date = null,
        int $member_limit = null
    ) {
        $args = [
            'chat_id'     => $chat_id,
            'invite_link' => $invite_link
        ];

        if ($expire_date !== null) {
            $args['expire_date'] = $expire_date;
        }

        if ($member_limit !== null) {
            $args['member_limit'] = $member_limit;
        }

        return  Request('editChatInviteLink', $args);
    }

      function revokeChatInviteLink(
        $chat_id,
        string $invite_link
    ) {
        $args = [
            'chat_id'     => $chat_id,
            'invite_link' => $invite_link
        ];

        return  Request('revokeChatInviteLink', $args);
    }

      function setChatPhoto(
        $chat_id,
        \CURLFile $photo
    ) {
        $args = [
            'chat_id' => $chat_id,
            'photo'   => $photo
        ];

        return  Request('setChatPhoto', $args);
    }

      function deleteChatPhoto(
        $chat_id
    ) {
        $args = [
            'chat_id' => $chat_id
        ];

        return  Request('deleteChatPhoto', $args);
    }

      function setChatTitle(
        $chat_id,
        string $title
    ) {
        $args = [
            'chat_id' => $chat_id,
            'title'   => $title
        ];

        return  Request('setChatTitle', $args);
    }

      function setChatDescription(
        $chat_id,
        string $description = null
    ) {
        $args = [
            'chat_id' => $chat_id
        ];

        if ($description !== null) {
            $args['description'] = $description;
        }

        return  Request('setChatDescription', $args);
    }

      function pinChatMessage(
        $chat_id,
        int $message_id,
        bool $disable_notification = null
    ) {
        $args = [
            'chat_id'    => $chat_id,
            'message_id' => $message_id
        ];

        if ($disable_notification !== null) {
            $args['disable_notification'] = $disable_notification;
        }

        return  Request('pinChatMessage', $args);
    }

      function unpinChatMessage(
        $chat_id,
        int $message_id = null
    ) {
        $args = [
            'chat_id' => $chat_id
        ];

        if ($message_id !== null) {
            $args['message_id'] = $message_id;
        }

        return  Request('unpinChatMessage', $args);
    }

      function unpinAllChatMessages(
        $chat_id
    ) {
        $args = [
            'chat_id' => $chat_id
        ];

        return  Request('unpinAllChatMessages', $args);
    }

      function leaveChat(
        $chat_id
    ) {
        $args = [
            'chat_id' => $chat_id
        ];

        return  Request('leaveChat', $args);
    }

      function getChat(
        $chat_id
    ) {
        $args = [
            'chat_id' => $chat_id
        ];

        return  Request('getChat', $args);
    }

      function getChatAdministrators(
        $chat_id
    ) {
        $args = [
            'chat_id' => $chat_id
        ];

        return  Request('getChatAdministrators', $args);
    }

      function getChatMembersCount(
        $chat_id
    ) {
        $args = [
            'chat_id' => $chat_id
        ];

        return  Request('getChatMembersCount', $args);
    }

      function getChatMember(
        $chat_id,
        int $user_id
    ) {
        $args = [
            'chat_id' => $chat_id,
            'user_id' => $user_id
        ];

        return  Request('getChatMember', $args);
    }

      function setChatStickerSet(
        $chat_id,
        string $sticker_set_name
    ) {
        $args = [
            'chat_id'          => $chat_id,
            'sticker_set_name' => $sticker_set_name
        ];

        return  Request('setChatStickerSet', $args);
    }

      function deleteChatStickerSet(
        $chat_id
    ) {
        $args = [
            'chat_id' => $chat_id
        ];

        return  Request('deleteChatStickerSet', $args);
    }

      function answerCallbackQuery(
        string $callback_query_id,
        string $text = null,
        bool $show_alert = null,
        string $url = null,
        int $cache_time = null
    ) {
        $args = [
            'callback_query_id' => $callback_query_id
        ];

        if ($text !== null) {
            $args['text'] = $text;
        }

        if ($show_alert !== null) {
            $args['show_alert'] = $show_alert;
        }

        if ($url !== null) {
            $args['url'] = $url;
        }

        if ($cache_time !== null) {
            $args['cache_time'] = $cache_time;
        }

        return  Request('answerCallbackQuery', $args);
    }

      function setMyCommands(
        array $commands
    ) {
        $args = [
            'commands' => json_encode($commands)
        ];

        return  Request('setMyCommands', $args);
    }

      function getMyCommands()
    {
        return  Request('getMyCommands', []);
    }

      function editMessageText(
        $chat_id = null,
        int $message_id = null,
        string $inline_message_id = null,
        string $text,
        string $parse_mode = null,
        array $entities = null,
        bool $disable_web_page_preview = null,
        array $reply_markup = null
    ) {
        $args = [
            'text' => $text
        ];

        if ($chat_id !== null) {
            $args['chat_id'] = $chat_id;
        }

        if ($message_id !== null) {
            $args['message_id'] = $message_id;
        }

        if ($inline_message_id !== null) {
            $args['inline_message_id'] = $inline_message_id;
        }

        if ($parse_mode !== null) {
            $args['parse_mode'] = $parse_mode;
        }

        if ($entities !== null) {
            $args['entities'] = json_encode($entities);
        }

        if ($disable_web_page_preview !== null) {
            $args['disable_web_page_preview'] = $disable_web_page_preview;
        }

        if ($reply_markup !== null) {
            $args['reply_markup'] = json_encode($reply_markup);
        }

        return  Request('editMessageText', $args);
    }

      function editMessageCaption(
        $chat_id = null,
        int $message_id = null,
        string $inline_message_id = null,
        string $caption = null,
        string $parse_mode = null,
        array $caption_entities = null,
        array $reply_markup = null
    ) {
        $args = [];

        if ($chat_id !== null) {
            $args['chat_id'] = $chat_id;
        }

        if ($message_id !== null) {
            $args['message_id'] = $message_id;
        }

        if ($inline_message_id !== null) {
            $args['inline_message_id'] = $inline_message_id;
        }

        if ($caption !== null) {
            $args['caption'] = $caption;
        }

        if ($parse_mode !== null) {
            $args['parse_mode'] = $parse_mode;
        }

        if ($caption_entities !== null) {
            $args['caption_entities'] = json_encode($caption_entities);
        }

        if ($reply_markup !== null) {
            $args['reply_markup'] = json_encode($reply_markup);
        }

        return  Request('editMessageCaption', $args);
    }

      function editMessageMedia(
        $chat_id = null,
        int $message_id = null,
        string $inline_message_id = null,
        array $media,
        array $reply_markup = null
    ) {
        $args = [
            'media' => json_encode($media)
        ];

        if ($chat_id !== null) {
            $args['chat_id'] = $chat_id;
        }

        if ($message_id !== null) {
            $args['message_id'] = $message_id;
        }

        if ($inline_message_id !== null) {
            $args['inline_message_id'] = $inline_message_id;
        }

        if ($reply_markup !== null) {
            $args['reply_markup'] = json_encode($reply_markup);
        }

        return  Request('editMessageMedia', $args);
    }

      function editMessageReplyMarkup(
        $chat_id = null,
        int $message_id = null,
        string $inline_message_id = null,
        array $reply_markup = null
    ) {
        $args = [];

        if ($chat_id !== null) {
            $args['chat_id'] = $chat_id;
        }

        if ($message_id !== null) {
            $args['message_id'] = $message_id;
        }

        if ($inline_message_id !== null) {
            $args['inline_message_id'] = $inline_message_id;
        }

        if ($reply_markup !== null) {
            $args['reply_markup'] = json_encode($reply_markup);
        }

        return  Request('editMessageReplyMarkup', $args);
    }

      function stopPoll(
        $chat_id,
        int $message_id,
        array $reply_markup = null
    ) {
        $args = [
            'chat_id'    => $chat_id,
            'message_id' => $message_id
        ];

        if ($reply_markup !== null) {
            $args['reply_markup'] = json_encode($reply_markup);
        }

        return  Request('stopPoll', $args);
    }

      function deleteMessage(
        $chat_id,
        int $message_id
    ) {
        $args = [
            'chat_id'    => $chat_id,
            'message_id' => $message_id
        ];

        return  Request('deleteMessage', $args);
    }

      function sendSticker(
        $chat_id,
        $sticker,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
        array $reply_markup = null
    ) {
        $args = [
            'chat_id' => $chat_id,
            'sticker' => $sticker
        ];

        if ($disable_notification !== null) {
            $args['disable_notification'] = $disable_notification;
        }

        if ($reply_to_message_id !== null) {
            $args['reply_to_message_id'] = $reply_to_message_id;
        }

        if ($allow_sending_without_reply !== null) {
            $args['allow_sending_without_reply'] = $allow_sending_without_reply;
        }

        if ($reply_markup !== null) {
            $args['reply_markup'] = json_encode($reply_markup);
        }

        return  Request('sendSticker', $args);
    }

      function getStickerSet(
        string $name
    ) {
        $args = [
            'name' => $name
        ];

        return  Request('getStickerSet', $args);
    }

      function uploadStickerFile(
        int $user_id,
        \CURLFile $png_sticker
    ) {
        $args = [
            'user_id'     => $user_id,
            'png_sticker' => $png_sticker
        ];

        return  Request('uploadStickerFile', $args);
    }

      function createNewStickerSet(
        int $user_id,
        string $name,
        string $title,
        $png_sticker = null,
        \CURLFile $tgs_sticker = null,
        string $emojis,
        bool $contains_masks = null,
        array $mask_position = null
    ) {
        $args = [
            'user_id' => $user_id,
            'name'    => $name,
            'title'   => $title,
            'emojis'  => $emojis
        ];

        if ($png_sticker !== null) {
            $args['png_sticker'] = $png_sticker;
        }

        if ($tgs_sticker !== null) {
            $args['tgs_sticker'] = $tgs_sticker;
        }

        if ($contains_masks !== null) {
            $args['contains_masks'] = $contains_masks;
        }

        if ($mask_position !== null) {
            $args['mask_position'] = json_encode($mask_position);
        }

        return  Request('createNewStickerSet', $args);
    }

      function addStickerToSet(
        int $user_id,
        string $name,
        $png_sticker = null,
        \CURLFile $tgs_sticker = null,
        string $emojis,
        array $mask_position = null
    ) {
        $args = [
            'user_id' => $user_id,
            'name'    => $name,
            'emojis'  => $emojis
        ];

        if ($png_sticker !== null) {
            $args['png_sticker'] = $png_sticker;
        }

        if ($tgs_sticker !== null) {
            $args['tgs_sticker'] = $tgs_sticker;
        }

        if ($mask_position !== null) {
            $args['mask_position'] = json_encode($mask_position);
        }

        return  Request('addStickerToSet', $args);
    }

      function setStickerPositionInSet(
        string $sticker,
        int $position
    ) {
        $args = [
            'sticker'  => $sticker,
            'position' => $position
        ];

        return  Request('setStickerPositionInSet', $args);
    }

      function deleteStickerFromSet(
        string $sticker
    ) {
        $args = [
            'sticker' => $sticker
        ];

        return  Request('deleteStickerFromSet', $args);
    }

      function setStickerSetThumb(
        string $name,
        int $user_id,
        $thumb = null
    ) {
        $args = [
            'name'    => $name,
            'user_id' => $user_id
        ];

        if ($thumb !== null) {
            $args['thumb'] = $thumb;
        }

        return  Request('setStickerSetThumb', $args);
    }

      function answerInlineQuery(
        string $inline_query_id,
        array $results,
        int $cache_time = null,
        bool $is_personal = null,
        string $next_offset = null,
        string $switch_pm_text = null,
        string $switch_pm_parameter = null
    ) {
        $args = [
            'inline_query_id' => $inline_query_id,
            'results'         => json_encode($results)
        ];

        if ($cache_time !== null) {
            $args['cache_time'] = $cache_time;
        }

        if ($is_personal !== null) {
            $args['is_personal'] = $is_personal;
        }

        if ($next_offset !== null) {
            $args['next_offset'] = $next_offset;
        }

        if ($switch_pm_text !== null) {
            $args['switch_pm_text'] = $switch_pm_text;
        }

        if ($switch_pm_parameter !== null) {
            $args['switch_pm_parameter'] = $switch_pm_parameter;
        }

        return  Request('answerInlineQuery', $args);
    }

      function sendInvoice(
        int $chat_id,
        string $title,
        string $description,
        string $payload,
        string $provider_token,
        string $start_parameter,
        string $currency,
        array $prices,
        string $provider_data = null,
        string $photo_url = null,
        int $photo_size = null,
        int $photo_width = null,
        int $photo_height = null,
        bool $need_name = null,
        bool $need_phone_number = null,
        bool $need_email = null,
        bool $need_shipping_address = null,
        bool $send_phone_number_to_provider = null,
        bool $send_email_to_provider = null,
        bool $is_flexible = null,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
        array $reply_markup = null
    ) {
        $args = [
            'chat_id'         => $chat_id,
            'title'           => $title,
            'description'     => $description,
            'payload'         => $payload,
            'provider_token'  => $provider_token,
            'start_parameter' => $start_parameter,
            'currency'        => $currency,
            'prices'          => json_encode($prices)
        ];

        if ($provider_data !== null) {
            $args['provider_data'] = $provider_data;
        }

        if ($photo_url !== null) {
            $args['photo_url'] = $photo_url;
        }

        if ($photo_size !== null) {
            $args['photo_size'] = $photo_size;
        }

        if ($photo_width !== null) {
            $args['photo_width'] = $photo_width;
        }

        if ($photo_height !== null) {
            $args['photo_height'] = $photo_height;
        }

        if ($need_name !== null) {
            $args['need_name'] = $need_name;
        }

        if ($need_phone_number !== null) {
            $args['need_phone_number'] = $need_phone_number;
        }

        if ($need_email !== null) {
            $args['need_email'] = $need_email;
        }

        if ($need_shipping_address !== null) {
            $args['need_shipping_address'] = $need_shipping_address;
        }

        if ($send_phone_number_to_provider !== null) {
            $args['send_phone_number_to_provider'] = $send_phone_number_to_provider;
        }

        if ($send_email_to_provider !== null) {
            $args['send_email_to_provider'] = $send_email_to_provider;
        }

        if ($is_flexible !== null) {
            $args['is_flexible'] = $is_flexible;
        }

        if ($disable_notification !== null) {
            $args['disable_notification'] = $disable_notification;
        }

        if ($reply_to_message_id !== null) {
            $args['reply_to_message_id'] = $reply_to_message_id;
        }

        if ($allow_sending_without_reply !== null) {
            $args['allow_sending_without_reply'] = $allow_sending_without_reply;
        }

        if ($reply_markup !== null) {
            $args['reply_markup'] = json_encode($reply_markup);
        }

        return  Request('sendInvoice', $args);
    }

      function answerShippingQuery(
        string $shipping_query_id,
        bool $ok,
        array $shipping_options = null,
        string $error_message = null
    ) {
        $args = [
            'shipping_query_id' => $shipping_query_id,
            'ok'                => $ok
        ];

        if ($shipping_options !== null) {
            $args['shipping_options'] = json_encode($shipping_options);
        }

        if ($error_message !== null) {
            $args['error_message'] = $error_message;
        }

        return  Request('answerShippingQuery', $args);
    }

      function answerPreCheckoutQuery(
        string $pre_checkout_query_id,
        bool $ok,
        string $error_message = null
    ) {
        $args = [
            'pre_checkout_query_id' => $pre_checkout_query_id,
            'ok'                    => $ok
        ];

        if ($error_message !== null) {
            $args['error_message'] = $error_message;
        }

        return  Request('answerPreCheckoutQuery', $args);
    }

      function setPassportDataErrors(
        int $user_id,
        array $errors
    ) {
        $args = [
            'user_id' => $user_id,
            'errors'  => json_encode($errors)
        ];

        return  Request('setPassportDataErrors', $args);
    }

      function sendGame(
        int $chat_id,
        string $game_short_name,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
        array $reply_markup = null
    ) {
        $args = [
            'chat_id'         => $chat_id,
            'game_short_name' => $game_short_name
        ];

        if ($disable_notification !== null) {
            $args['disable_notification'] = $disable_notification;
        }

        if ($reply_to_message_id !== null) {
            $args['reply_to_message_id'] = $reply_to_message_id;
        }

        if ($allow_sending_without_reply !== null) {
            $args['allow_sending_without_reply'] = $allow_sending_without_reply;
        }

        if ($reply_markup !== null) {
            $args['reply_markup'] = json_encode($reply_markup);
        }

        return  Request('sendGame', $args);
    }

      function setGameScore(
        int $user_id,
        int $score,
        bool $force = null,
        bool $disable_edit_message = null,
        int $chat_id = null,
        int $message_id = null,
        string $inline_message_id = null
    ) {
        $args = [
            'user_id' => $user_id,
            'score'   => $score
        ];

        if ($force !== null) {
            $args['force'] = $force;
        }

        if ($disable_edit_message !== null) {
            $args['disable_edit_message'] = $disable_edit_message;
        }

        if ($chat_id !== null) {
            $args['chat_id'] = $chat_id;
        }

        if ($message_id !== null) {
            $args['message_id'] = $message_id;
        }

        if ($inline_message_id !== null) {
            $args['inline_message_id'] = $inline_message_id;
        }

        return  Request('setGameScore', $args);
    }

      function getGameHighScores(
        int $user_id,
        int $chat_id = null,
        int $message_id = null,
        string $inline_message_id = null
    ) {
        $args = [
            'user_id' => $user_id
        ];

        if ($chat_id !== null) {
            $args['chat_id'] = $chat_id;
        }

        if ($message_id !== null) {
            $args['message_id'] = $message_id;
        }

        if ($inline_message_id !== null) {
            $args['inline_message_id'] = $inline_message_id;
        }

        return  Request('getGameHighScores', $args);
    }
