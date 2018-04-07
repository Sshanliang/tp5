<?php
/**
 * Created by PhpStorm.
 * User: shanliang
 * Date: 2018/1/7
 * Time: 11:27
 */

namespace app\api\model;


class Product extends BaseModel {
    protected $hidden = ['delete_time','main_img_id','pivot','from','category_id','create_time','update_time'];

    public function getMainImgUrlAttr($value, $data)
    {
        return $this->prefixImgUrl($value, $data);
    }

    public static function getMostRecent($count){
        $product = self::limit($count)->order('create_time desc')->select();
        return $product;
    }



    public static function getProductsByCategoryID($id){
        return self::where('category_id','=',$id)->select();
    }



}