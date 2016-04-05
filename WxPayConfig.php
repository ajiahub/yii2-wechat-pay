<?php
/**
 * Created by PhpStorm.
 * User: allenfrancics@foxmail.com
 * Date: 2016/4/5
 * Time: 10:24
 */
namespace chinahub\wechat;

use yii\base\Object;
use yii\base\InvalidConfigException;

class WxPayConfig extends Object
{
    /**
     * @var app_id
     */
    public $app_id;
    /**
     * @var mch_id
     */
    public $mch_id;
    /**
     * @var app_key
     */
    public $app_key;
    /**
     * @var app_secret
     */
    public $app_secret;
    /**
     * @var ssl_cert_path
     */
    public $ssl_cert_path;
    /**
     * @var ssl_key_path
     */
    public $ssl_key_path;

    /**
     * @var string curl_proxy_host
     */
    public $curl_proxy_host = "0.0.0.0";//"10.152.18.220";
    /**
     * @var int curl_proxy_port
     */
    public $curl_proxy_port = 0;//8080;
    /**
     * @var int report_level
     */
    public $report_level = 1;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        if (!$this->app_id || !$this->mch_id || !$this->app_key || !$this->app_secret) {
            throw new InvalidConfigException("WxPay::app_id & mch_id & app_key & app_secret are required to be configured.");
        }
    }
}