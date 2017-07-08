<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Xenon Boostrap Admin Panel" />
	<meta name="author" content="" />
<style type="text/CSS"> <!-- .page a:link {
 	color: #0000FF;
 	text-decoration: none;
 }
 
 .page a:visited {
 	text-decoration: none;
 	color: #0000FF;
 }
 
 .page a:hover {
 	text-decoration: none;
 	color: #0000FF;
 }
 
 .page a:active {
 	text-decoration: none;
 	color: #0000FF;
 }
 
 .page {
 	color: #0000FF;
 }
 
 --></style> 
</head> 
<body> 
<table width="530" height="103" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC"> 
<tr> 
<th width="30" height="38" bgcolor="#E3E3E3" scope="col">ID</th> 
<th width="500" bgcolor="#E3E3E3" scope="col">文章标题</th> 
</tr> 
<?php 
	header("Content-type:text/html;charset=utf-8"); 
$str=dirname(__FILE__);
//$str=substr($str,7);//去除前面
$n=strpos($str,'adminplat');//寻找位置
if ($n) $str=substr($str,0,$n);//删除后面
 $str=mb_substr($str,0,strlen($str)-1,'utf-8');

require_once($str."../adminplat/database/connectionDB/connectionDataBase.php");

/* 
* Created on 2010-4-17 
* 
* Order by Kove Wong 
*/ 
  		$mysql_server_name="localhost"; //数据库服务器名称
        $mysql_username="tangyong"; // 连接数据库用户名
        $mysql_password="123456"; // 连接数据库密码
        $mysql_database="fruit"; // 数据库的名字
		$link=MySQL_connect($mysql_server_name,$mysql_username,$mysql_password); 
		mysql_select_db($mysql_database); 
//		mysql_query('set names gbk'); 

$Page_size=10; 

$result=mysql_query('select * from atb_goods_category'); 
$count = mysql_num_rows($result); 
$page_count = ceil($count/$Page_size); 

$init=1; 
$page_len=7; 
$max_p=$page_count; 
$pages=$page_count; 

//判断当前页码 
if(empty($_GET['page'])||$_GET['page']<0){ 
$page=1; 
}else { 
$page=$_GET['page']; 
} 

$offset=$Page_size*($page-1); 
$sql="select * from atb_goods_category limit $offset,$Page_size"; 
$result=mysql_query($sql,$link); 
//while ($row=mysql_fetch_array($result)) { 
?> 
<!--<tr> 
<td bgcolor="#E0EEE0" height="25px"><div align="center"> 
<?php echo $row['id']?> 
</div></td> 
<td bgcolor="#E0EEE"><div align="center"> 
<?php echo $row['cate_name']?> 
</div></td> 
</tr> -->
<?php
//	}
	$page_len = ($page_len%2)?$page_len:$pagelen+1;//页码个数
	$pageoffset = ($page_len-1)/2;//页码个数左右偏移量

	$key='<div class="page">';
	$key.="<span>$page/$pages</span> "; //第几页,共几页
	if($page!=1){
	$key.="<a href=\"".$_SERVER['PHP_SELF']."?page=1\">第一页</a> "; //第一页
	$key.="<a href=\"".$_SERVER['PHP_SELF']."?page=".($page-1)."\">上一页</a>"; //上一页
	}else {
	$key.="第一页 ";//第一页
	$key.="上一页"; //上一页
	}
	if($pages>$page_len){
	//如果当前页小于等于左偏移
	if($page<=$pageoffset){
	$init=1;
	$max_p = $page_len;
	}else{//如果当前页大于左偏移
	//如果当前页码右偏移超出最大分页数
	if($page+$pageoffset>=$pages+1){
	$init = $pages-$page_len+1;
	}else{
	//左右偏移都存在时的计算
	$init = $page-$pageoffset;
	$max_p = $page+$pageoffset;
	}
	}
	}
	for($i=$init;$i<=$max_p;$i++){
	if($i==$page){
	$key.=' <span>'.$i.'</span>';
	} else {
	$key.=" <a href=\"".$_SERVER['PHP_SELF']."?page=".$i."\">".$i."</a>";
	}
	}
	if($page!=$pages){
	$key.=" <a href=\"".$_SERVER['PHP_SELF']."?page=".($page+1)."\">下一页</a> ";//下一页
	$key.="<a href=\"".$_SERVER['PHP_SELF']."?page={$pages}\">最后一页</a>"; //最后一页
	}else {
	$key.="下一页 ";//下一页
	$key.="最后一页"; //最后一页
	}
	$key.='</div>';
?> 
<tr> 
<td colspan="2" bgcolor="#E0EEE0"><div align="center"><?php echo $key?></div></td> 
</tr> 
</table> 
</body> 
</html> 