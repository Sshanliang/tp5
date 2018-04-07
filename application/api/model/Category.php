<?php
/**
 * Created by PhpStorm.
 * User: shanliang
 * Date: 2018/1/7
 * Time: 18:04
 */

namespace app\api\model;


use think\Model;

class Category extends Model{
    protected $hidden = ['delete_time','create_time','update_time'];
    public function img(){
        return $this->belongsTo('Image','topic_img_id','id');
    }


}