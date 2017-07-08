<?php
header("Content-type: text/html; charset=utf-8"); 
require_once('addressManager.php');
$weixin = new class_weixin();
$url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
var_dump("这是请求地址：".$url);
var_dump("这是code值：".$_GET["code"]);
if (!isset($_GET["code"])){
    $jumpurl = $weixin->oauth2_authorize($url, "snsapi_base", "1234");
    var_dump("这是封装后的跳转地址：".$jumpurl);
    Header("Location: $jumpurl");
}else{
    $oauth2_access_token = $weixin->oauth2_access_token($_GET["code"]);
    $access_token = $oauth2_access_token['access_token'];
    var_dump("这是access_token".$access_token);
}


$timestamp = strval(time());
var_dump("这是时间戳：".$timestamp);
$noncestr = $weixin->create_noncestr();
var_dump("这是随机字符串noncestr：".$noncestr);
$obj['timeStamp']           = $timestamp;
$obj['appId']               = $weixin->appid;
$obj['url']                 = $url;
$obj['noncestr']            = $noncestr;
$obj['accesstoken']         = $access_token;
var_dump($obj);
$signature  = $weixin->get_biz_sign($obj);
var_dump("这是签名后返回数据：".$signature);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>获取共享收货地址</title>
        <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
        <script language="javascript">
            function callpay()
            {
                WeixinJSBridge.invoke('editAddress',{
                    "appId" : "<?php echo $obj['appId'];?>",
                    "scope" : "jsapi_address",
                    "signType" : "sha1",
                    "addrSign" : "<?php echo $signature;?>",
                    "timeStamp" : "<?php echo $timestamp;?>",
                    "nonceStr" : "<?php echo $noncestr;?>",
                },function(res){ 
                  
                
                    alert(JSON.stringify(res));  
                    document.form1.address1.value         = res.proviceFirstStageName;
                    document.form1.address2.value         = res.addressCitySecondStageName;
                    document.form1.address3.value         = res.addressCountiesThirdStageName;
                    document.form1.detail.value           = res.addressDetailInfo;
                    document.form1.national.value         = res.nationalCode;
                    document.form1.user.value            = res.userName;
                    document.form1.phone.value            = res.telNumber;
                    document.form1.postcode.value         = res.addressPostalCode;
                    document.form1.errmsg.value         = res.err_msg;
                });
            }
        </script>
    </head>
    <body>
        <form name="form1" target="_blank">
            <table border="1">
                <colgroup><col width="20%"><col width="80%"></colgroup>
                <TR><th>结果</th><th><INPUT value="" name="errmsg" id="9"></th>
                <TR><th>国家码</th><th><INPUT value="" name="national" id="6"></th>
                <TR><th>国家</th><th><INPUT value="" name="address3" id="3"></th>
                <TR><th>省</th><th><INPUT value="" name="address1" id="1"></th>
                <tr><th>市</th><th><INPUT value="" name="address2" id="2"></th>
                <TR><th>详细</th><th><INPUT value="" name="detail"   id="4"></th>
                <TR><th>收货人</th><th><INPUT value="" name="user" id="7"></th>
                <TR><th>电话</th><th><INPUT value="" name="phone"    id="5"></th>
                <TR><th>邮编</th><th><INPUT value="" name="postcode" id="8"></th>
            </table>
        </form>
        <div id ='info2'>
            


        </div>
        <div>
            <button type="button" onclick="callpay()">获取收货地址</button>
        </div>

    </body>
</html>