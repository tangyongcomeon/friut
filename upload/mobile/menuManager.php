<?php
header("Content-type: text/html; charset=utf-8"); 
class menuManger{
	
	function createMenu($ACC_TOKEN,$data){
			$MENU_URL="https://api.weixin.qq.com/cgi-bin/menu/create?access_token=".$ACC_TOKEN;
			var_dump("这是请求地址：".$MENU_URL);
			$ch = curl_init(); 

			$data2=json_encode($data, JSON_UNESCAPED_UNICODE);
			curl_setopt($ch, CURLOPT_URL, $MENU_URL); 
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
			curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			curl_setopt($ch, CURLOPT_AUTOREFERER, 1); 
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data2);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
			$info = curl_exec($ch);

			if (curl_errno($ch)) {
			    echo 'Errno'.curl_error($ch);
			}
			
			curl_close($ch);
			
			var_dump($info);
		}
	
}
?>