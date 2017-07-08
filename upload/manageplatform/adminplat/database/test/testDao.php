<?php

$str=dirname(__FILE__);
$n=strpos($str,'adminplat');//寻找位置
if ($n) $str=substr($str,0,$n);//删除后面
   $str=mb_substr($str,0,strlen($str)-1,'utf-8');
include($str."../adminplat/database/dao/goods.dao.php");
$tt=new GoodsDao();
$array = array('brandName'=>"sdfsdf",'brandUrl'=>"sdfsdf",'brandDesc'=>"sdfasdf",'brandSort'=>"23",'brandShow'=>"1"); 
$aa=$tt->saveBrand($array);
var_dump($aa);
$size=json_decode($aa, true);
var_dump($size);
print_r($size[0]['cateSize']);//打印解码后的数组，数据存储在对象数组中
