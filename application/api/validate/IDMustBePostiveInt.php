<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/5 0005
 * Time: 上午 9:29
 */

namespace app\api\validate;




class IDMustBePostiveInt extends BaseValidate {
    protected $message=['id'=>'id必须为正整数'];
	protected $rule = [
		'id' => 'require|isPostiveInteger',
	];
	

}