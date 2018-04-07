<?php
/**
 * Created by PhpStorm.
 * User: shanliang
 * Date: 2018/1/7
 * Time: 18:03
 */

namespace app\api\controller\v1;
use app\api\model\Category as CategoryModel;
use app\lib\exception\CategoryException;

class Category{

    public function getAllCategories(){
        $category =  CategoryModel::all([],'img');

        if($category->isEmpty()){
            throw new CategoryException();
        };
        return $category;

    }
}