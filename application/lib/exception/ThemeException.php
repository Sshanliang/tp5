<?php
/**
 * Created by PhpStorm.
 * User: shanliang
 * Date: 2018/1/7
 * Time: 14:49
 */

namespace app\lib\exception;


class ThemeException extends BaseException{
    public $code = 404;
    public $msg='请求的theme不存在';
    public $errorCode = 30000;
}