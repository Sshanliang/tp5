<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/5 0005
 * Time: 上午 9:07
 */

namespace app\api\controller\v2;


use app\api\model\Banner as BannerModel;
use app\api\validate\IDMustBePostiveInt;
use app\lib\exception\BannerMissException;
use think\Exception;

class Banner {
	public function getBanner($id){

		return 'v2';

	}
}