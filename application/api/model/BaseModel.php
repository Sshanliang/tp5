<?php
/**
 * Created by PhpStorm.
 * User: shanliang
 * Date: 2018/1/7
 * Time: 0:10
 */

namespace app\api\model;


use think\Model;

class BaseModel extends Model{

    protected function prefixImgUrl($value,$data){
        $finalUrl = $value;
        if($data['from'] == 1){
            $finalUrl =  config('setting.img_prefix').$value;
        }
        return $finalUrl;
    }
}