<?php	
require "conn.php";
	$keywords=$_GET['title'];
		$img=array();
		$words=array();
			$i=0;
		$pdo->query("SET NAMES utf8");
	 	$sql = "select * from img where title like '%".$keywords."%'";
		 
	$result1=$pdo->query($sql);
		while(($row=$result1->fetch())){
			$src[$i]=$row['src'];
			$title[$i]=$row['title'];
			$author[$i]=$row['author'];
			$press[$i]=$row['press'];
			$date[$i]=$row['date'];
			$intro[$i]=$row['intro'];
			$i++;
		}
	// if($i==0) 
			// echo "无查询结果";
		// else{
			// for($l=0;$l<$i;$l++){
				// if(isset($img[$l])){
					// echo "<table>
							// <tr>
								// <td><a href='detail.php?title=".$title[$l]."'><img src='".$img[$l]."'/></a></td>
								// <td>
										// </td></tr></table>";
				// echo '查询完成[<a href="#" onclick="history.go(-1)">返回</a>]';
				// } 
			
			
			// }
		// }

		
?>