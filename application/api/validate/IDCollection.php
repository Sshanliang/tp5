<?php
/**
 * Created by PhpStorm.
 * User: shanliang
 * Date: 2018/1/7
 * Time: 11:50
 */

namespace app\api\validate;


class IDCollection extends BaseValidate {

    protected $rule=[
      'ids' =>'require|checkIDs'
    ];

    protected $message=[
      'ids'=> 'ids必须是以逗号分隔的多个正整数'
    ];

    protected function checkIDs($value){

        $value = explode(',',$value);


        if(empty($value)){
            return false;
        }

        foreach ($value as $id){
            if(!$this->isPostiveInteger($id)){
                return false;
            }
        }

        return true;


    }
}