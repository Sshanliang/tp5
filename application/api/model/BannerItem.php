<?php
/**
 * Created by PhpStorm.
 * User: shanliang
 * Date: 2018/1/6
 * Time: 20:25
 */

namespace app\api\model;


use think\Model;

class BannerItem extends BaseModel {
    protected $hidden = ['delete_time','update_time','img_id','banner_id','id'];
    public function img(){
        return $this->belongsTo('Image','img_id','id');
    }

}