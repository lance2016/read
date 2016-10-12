<?php
$pdo->query('set names utf8');
$title=$_GET['title'];
$pdo->query('set names utf8');
$sql = 'select * from img  where title="'.$title.'"';
			$result=$pdo->query($sql);
			$row=$result->fetch();
				$src=$row['src'];
				$title=$row['title'];
				$author=$row['author'];
				$press=$row['press'];
				$date=$row['date'];
				$intro=$row['intro'];
				$content=$row['content'];
				$catalog=$row['catalog'];
				$liulan=$row['liulan'];

?>