<?php
	/**
	* 
	*/
	class urlaccessTest
	{
		public function test(){
			$json = '{"foo": 12345}';
			$obj = json_decode($json);
			var_dump($obj);
			$this->getUserInfo();
		}
		public function getUserInfo(){
			//1.获取到code
			//1.获取到code
	$appid="wx06be5155474e78b8";
	$redirect_uri=urlencode("http://tang3.tunnel.2bdata.com/upload/mobile/welcomeTest.php/welcomeTest/getUserOpenId");
	$url="https://open.weixin.qq.com/connect/oauth2/authorize?appid=".$appid."&redirect_uri=".$redirect_uri."&response_type=code&scope=snsapi_userinfo&state=123#wechat_redirect";
	header('location:'.$url);
		}

	}
	$mytest=new urlaccessTest();
	$mytest->test();
?>