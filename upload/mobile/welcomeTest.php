<?php
	/**
	* 
	*/
header("Content-type: text/html; charset=utf-8"); 
require_once "menuManager.php";
	$code=$_GET['code'];
	var_dump("这是code:".$code);
	$welcometest=new welcometest();
	$welcometest->getUserOpenId();
	class welcomeTest
	{
		function getUserOpenId(){
			//2.获取到网页授权的access_token
			$appid="wx06be5155474e78b8";
			$appsecret="ee162e88b8ed15c48480a8be101aca7b";
			$code=$_GET['code'];
			//用户信息认证
			// $url="https://api.weixin.qq.com/sns/oauth2/access_token?appid=".$appid."&secret=".$appsecret."&code=".$code."&grant_type=authorization_code";
			// //3.拉取用户的openid
			// $curl = curl_init();
			// curl_setopt($curl, CURLOPT_URL, $url);

			// curl_setopt($curl, CURLOPT_HEADER, 1);
			// curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			// curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);//这个是重点。
			// $data = curl_exec($curl);
			// if (curl_getinfo($curl, CURLINFO_HTTP_CODE) == '200') {
			//     $headerSize = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
			//     $header = substr($data, 0, $headerSize);
			//     $body = substr($data, $headerSize);
			    
			// }
			// curl_close($curl);
			// var_dump($body);
			// $web=json_decode($body);
			// // var_dump($web);
			// var_dump($web->access_token);
			// $access_token=$web->access_token;


			
			//获取创建资源token

			$access_token=welcometest::Curl($appid,$appsecret);
			var_dump("这是access_tonken");
			var_dump($access_token);
			$json_string ='{  
             "button":[  
             {    
                  "type":"view",  
                  "name":"songs",  
                  "url":"http://tang3.tunnel.2bdata.com/upload/mobile/"  
              },  
              {  
                   "type":"view",  
                   "name":"info3",  
                   "url":"http://tang3.tunnel.2bdata.com/upload/mobile/wxpayapi/index.php"  
              },  
              {  
                   "type":"view",  
                   "name":"address",  
                   "url":"http://tang3.tunnel.2bdata.com/upload/mobile/wxpayapi/example/addressInfo.php"  
              }]  
         	}';
			// 把JSON字符串转成PHP数组
			$data = json_decode($json_string, true);
			// 显示出来看看
			var_dump($data);
			$menu=json_encode($data);
			//创建自定义菜单
			menuManger::createMENU($access_token,$data);
			var_dump($data);
		}

		public function get_address_api() {
			// 定义参数
			$timestamp = time();
			$nonceStr = rand(100000,999999);
			$Parameters = array();
			//===============下面数组 生成SING 使用=====================
			$Parameters['appid'] = $appId;
			$Parameters['url'] = $redirect_uri;
			$Parameters['timestamp'] = "$timestamp";
			$Parameters['noncestr'] = "$nonceStr";
			$Parameters['accesstoken'] = $access_token['access_token'];
			// 生成 SING
			$addrSign = genSha1Sign($Parameters);

		}
		function getUrl($url){
			$opts = array(
				CURLOPT_TIMEOUT        => 30,
				CURLOPT_RETURNTRANSFER => 1,
				CURLOPT_SSL_VERIFYPEER => false,
				CURLOPT_SSL_VERIFYHOST => false,
				);
			/* 根据请求类型设置特定参数 */
			$opts[CURLOPT_URL] = $url ;
			$ch = curl_init();
			curl_setopt_array($ch, $opts);
			$data  = curl_exec($ch);
			$error = curl_error($ch);
			curl_close($ch);
			return $data;
		}
		function p($star){
			echo '<pre>';
			print_r($star);
			echo '</pre>';
		}
		function logtext($content){
			$fp=fopen("json.ini","a");
			fwrite($fp,"\r\n".$content);
			fclose($fp);
		}
		//创建签名SHA1
		function genSha1Sign($Parameters){
			$signPars = '';
			ksort($Parameters);
			foreach($Parameters as $k => $v) {
				if("" != $v && "sign" != $k) {
					if($signPars == '')
						$signPars .= $k . "=" . $v;
					else
						$signPars .=  "&". $k . "=" . $v;
				}
			}
    		//$signPars = http_build_query($Parameters);
			$sign = SHA1($signPars);
			$Parameters['sign'] = $sign;
			return $sign;
		}


		//获取创建资源token
		function Curl($appid,$appsecret) {  
    $url="https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$appid."&secret=".$appsecret;  
       $ch = curl_init();  
       curl_setopt($ch, CURLOPT_TIMEOUT, 5);  
       curl_setopt($ch, CURLOPT_URL, $url);  
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
       curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);  
       $dataBlock = curl_exec($ch);//这是json数据  
       curl_close($ch);  
    $res = json_decode($dataBlock, true); //接受一个json格式的字符串并且把它转换为 PHP 变量  
      
       return $res['access_token'];  
   } 
		
}
?>