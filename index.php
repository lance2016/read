<?php 
include "php/conn.php";
include "php/show.php";
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
<div class="main" style="background-color:white">
		<div class="cb"></div> 
<!-- 本周荐书 -->

	<div class="weekbook">
		<div class="col-xs-12">
			<p class="text-left" style="color:#6B0000;font-size:24px;font-family:'Microsoft YaHei';padding:10px">本周荐书</p>
			<hr style="height:4px;background-color:#bd460e;" />
		</div>
				
			 <!-- 第一本书-->
			
			<div class="col-xs-12 " style="background-color:#FFFACD;height:280px;padding-top:20px">
				<div class="col-xs-2 col-xs-offset-1">
					<a href=<?php echo '"detail.php?title='.$title1.'"' ?> target="_blank" > <img src=<?php echo '"'.$a.'"';?> /></a>
				</div>
				<div class="col-xs-3 col-xs-offset-1" style="color:black;font-family:'Microsoft YaHei';">
					<h3>
		               <a href=<?php echo '"detail.php?title='.$title1.'"' ?> target="_blank" >	<?php echo $title1 ?>
		                </a>
		            </h3>
		            <div style="padding-top:10px">
		                <div>
		                   <h4>作者：<?php echo $author1 ?></h4>
		                </div>
			            <div >                                        
		                    <h4>出版单位：<?php echo $press1 ?></h4>                                              
		                </div>                                      
		                <div >                                   
		                	<h4>出版日期：<?php echo $date1 ?> </h4>                                                                                                
		                </div>
		            </div>
				</div>
				
				
				<div class="col-xs-5" style="color:black;font-family:'Microsoft YaHei';">
					
		            <div style="padding-top:10px">
		                <div>
		                   <h4>内容简介</h4>
		                </div>
			            <div >                                        
		                          <P> <?php  echo "&nbsp;&nbsp;&nbsp;&nbsp;".$intro1 ?> </p>                                
		                </div>                                      
		                
		            </div>
				</div>
				
			</div>
		
		 <!-- 清除浮动层 -->
		 	<div class="cb"></div> 
		 	
		  <!-- 第二本书-->
		 	<div class="col-xs-12" style="background-color:#FFFACD;height:280px;padding-top:20px;margin-top:20px">
				<div class="col-xs-2 col-xs-offset-1">
						<a href=<?php echo '"detail.php?title='.$title2.'"' ?> target="_blank" >  <img src=<?php echo '"'.$b.'"';?> /></a>
				</div>
				<div class="col-xs-3 col-xs-offset-1" style="color:black;font-family:'Microsoft YaHei';">
					<h3>
		                <a href=<?php echo '"detail.php?title='.$title2.'"' ?> target="_blank" >	<?php echo $title2 ?>
		                </a>
		            </h3>
		            <div style="padding-top:10px">
		                <div>
		                   <h4>作者：<?php echo $author2 ?></h4>
		                </div>
			            <div >                                        
		                    <h4>出版单位：<?php echo $press2 ?></h4>                                              
		                </div>                                      
		                <div >                                   
		                	<h4>出版日期：<?php echo $date2 ?>    </h4>                              
		                                                                                       
		                </div>
		            </div>
				</div>
				
				<div class="col-xs-5" style="color:black;font-family:'Microsoft YaHei';">
					
		            <div style="padding-top:10px">
		                <div>
		                   <h4>内容简介</h4>
		                </div>
			            <div >                                        
						<P> <?php  echo "&nbsp;&nbsp;&nbsp;&nbsp;".$intro2 ?> </p>          
						</div>
		                
		            </div>
				</div>
				
				
			</div>
	</div>



<!-- 往期推荐 -->
	<div class="cb"></div> 
	<h2>&nbsp;</h2>
	<div class="col-xs-12">
			<h3 class="text-left" style="color:#6B0000;font-family:'Microsoft YaHei'">往期荐书</h3>
			<p style="margin-top:-30px;text-align:right;color:blue;font-size: 13px;
font-family: sans-serif;"><a href="more.php">更多></a></p>
			<hr style="height:4px;background-color:#bd460e;" />
	</div>
	<div style="background-color:#FFFACD;height:320px;padding-top:20px;">
		<section class="htmleaf-container">
		<div id="single" class="carousel slide" data-ride="carousel" data-shift="1" data-interval="2500">
				<div class="carousel-inner">
				  <ul class="row item active">
					<li class="col-xs-4 one text-center">
						 <a href=<?php if(!isset($words[0])) echo "'##'";else {echo '"detail.php?title='.$words[0].'"'; ?> target="_blank"<?php }?> >
							<img src=<?php if(isset($img[0])) echo '"'.$img[0].'"'; else echo 'img/none.jpg'?> />
						</a>
						  <a href=<?php if(!isset($words[0])) echo "'##'";else {echo '"detail.php?title='.$words[0].'"'; ?> target="_blank"<?php }?> >
							<h4><?php if(isset($words[0])) echo $words[0]; else echo "暂无"?></h4>
						</a>
					</li>
					<li class="col-xs-4 two text-center">
						 <a href=<?php if(!isset($words[1])) echo "'##'";else {echo '"detail.php?title='.$words[1].'"'; ?> target="_blank"<?php }?> >
							<img src=<?php if(isset($img[1])) echo '"'.$img[1].'"'; else echo 'img/none.jpg'?> />
						 </a>
						 <a href=<?php if(!isset($words[1])) echo "'##'";else {echo '"detail.php?title='.$words[1].'"'; ?> target="_blank"<?php }?> >
							<h4><?php if(isset($words[1])) echo $words[1]; else echo "暂无"?></h4>
						 </a>
					</li>
					<li class="col-xs-4 three text-center">
					 <a href=<?php if(!isset($words[2])) echo "'##'";else {echo '"detail.php?title='.$words[2].'"'; ?> target="_blank"<?php }?> >
						<img src=<?php if(isset($img[2])) echo '"'.$img[2].'"'; else echo 'img/none.jpg'?> />
					 </a>
					  <a href=<?php if(!isset($words[2])) echo "'##'";else {echo '"detail.php?title='.$words[2].'"'; ?> target="_blank"<?php }?> >
						<h4><?php if(isset($words[2])) echo $words[2]; else echo "暂无"?></h4>
					  </a>
					</li>
				  </ul>
				  <ul class="row item">
					<li class="col-xs-4 four text-center">
					 <a href=<?php if(!isset($words[3])) echo "'##'";else {echo '"detail.php?title='.$words[3].'"'; ?> target="_blank"<?php }?> >
					 <img src=<?php if(isset($img[3])) echo '"'.$img[3].'"'; else echo 'img/none.jpg'?> />
					 </a>
					  <a href=<?php if(!isset($words[3])) echo "'##'";else {echo '"detail.php?title='.$words[3].'"'; ?> target="_blank"<?php }?> >
					  <h4><?php if(isset($words[3])) echo $words[3]; else echo "暂无"?></h4>
					  </a>
					</li>
					<li class="col-xs-4 five text-center">
					 <a href=<?php if(!isset($words[4])) echo "'##'";else {echo '"detail.php?title='.$words[4].'"'; ?> target="_blank"<?php }?> >
						<img src=<?php if(isset($img[4])) echo '"'.$img[4].'"'; else echo 'img/none.jpg'?> />
					</a>
					 <a href=<?php if(!isset($words[4])) echo "'##'";else {echo '"detail.php?title='.$words[4].'"'; ?> target="_blank"<?php }?> >
					  <h4><?php if(isset($words[4])) echo $words[4]; else echo "暂无"?></h4>
					  </a>
					</li>
					<li class="col-xs-4 six text-center">
					 <a href=<?php if(!isset($words[5])) echo "'##'";else {echo '"detail.php?title='.$words[5].'"'; ?> target="_blank"<?php }?> >
						<img src=<?php if(isset($img[5])) echo '"'.$img[5].'"'; else echo 'img/none.jpg'?> />
					</a>
					 <a href=<?php if(!isset($words[5])) echo "'##'";else {echo '"detail.php?title='.$words[5].'"'; ?> target="_blank"<?php }?> >
					  <h4><?php if(isset($words[5])) echo $words[5]; else echo "暂无"?></h4>
					  </a>
					</li>
				  </ul>
				</div>

		<a class="carousel-control left" href="#single" data-slide="prev">Previous</a>
		<a class="carousel-control right" href="#single" data-slide="next">Next</a>
	  </div>
	
</section>

<script src="js/index.js"></script>


		
	</div>

</div>
	<!-- foot -->
	<div class="cb"></div> 
	<div class="footer text-center"  style='background-image:url("img/bg.jpg");height: 80px ;line-height:30px'>
		<p><span>Copyright © 2016 All Rights Reserved</span><span><a href="app/#/index/main/welcome">&nbsp;&nbsp;管理入口</a></span></p>
 		 <p><span>版权所有 © 山东农业大学党委组织部 | &nbsp;技术支持：山东农业大学启航科技工作室</span></p>
	</div>
</div>

</body>
</html>

  
