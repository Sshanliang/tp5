<?php
/**
 * Created by PhpStorm.
 * User: shanliang
 * Date: 2018/1/7
 * Time: 11:27
 */

namespace app\api\model;


class Theme extends BaseModel{
    protected $hidden = ['delete_time','update_time','head_img_id','topic_img_id'];
    public function topImg(){
        return $this->belongsTo('Image','top_img_id','id');
    }

    public function headImg(){
        return $this->belongsTo('Image','head_img_id','id');
    }

    public static function getThemeByID($ids){
        return self::with(['topImg','headImg'])->select($ids);
    }

    public function products(){
        return $this->belongsToMany('Product','theme_product','product_id','theme_id');
    }

    public static function getThemeWithProducts($id){
        $theme = self::with('products,topImg,headImg')->find($id);
        return $theme;
    }
}