<?php 
include "php/conn.php";
include "php/show2.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>爱读书·读好书·每周荐书专题</title>
	 <meta name=”renderer” content=”webkit” /> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
<div  style="width:1080px;margin:0 auto;" >
<!-- head -->
	<div class="head" style='background-image:url("img/headimg.jpg");height: 160px;width:1080px'>
		<div class="col-xs-3 toplink" style="line-height:60px;">
		<img src="img/head.png" style="height:60px; width:60px" />
			<span style="font-size:16px"><a href="http://web02.sdau.edu.cn/" style="font-family:'Microsoft YaHei'">农大首页</a>
			&nbsp;&nbsp;&nbsp;<a href="http://zzb.sdau.edu.cn/" style="font-family:'Microsoft YaHei'">组织部首页</a>
			</span>
		</div>
		<div class="col-xs-6 text-center " id="title" style="line-height:160px"></div>
		
		<div class="col-xs-3" style="line-height:20px;padding-top:15px" ng-app >
		
			 <div class="input-group">
	               <input type="text" id="keywords" placeholder="搜索书籍" class="form-control">
	               <span class="input-group-btn">
	                <input type="submit" class="btn btncolor" onclick="change()"  value="搜索">
	               </span>
	         </div>
			
		</div>
	</div>


	<div class="cb"></div>  
	<div class="main" style="background-color:white">
		<div style="padding-left:10px;padding-top:10px">
			<strong>当前位置:</strong> <span><a href="http://zzb.sdau.edu.cn/">组织部首页</a>><a href="index.php">推荐读书</a>>本月推荐</span>
		</div>
		<div>
			<p class="title2"><?php echo $_GET['title'] ?></p>
		</div>
		<hr style="background-color:#f4f4f4;height:2px; width:80%"/ >
		<div class="message">作者：<?php echo $author ?>  出版单位：<?php echo $press ?>  出版时间：<?php echo $date ?>
		</div>
		<h6>&nbsp;</h6>
		<div>
			<center><img src=<?php echo '"'.$src.'"'; ?> class="imgs"></center>
		</div>
		<div class="intro2">
			<strong>图书简介</strong>
				<?php echo $content ?>
		　<div class="cb"></div>
		<strong>图书目录</strong>
				<?php echo $catalog;?>
				<h5>&nbsp;</h5>
		</div>
		
	</div>


	<div class="cb"></div> 
		
	<h5>&nbsp;</h5>
	</td></tr></table>
	
	<div class="footer text-center"  style='background-image:url("img/bg.jpg");height: 80px ;line-height:30px'>
		<p><span>Copyright © 2016 All Rights Reserved</span><span><a href="app/#/index/main/welcome">&nbsp;&nbsp;管理入口</a></span></p>
 		 <p><span>版权所有 © 山东农业大学党委组织部 | &nbsp;技术支持：山东农业大学启航科技工作室</span></p>
	</div>
</div>

