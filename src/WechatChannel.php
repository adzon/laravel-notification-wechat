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
        if (! $open_id = $notifiable->routeNotificationFor('Wechat')) {
            return;
        }

        $message = $notification->toWechat($notifiable)->toArray();
        $data = Arr::get($message, 'data'); //获取消息的参数,

        $news = new News([
            'title'       => '有新的送车任务生成',
            'description' => "test",
            'url'   => "http://l.zuhaoche.cn/staff/send_car/",
            'image' => "https://avatars1.githubusercontent.com/u/1472352?v=3&s=40",
        ]);
        $result = $this->app->staff->message($news)->to($open_id)->send();
        //TODO 增加异常
    }
}
