<?php 
include "../php/check_login.php";
?>	
<div  ng-controller="SearchCtrl">
   <form class="bs-example bs-example-form" role="form">
      <div class="row col-md-offset-0">
			<div class="col-md-2">
			 <select class="form-control" ng-model="selectedSite"  ng-options="x for (x, y) in sites" ></select>
			</div>
         <div class="col-md-4">
            <div class="input-group">
               <input type="text" ng-model="keywords" class="form-control">
               <span class="input-group-btn">
                 <button type="submit" class="btn btn-info" ng-click="search()">搜索</button>
               </span>
            </div><!-- /input-group -->
         </div><!-- /.col-lg-6 -->
      </div><!-- /.row -->
   </form>
   
   <table class="table"  ng-show="show" style="text-align:center">
		<tr>
			<td>图片</td><td>题目</td><td>作者</td><td>出版社</td><td>出版日期</td><td>删除</td><td>修改</td>
		</tr>
		<tr ng-repeat="x in result">
			<td ><img src="../{{x.src}}" width="60px" height="80px"></td>
		<td style="line-height:80px">{{x.title}}</td>
		<td style="line-height:80px">{{x.author}}</td>
		<td style="line-height:80px">{{x.press}}</td>
		<td style="line-height:80px">{{x.date}}</td>
		<td style="line-height:80px">
			<a ng-click="Delete(x.title,x.src)">删除</a>
			<!-- <a href="php/edit.php?action=del&bookid={{x.bookid}}";>删除</a> -->
		</td>
		<td style="line-height:80px">
			<a ui-sref="index.rewrite({title:x.title})" >编辑</a>
		</td>
		</tr>
	</table>
</div>
   
  