<?php
/**
 * Created by PhpStorm.
 * User: shanliang
 * Date: 2018/1/7
 * Time: 16:55
 */

namespace app\lib\exception;


class ProductException extends BaseException{

    public $code = 404;
    public $msg='请求的商品不存在,请检查参数';
    public $errorCode = 20000;

}