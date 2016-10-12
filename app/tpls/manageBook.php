<?php 
include "../php/check_login.php";
?>
<div ng-controller="Bookshow">
<!--文章列表-->
<!--<a  class="btn btn-info" ng-click="LoadMore()">加载更多</a>	-->

<div>
<table  class="table table-hover mt20" style="text-align:center">
	<tr>
	<td>图片</td><td>题目</td><td>作者</td><td>顺序</td><td>浏览量</td><td>删除</td><td>修改</td>
	</tr>
	<tr ng-repeat="x in datas" style="padding-top:25%">
		<td ><img src="../{{x.src}}" width="60px" height="80px"></td>
		<td style="line-height:80px" >{{x.title}}</td>
		<td style="line-height:80px">{{x.author}}</td>
		<td style="line-height:80px">{{x.shunxu}}</td>
		<td style="line-height:80px">{{x.liulan}}</td>
		<td style="line-height:80px;">
			<a ng-click="DeleteBook(x.title,x.src)">删除</a>
			<!-- <a href="php/edit.php?action=del&bookid={{x.bookid}}";>删除</a> -->
		</td>
		<td style="line-height:80px;">
			<a ui-sref="index.main.rewrite({title:x.title})"  >编辑</a>
		</td>
	</tr>
	
</table>
 <pagination  total-items="bigTotalItems" ng-model="bigCurrentPage" 
 max-size="maxSize" class="pagination-sm" boundary-links="true" rotate="false" num-pages="numPages">
 </pagination> 
      
     	
</div>
</div>

