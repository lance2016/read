<?php
include "conn.php";//连接数据库文件格式要设置成utf-8无bom格式，不知道什么鬼
//2.通过action的值做地应操作
$pdo->query("SET NAMES utf8");
		 $title = $_POST['title'];
		 $sql = "select * from img where title='".$title."'";
		 $data=$pdo->query($sql)->fetchAll();
		  $paodata = json_encode($data);
		  echo $paodata;
			
	$pdo=null;
?>