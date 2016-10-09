<?php 
include "php/conn.php";
include "php/search.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>爱读书·读好书·每周荐书专题</title>
	 <meta name=”renderer” content=”webkit” /> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="app/framework/bootstrap-3.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="app/css/alertify.core.css" />
	<link rel="stylesheet" href="app/css/alertify.default.css" id="toggleCSS" />
	 <script src="js/jquery-2.1.1.min.js"></script>	
    <script src="app/framework/angular-1.3.0.js"></script>
    <script src="app/framework/angular-animate.js"></script>
    <script src="app/framework/angular-ui-router.js"></script>
    <script src="app/framework/bootstrap.min.js"></script>
	<script src="app/framework/alertify.min.js"></script>	
	<script type="text/javascript" src="app/ckeditor/ckeditor.js"></script>  
	<script type="text/javascript" src="app/ckeditor/config.js"></script>  
    <script src="app/framework/ui-bootstrap-tpls.js"></script><!--bootstrap分页 -->
</head>
<script>
function change(){
var keywords=document.getElementById("keywords").value;
location.href="show.php?title="+keywords;
}
</script>
<body style="background-color:#F5F4EE;" >
<div  style="width:80%;margin:0 auto;" >
<!-- head -->
	<div class="head" style='background-image:url("img/headimg.jpg");height: 160px;width:1080px'>
		<div class="col-xs-3 toplink" style="line-height:60px;">
		<img src="img/head.png" style="height:60px; width:60px" />
			<span style="font-size:16px"><a href="http://web02.sdau.edu.cn/" style="font-family:'Microsoft YaHei'">农大首页</a>
			&nbsp;&nbsp;&nbsp;<a href="http://zzb.sdau.edu.cn/" style="font-family:'Microsoft YaHei'">组织部首页</a>
			</span>
		</div>
		<div class="col-xs-6 text-center " id="title" style="line-height:160px"></div>
		
		<div class="col-xs-3" style="line-height:20px;padding-top:15px" ng-app>
				 <div class="input-group">
	               <input type="text" id="keywords" placeholder="搜索书籍" class="form-control">
	               <span class="input-group-btn">
	                <input type="submit" class="btn btncolor" onclick="change()"  value="搜索">
	               </span>
	         </div>
			
		</div>
	</div>
<div class="main" style="background-color:white;width:1080px">
	<!-- foot -->
	<div style="padding-left:10px;padding-top:10px">
			<strong>当前位置:</strong> <span><a href="http://zzb.sdau.edu.cn/">组织部首页</a>><a href="index.php">推荐读书</a>>查询结果</span>
		</div>
	<div class="cb"></div> 
	<p class="text-left" style="color:#6B0000;font-size:24px;font-family:'Microsoft YaHei';padding:10px">查询结果</p>
		<hr style="height:4px;background-color:#bd460e;" />
		<?php if($i==0) 
				echo "<center><h3>无查询结果</h3></center>";
		else{
			?>
					<table style="width:80%;text-align:center;margin:0 auto;"  class="text-center" >
						<tr style="line-height:60px">
							<td>图片</td>
							<td>题目</td>
							<td>作者</td>
							<td>出版社</td>
							<!--<td>出版时间</td>
							<td>简介</td>-->
						</tr>
				<?php for($l=0;$l<$i;$l++){ ?>
						<tr>
							<td style="width:60px;height:80px">
								<a href='detail.php?title=<?php echo $title[$l];?>'>
									<img  style="width:120px; height:160px" src='<?php echo $src[$l]; ?>'/>
								</a>
							</td>
							<td>
								<a href='detail.php?title=<?php echo $title[$l];?>'>
										<?php echo $title[$l]; ?>
								</a>
							</td>
							<td>
										<?php echo $author[$l]; ?>
							</td>
							<td>
										<?php echo $press[$l]; ?>
							</td>
						<!--	<td>	
										<?php echo $date[$l]; ?>
								
							</td>
							<td>	
										<?php echo $intro[$l]; ?>								
							</td>
							-->
						</tr>
					<tr><td style="line-height:30px">&nbsp;</td></tr>
				<?php
				} ?>
				</table>
		<?php	}	
		
		?>
		<a href="###" onclick="location.href='index.php'"><p class="col-xs-1 col-xs-offset-11">返回</p></a>
	<h1>&nbsp;</h1>
	<div class="footer text-center"  style='background-image:url("img/bg.jpg");height: 80px ;line-height:30px'>
		<p><span>Copyright © 2016 All Rights Reserved</span><span><a href="app/#/index/main/welcome">&nbsp;&nbsp;管理入口</a></span></p>
 		 <p><span>版权所有 © 山东农业大学党委组织部 | &nbsp;技术支持：山东农业大学启航科技工作室</span></p>
	</div>
</div>

</body>
</html>

  
