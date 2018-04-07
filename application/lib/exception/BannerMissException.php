<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/5 0005
 * Time: 上午 11:08
 */

namespace app\lib\exception;


class BannerMissException extends BaseException {
	public $code = 404;
	public $msg='请求的banner不存在';
	public $errorCode = 40000;
}