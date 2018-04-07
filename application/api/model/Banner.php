<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/5 0005
 * Time: 上午 10:30
 */

namespace app\api\model;


use think\Db;
use think\Exception;
use think\Model;

class Banner extends BaseModel {

    protected $hidden = ['delete_time','update_time'];
	public function items(){
	    return $this->hasMany('BannerItem','banner_id','id');
    }

    // 隐藏某些字段
    //$banner->hidden(['update_time','delete_time']);
    // 显示某些字段
    // $banner->visible(['id','items']);
    public static function getBannerByID($id){
        $banner = self::with(['items','items.img'])->find($id);

        return $banner;
    }


}