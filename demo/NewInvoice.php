<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use NotificationChannels\Wechat\WechatChannel;
use NotificationChannels\Wechat\WechatMessage;

class NewInvoice extends Notification
{
    use Queueable;
    public  $data;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //
        $this->data=$data;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database',WechatChannel::class];
    }

    public function toWechat($notifiable)
    {
        /*
        *

{{first.DATA}}
订单号：{{keyword1.DATA}}
订单状态：{{keyword2.DATA}}
{{remark.DATA}}

        */
        $data = $this->data;
        $notice = array(
            //TODO 优化这里,
            'templateId' => 'HMdZ4S4WKLF7MKRB2jppCK-ttDUnjVQBRo4-CnY***', //模版ID
            'url' => $data->url,
            'data' => array(
                'first' => '您在租好车的账单已生成，点此支付。',
                'keyword1' => $data->order_name,
                'keyword2' => $data->order_status,
                'remark' => "\r\n".strip_tags($data->comment),
            ),
        );

        return new WechatMessage($notice);
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('The introduction to the notification.')
            ->action('Notification Action', url('/'))
            ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
        return [
            //
            'data' => $this->data,
        ];
    }
}
