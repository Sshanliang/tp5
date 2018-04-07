<?php
/**
 * Created by PhpStorm.
 * User: shanliang
 * Date: 2018/1/7
 * Time: 18:44
 */

namespace app\lib\exception;


class CategoryException extends BaseException{
    public $code = 404;
    public $msg='指定类目不存在,请检查参数';
    public $errorCode = 50000;
}