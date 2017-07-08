<?php
require_once "./../dao/category.dao.php";
$tt=new CategoryDao();
$aa=$tt->getCategorySize();

print_r($aa);//打印解码后的数组，数据存储在对象数组中


?>