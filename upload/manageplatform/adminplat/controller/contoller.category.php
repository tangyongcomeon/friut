<?php
require_once "/../database/dao/category.dao.php";
	header("Content-type:text/html;charset=utf-8"); 
	 
	// echo '$_POST接收:<br/>'; 
	// print_r($_POST['data']); 
	$data2=$_POST['data'];
	$tt=new CategoryController();
	if("list"==$data2['name']){
		print_r(urldecode($tt->queryCategoryList($data2)));
	}
	// print_r($data2['name']); 
	// echo '<hr/>'; 
	 
	// echo '$GLOBALS[\'HTTP_RAW_POST_DATA\']接收:<br/>'; 
	// print_r(file_get_contents('php://input')); 
	// echo '<hr/>'; 
	 
	// echo 'php://input接收:<br/>'; 
	// $data = file_get_contents('php://input'); 
	// print_r(urldecode($data));
	 class CategoryController{
		function queryCategoryList($data){
			$categoryDao=new CategoryDao();
			$str=$categoryDao->queryCategoryList($data);
			return $str;
		}
		
		function queryBrandsList($data){
			$categoryDao=new CategoryDao();
			$str=$categoryDao->queryCategoryList($data);
			return $str;
		}
	}

?>