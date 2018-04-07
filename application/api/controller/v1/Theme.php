<?php
/**
 * Created by PhpStorm.
 * User: shanliang
 * Date: 2018/1/7
 * Time: 11:25
 */

namespace app\api\controller\v1;


use app\api\validate\IDCollection;
use app\api\model\Theme as ThemeModel;
use app\api\validate\IDMustBePostiveInt;
use app\lib\exception\ThemeException;

class Theme{



    public function getSimpleList($ids=''){

        /**
         * @url /theme?ids=id1,id2,id3
         * @return 一组Theme模型
         */
        (new IDCollection())->goCheck();
        //$ids = explode(','.$ids);
        //$result = ThemeModel::with(['topImg','headImg'])->select($ids);
        $result = ThemeModel::getThemeByID($ids);
        if($result->isEmpty()){
            throw new ThemeException();
        }

        return $result;
    }

    public function getComplexOne($id){
        (new IDMustBePostiveInt())->goCheck();
        $result = ThemeModel::getThemeWithProducts($id);
        if($result->isEmpty()){
            throw new ThemeException();
        }
        return $result;
    }

}