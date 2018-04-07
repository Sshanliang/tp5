<?php
/**
 * Created by PhpStorm.
 * User: shanliang
 * Date: 2018/1/7
 * Time: 16:25
 */

namespace app\api\controller\v1;


use app\api\validate\Count;
use app\api\model\Product as ProductModel;
use app\api\validate\IDMustBePostiveInt;
use app\lib\exception\CategoryException;
use app\lib\exception\ProductException;

class Product{

    public function getRecent($count=15){
        (new Count())->goCheck();
        $products = ProductModel::getMostRecent($count);
        if($products->isEmpty()){
            throw new ProductException();
        }
        //$collection = collection($products);
        $products = $$products->hidden(['summary']);
        return $products;
    }

    public function getAllInCategory($id){
        (new IDMustBePostiveInt())->goCheck();
        $products=ProductModel::getProductsByCategoryID($id);
        if($products->isEmpty()){
            throw new ProductException();
        }

        return $products;


    }

}