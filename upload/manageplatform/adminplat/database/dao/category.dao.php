<?php
// require_once dirname(__FILE__).'../database/connectionDB/connectionDataBase.php';
 require_once(dirname(__FILE__).'/'."../connectionDB/connectionDataBase.php");
// require('./upload/manageplatform/adminplat/database/connectionDB/connectionDataBase.php');
// require_once "./sqldata/category.sql.php";
 require_once(dirname(__FILE__).'/'."../sqldata/category.sql.php");
class CategoryDao{

	public function queryCategoryList($data){
		$currPage=$data['page']['currPage'];
		$pageSize=$data['page']['pageSize'];
		$limitStart=($currPage-1)*$pageSize;
		$limitEnd=$currPage*$pageSize;
		$strsql=CategorySQL::queryCategoryList." limit ".$limitStart." , ".$limitEnd;
		// $strsql=CategorySQL::queryCategoryList;
		$connDB=new ConnDataBase();
		$conn=ConnDataBase::connectionDB();
		$str=$connDB->querySource($strsql,$conn);
		ConnDataBase::closeDB($conn);
		return $str;
	}
	public function getCategorySize(){
		$strsql="select count(1) as cateSize from atb_goods_category;";
		$connDB=new ConnDataBase();
		$conn=ConnDataBase::connectionDB();
		$str=$connDB->querySource($strsql,$conn);	
		ConnDataBase::closeDB($conn);
		$size=json_decode($str, true);
		return $size[0]['cateSize'];
	}
	//查出所有的商品 
	public function queryAllGoods(){
		$strsql="SELECT * FROM `t_goods`";
		$connDB=new ConnDataBase();
		$conn=ConnDataBase::connectionDB();
		$str=$connDB->querySource($strsql,$conn);	
		ConnDataBase::closeDB($conn);
		return $str;
	}
	public function insertGoods(){

		 $sql="INSERT INTO `fruit`.`t_user` (`userId`, `userName`, `userAge`, `password`) VALUES ('3', 'test2', '20', '123457');";
  		$connDB=new ConnDataBase();
		$conn=ConnDataBase::connectionDB();
		$str=$connDB->insertSource($sql,$conn);
		ConnDataBase::closeDB($conn);
		return $str;

	}
	public function deleteUser($userId){

		 $sql="delete from t_user where t_user.userId='$userId'; ";
  		$connDB=new ConnDataBase();
		$conn=ConnDataBase::connectionDB();
		$str=$connDB->insertSource($sql,$conn);
		ConnDataBase::closeDB($conn);
		return $str;

	}
}

?>