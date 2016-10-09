<?php 
include "../php/check_login.php";
?>
<div ng-controller='ReWriteArticle'>	
	<form role="form">

		<div class="form-group">
		  <input type="text" class="form-control" ng-show="false"  ng-model="src"
			 placeholder="请输入编号">
	   </div>
	   <div class="form-group">
		  <input type="text" class="form-control" ng-show="false"  ng-model="id"
			placeholder="请输入题目">
	   </div>
	   
	   
	    <div class="form-group">
		  <label for="name">序号</label>
		  <input type="text" class="form-control" required  ng-model="shunxu"
			 placeholder="请输入序号">
	   </div>
	  
	   <div class="form-group">
		  <label for="name">题目</label>
		  <input type="text" class="form-control" required  ng-model="title"
			 placeholder="请输入题目">
	   </div>
	   
	   <div class="form-group">
		  <label for="name">作者</label>
		  <input type="text" class="form-control" required  ng-model="author"
			 placeholder="请输入作者">
	   </div>
	   
	   <div class="form-group">
		  <label for="name">出版社</label>
		  <input type="text" class="form-control" required   ng-model="press"
			 placeholder="请输入出版社">
	   </div>
	   
	    <div class="form-group">
		  <label for="name">出版日期</label>
		  <input type="text" class="form-control"  ng-model="date"
			 placeholder="请输入出版日期">
	   </div>
	   
	   <div class="form-group">
		  <label for="name">简介</label>
		  <textarea  class="form-control" rows="4" required  ng-model="intro"  placeholder="请输入简介"></textarea>			
	   </div>   
	   <div class="form-group">
			 <label for="name">详细信息</label>
			<textarea name="WriteArticleEditor" id="WriteArticleEditor" required  ng-model="content"  placeholder="请输入详细信息"></textarea>
	   </div>
	   
	  <div class="form-group">
			 <label for="name">目录</label>
			<textarea name="CatalogEditor" id="CatalogEditor" required  ng-model="catalog"  placeholder="请输入目录"></textarea>
	   </div>
	   
	   <button type="submit" class="btn btn-info" ng-click="Submit(src,title,author,press,date,intro)">提交</button>
	</form>
</div>				

