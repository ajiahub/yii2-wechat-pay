wechat pay sdk for yii2
=======================
wechat pay sdk for yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist chinahub/yii2-wechat-pay "*"
```

or add

```
"chinahub/yii2-wechat-pay": "*"
```

to the require section of your `composer.json` file.


Configure
-----

To use this extension, you have to configure the Connection class in your application configuration:

```php
'components' => [
	'wxPay' => [
		'class' => 'chinahub\wechat\WxPayConfig',
		'app_id' => '8888888888888',
		'mch_id' => '9999999999999999',
		'app_key' => '11111111111111111',
		'app_secret' => '777777777777777777',
	],
]
```

Usage
-----

please wait...