<?php
/**
* 
*/
class Index
{
	
		
		public function test(){
			echo "ssdeep_fuzzy_hash_filename";
			$this->getBaseInfo();
		}

	
	function  getBaseInfo(){
	//1.获取到code
	$appid="wx3ccf66edac837da9";
	$redirect_uri=urlencode("http://tang3.tunnel.2bdata.com/upload/mobile/indexactionoauth.php/Index/getUserOpenId");
	$url="https://open.weixin.qq.com/connect/oauth2/authorize?appid=".$appid."&redirect_uri=".$redirect_uri."&response_type=code&scope=snsapi_base&state=123#wechat_redirect";
	header('location:'.$url);

}

function getUserOpenId(){
	//2.获取到网页授权的access_token
	$appid="wx3ccf66edac837da9";
	$appsecret="6b5cf301ca2509978a1885dc33c9ad82";
	$code=$_GET['code'];
	$url="https://api.weixin.qq.com/sns/oauth2/access_token?appid=".$appid."&secret=".$appsecret."&code=".$code."&grant_type=authorization_code";
	//3.拉取用户的openid
	$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_HEADER, 1);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);//这个是重点。
$data = curl_exec($curl);
curl_close($curl);
var_dump($data);

}
}


?>
