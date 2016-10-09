<?php 
include "../php/check_login.php";
?>
<div ng-controller='WriteArticle'>
	<form id="myForm">
		<legend>写文章</legend>
		<div class="form-group">
			<label>文章标题</label>
			<input type="text" class="form-control" ng-model="title"/>
		</div>
		<div class="form-group">
			<label>作者</label>
			<input type="text" class="form-control" ng-model="author"/>
		</div>
		<div class="form-group">
			<label>选择栏目</label>
			<select class="form-control w200 mt10" ng-model="mid">
			  <option value='1'>留言</option>
			  <option value='2'>学术</option>
			  <option value='3'>其他</option>	
			</select>
		</div>		
		<div class="form-group">
			<textarea name="WriteArticleEditor" id="WriteArticleEditor"></textarea>
		</div>
		<button type="submit" class="btn btn-default" ng-click="Submit(title,author,mid)">提交</button>
	</form>
</div>				

