<?php

namespace NotificationChannels\Wechat;

class WechatMessage
{
    /** @var mixed */
    protected $data;
    /**
     * @param mixed $data
     *
     * @return static
     */
    public static function create($data = '')
    {
        return new static($data);
    }
    /**
     * @param mixed $data
     */
    public function __construct($data = '')
    {
        $this->data = $data;
    }
    /**
     * Set the Wechat data to be JSON encoded.
     *
     * @param mixed $data
     *
     * @return $this
     */
    public function data($data)
    {
        $this->data = $data;
        return $this;
    }
    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'data' => $this->data,
        ];
    }
}