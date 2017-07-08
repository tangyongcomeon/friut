<?php

//	 
//	echo '$_POST接收:<br/>'; 
//
//	print_r($_POST['pageValue']); 


//header("content-type:text/html;charset=utf8");
$str=dirname(__FILE__);
//$str=substr($str,7);//去除前面
$n=strpos($str,'adminplat');//寻找位置
if ($n) $str=substr($str,0,$n);//删除后面
   $str=mb_substr($str,0,strlen($str)-1,'utf-8');

include($str."../adminplat/baseModel/tablePage/Page.class.php");    //引入类
include($str."../adminplat/database/dao/goods.dao.php");
//$p=new Page(总页数,显示页数,当前页码,每页显示条数,[链接]);
//连接不设置则为当前链接
//$page=isset($_GET['page']) ? $_GET['page'] : 1;
$page=isset($_POST['pageValue']) ? $_POST['pageValue'] : 1;

$href='javascript:void(0)';

$tt=new GoodsDao();
$aa=$tt->getBrandSize();

//(总条数，，当前页码，每页显示条数)
$p=new Page($aa,5,$page,10);
   
//生成一个页码数组（键为页码，值为链接）
//echo "<pre>";
//print_r($p->getPages()); 
   
//生成一个页码样式（可添加自定义样式）
//样式 共45条记录,每页显示10条,当前第1/4页 [首页] [上页] [1] [2] [3] .. [下页] [尾页]
echo $p->showPages(3); 