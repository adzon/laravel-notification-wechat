<?php

namespace NotificationChannels\Wechat;

use NotificationChannels\Wechat\Exceptions\CouldNotSendNotification;
use NotificationChannels\Wechat\Events\MessageWasSent;
use NotificationChannels\Wechat\Events\SendingMessage;
use Illuminate\Notifications\Notification;

class WechatChannel
{
    public function __construct()
    {
        // Initialisation code here
    }

    /**
     * Send the given notification.
     *
     * @param mixed $notifiable
     * @param \Illuminate\Notifications\Notification $notification
     *
     * @throws \NotificationChannels\Wechat\Exceptions\CouldNotSendNotification
     */
    public function send($notifiable, Notification $notification)
    {
        //$response = [a call to the api of your notification send]

//        if ($response->error) { // replace this by the code need to check for errors
//            throw CouldNotSendNotification::serviceRespondedWithAnError($response);
//        }
    }
}
