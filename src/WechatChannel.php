<?php

namespace NotificationChannels\Wechat;

use Illuminate\Support\Arr;
use Illuminate\Notifications\Notification;
use EasyWeChat\Message\News;

class WechatChannel
{
    public function __construct()
    {
        // Initialisation code here
        $this->app = app('wechat');
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
        $open_id = $notifiable->routeNotificationFor('Wechat');

        if (!$open_id || strlen($open_id) < 20 ) {
            return;
        }

        $message = $notification->toWechat($notifiable)->toArray();
        $data = Arr::get($message, 'data'); //获取消息的参数,

        $templateId = $data['templateId'];
        $url = $data['url'];
        $result = $this->app->notice->uses($templateId)->withUrl($url)->andData($data['data'])->andReceiver($open_id)->send();

//        $news = new News([
//            'title'       => $data['title'],
//            'description' => $data['message'],
//            'url'   => $data['url'],
//            'image' => $data['image'],
//        ]);
//        $result = $this->app->staff->message($news)->to($open_id)->send();
        //TODO 增加异常
    }
}
