<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/5 0005
 * Time: 上午 11:03
 */

namespace app\lib\exception;


use Exception;
use think\Config;
use think\exception\Handle;
use think\Log;
use think\Request;

class ExceptionHandler extends Handle {
	private $code;
	private $msg;
	private $errorCode;
	// 需要返回客户端当前的请求的URL路径
	public function render(\Exception $e) {
			if($e instanceof BaseException){
			
			
			//	如果是自定义的异常
				$this->code = $e->code;
				$this->msg =$e->msg;
				$this->errorCode = $e->errorCode;
			}else{
				
				//Config::get('app_debug');
				
				if(config('app_debug')){
				
					return parent::render($e);
					
				}else{
					$this->code =500;
					$this->msg ='服务器内部错误,不想告诉你';
					$this->errorCode =999;
					$this->recordErrorLog($e);
				}
				
				
				
			
			}
			$result = Request::instance();
			
			$result = [
				'msg' => $this->msg,
				'error_code' =>$this->errorCode,
				'request_url' => $result->url()
			];
			return json($result,$this->code);
			
		}
		
		
	private  function recordErrorLog(Exception $exception){
		
		Log::init([
						  'type'  => 'File',  // 日志记录方式，内置 file socket 支持扩展
						  'path'  => LOG_PATH,  // 日志保存目录
						  'level' => ['error'],  // 日志记录级别
				  ]);
		Log::record($exception->getMessage(),'error');
	
	}
}