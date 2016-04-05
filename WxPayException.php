<?php
/**
 * Created by PhpStorm.
 * User: allenfrancics@foxmail.com
 * Date: 2016/4/5
 * Time: 20:13
 */
namespace chinahub\wechat;

class WxPayException extends \Exception
{
    public function errorMessage()
    {
        return $this->getMessage();
    }
}
