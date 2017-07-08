<?php
include 'WxAddress.php';
$WxAddress=WxAddress::getWxAddressConfig();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>微信地址选择DEMO</title>
</head>
<body>
<a href="javascript:;" id="address">点击我选择地址</a>
<script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script> 
<script src="http://cdn.bootcss.com/jquery/3.0.0-alpha1/jquery.js"></script>
<script>
$('#address').click(function(){
    WeixinJSBridge.invoke('editAddress', {
        "appId": "<?php echo $WxAddress['appId']; ?>",
        "scope": "jsapi_address",
        "signType":"sha1",
        "addrSign": "<?php echo $WxAddress['addrSign']; ?>",
        "timeStamp":"<?php echo $WxAddress['timeStamp']; ?>",
        "nonceStr": "<?php echo $WxAddress['nonceStr']; ?>",
        }, function (res) {
        //若res 中所带的返回值不为空，则表示用户选择该返回值作为收货地址。
        //否则若返回空，则表示用户取消了这一次编辑收货地址。
        if(res.err_msg=='edit_address:ok')
        {
            data=[];
            data.userName=res.userName; //姓名
            data.proviceFirstStageName = res.proviceFirstStageName; //省
            data.addressCitySecondStageName = res.addressCitySecondStageName; //市
            data.addressCountiesThirdStageName = res.addressCountiesThirdStageName; //区
            data.addressDetailInfo = res.addressDetailInfo; //详细地址
            data.telNumber = res.telNumber; //电话
            console.log(data);
            return false;

        }
        else if(res.err_msg=='edit_address:fail_auth_error')
        {
            return false;
        }
        else if(res.err_msg=='edit_address:fail')
        {
        	return false;  
        }
        else
        {
           return false;  
        }

    });
});
</script>
</body>
</html>