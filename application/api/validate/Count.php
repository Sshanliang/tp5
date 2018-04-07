<?php
/**
 * Created by PhpStorm.
 * User: shanliang
 * Date: 2018/1/7
 * Time: 16:24
 */

namespace app\api\validate;


class Count extends BaseValidate
{
    protected $rule=[
        'count'=>'isPostiveInteger|between:1,15'
    ];
}