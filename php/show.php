<?php
$pdo->query('set names utf8');
$sql = "select * from img  order by shunxu desc limit 0,2 ";
			$result=$pdo->query($sql);
			$row=$result->fetch();
				$a=$row['src'];
				$title1=$row['title'];
				$author1=$row['author'];
				$press1=$row['press'];
				$date1=$row['date'];
				$intro1=$row['intro'];
			$row=$result->fetch();
					$b=$row['src'];
					$title2=$row['title'];
				$author2=$row['author'];
				$press2=$row['press'];
				$date2=$row['date'];
				$intro2=$row['intro'];

	$img=array();
	$words=array();
	$i=0;
	$sql2="select * from img  order by shunxu desc limit 2,6";
	$result1=$pdo->query($sql2);
		while(($row=$result1->fetch())&&$i<6){
			$img[$i]=$row['src'];
			$words[$i]=$row['title'];
			$i++;
		}




?>