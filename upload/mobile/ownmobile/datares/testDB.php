<?php
require_once "../datares/dao/connectionDataBase.php";
$tt=new TestDB();
$aa=$tt->queryAllUser();

print_r($aa);//打印解码后的数组，数据存储在对象数组中
// $mm=$tt->queryAllGoods();//查询所有的商品 
// $tt->insertGoods();//查询商品信息
$tt->deleteUser(3);//删除用户
// print_r($mm);
class TestDB{

	public function queryAllUser(){
		$strsql="SELECT * FROM `t_user`";
		$connDB=new ConnDataBase();
		$conn=ConnDataBase::connectionDB();
		$str=$connDB->querySource($strsql,$conn);
		ConnDataBase::closeDB($conn);
		return $str;
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