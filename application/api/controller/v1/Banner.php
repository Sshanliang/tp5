<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/5 0005
 * Time: 上午 9:07
 */

namespace app\api\controller\v1;


use app\api\model\Banner as BannerModel;
use app\api\validate\IDMustBePostiveInt;
use app\lib\exception\BannerMissException;
use think\Exception;

class Banner {
	public function getBanner($id){
		(new IDMustBePostiveInt())->goCheck();

		$banner = BannerModel::getBannerByID($id);

		if(!$banner){
			throw new BannerMissException();
		}
		return $banner;

	}
}