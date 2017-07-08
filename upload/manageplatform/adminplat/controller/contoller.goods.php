<?php
//require_once "/../database/dao/category.dao.php";
require_once "/../database/dao/goods.dao.php";
	header("Content-type:text/html;charset=utf-8"); 
	 
	// echo '$_POST接收:<br/>'; 
	// print_r($_POST['data']); 
	$data2=$_POST['data' ];
	$tt=new CategoryController();
	$name2=$data2['name'];
	switch ($name2){
		case "list" :
			print_r(urldecode($tt->queryCategoryList($data2)));
			break;
		case "brandList":
			print_r(urldecode($tt->queryBrandList($data2)));
			break;
		case "saveBrand":
			print_r("sdfsdfsdfsaaaa");
			print_r(urldecode($tt->saveBrand($data2)));
		break;
		}
	 class CategoryController{
		function queryCategoryList($data){
			$categoryDao=new GoodsDao();
			$str=$categoryDao->queryCategoryList($data);
			return $str;
		}
		function queryBrandList($data){
			$categoryDao=new GoodsDao();
			$str=$categoryDao->queryBrandList($data);
			return $str;
		}
		function saveBrand($data){
			$categoryDao=new GoodsDao();
			$str=$categoryDao->saveBrand($data);
			return $str;
		}
	}

?>