Laravel的notifications使用起来很舒服，但是找了下网上没有使用微信来做通知的包，所以自己做了一个。

不了解notifications是什么的，可以在官方文档中去了解：

https://laravel.com/docs/master/notifications

有问题请邮件联系我： 76762@qq.com

# Laravel的微信通知

[![Latest Version on Packagist](https://img.shields.io/packagist/v/adzon/laravel-notification-wechat.svg?style=flat-square)](https://packagist.org/packages/adzon/laravel-notification-wechat)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/adzon/laravel-notification-wechat/master.svg?style=flat-square)](https://travis-ci.org/adzon/laravel-notification-wechat)
[![StyleCI](https://styleci.io/repos/:style_ci_id/shield)](https://styleci.io/repos/:style_ci_id)
[![SensioLabsInsight](https://img.shields.io/sensiolabs/i/:sensio_labs_id.svg?style=flat-square)](https://insight.sensiolabs.com/projects/:sensio_labs_id)
[![Quality Score](https://img.shields.io/scrutinizer/g/adzon/laravel-notification-wechat.svg?style=flat-square)](https://scrutinizer-ci.com/g/adzon/laravel-notification-wechat)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/adzon/laravel-notification-wechat/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/adzon/laravel-notification-wechat/?branch=master)
[![Total Downloads](https://img.shields.io/packagist/dt/adzon/laravel-notification-wechat.svg?style=flat-square)](https://packagist.org/packages/adzon/laravel-notification-wechat)

本项目可以在 Laravel 5.4中使用 [Wechat](https://mp.weixin.qq.com) 来通知客户。

## Contents

- [安装说明](#安装说明)
- [使用说明](#使用说明)
- [更新日志](#更新日志)
- [Credits](#credits)
- [License](#license)

## 安装说明

```bash
composer require adzon/laravel-notification-wechat
```

## 使用说明

```bash
php artisan make:notification NewInvoice
```

NewInvoice文件内容参见 demo/NewInvoice.php

## 更新日志

请直接参见commit提交～～～

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [adzon](https://github.com/adzon)
- [执行力就是挨个搞](http://www.huleping.com/)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
