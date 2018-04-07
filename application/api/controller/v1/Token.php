<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/8 0008
 * Time: 上午 9:49
 */

namespace app\api\controller\v1;


use app\api\service\AppToken;
use app\api\service\UserToken;
use app\api\validate\AppTokenGet;
use app\api\validate\TokenGet;

class Token {


	/**
	 * 第三方应用获取令牌
	 * @url /app_token?
	 * @POST ac=:ac se=:secret
	 */
	public function getAppToken($ac='', $se=''){
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
		header('Access-Control-Allow-Methods: GET,POST');

		return [
			'token' => 123,
			'code' =>200,
			'data'=>[
				'token' => 123,
				"name"=>"管理员",
				"avatar"=>"http://z.cn/images/banner-4a.png",
				"roles"=>['admin'],
				"role"=>['admin']
			],
		];
	}

    public function getAppTokenInfo()
    {
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: token,Origin, X-Requested-With, Content-Type, Accept");
        header('Access-Control-Allow-Methods: GET,POST');
        return [
            'token' => 123,
            'code' =>200,
            'data'=>[
                'token' => 123,
                "name"=>"管理员",
                "avatar"=>"http://z.cn/images/banner-4a.png",
                "roles"=>['admin'],
                "role"=>['admin']
            ],
        ];
    }

}