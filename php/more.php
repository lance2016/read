<?php
$pdo->query('set names utf8');
	$img=array();
	$words=array();
	$i=0;

	$q = $pdo->query("select count(*) from img;");
	$rows = $q->fetch();
	$rowCount = $rows[0];
	$rowCount=$rowCount-2;

	$sql1="select * from img order by shunxu desc limit 2,".$rowCount;
	$result1=$pdo->query($sql1);
		while(($row=$result1->fetch())&&$i<$rowCount){
			$src[$i]=$row['src'];
			$title[$i]=$row['title'];
			$author[$i]=$row['author'];
			$press[$i]=$row['press'];
			$i++;
	}
?>