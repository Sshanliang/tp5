<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/5 0005
 * Time: 上午 10:08
 */

namespace app\api\validate;


use app\lib\exception\ParameterException;
use think\Request;
use think\Validate;

class BaseValidate extends Validate {
	public function goCheck(){
		$request = Request::instance();
		$param = $request->param();
		$result = $this->batch()->check($param);
		if(!$result){
			$e = new ParameterException([
				'msg'=>$this->error,
										
										]);
			//$e->msg = $this->error;
			throw $e;
			
//			throw new Exception($error);
		}else{
			return true;
		}

	}

    protected function isPostiveInteger($value,$rule='',$data='',$field=''){
        if(is_numeric($value) && is_int($value+0)&&($value+0)>0){
            return true;
        }else
        {
            return false;
        }
    }
}