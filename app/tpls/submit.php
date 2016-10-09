 <?php
 include "../php/check_login.php";
 ?>
<form role="form" action="php/upload.php" method="post" enctype="multipart/form-data" >
	序号：<input type="text" name="shunxu" placeholder="序号" required class="form-control"><br/>
	题目：<input type="text" name="title" placeholder="题目" required class="form-control"><br/>
	作者<input type="text" name="author" placeholder="作者"  required class="form-control"><br/>
	出版社<input type="text" name="press" placeholder="出版社"required class="form-control"><br/>
	日期<input type="text" id="d11" onclick="WdatePicker()" name="date"  required placeholder="日期"  class="form-control"><br/>
	上传图片<input type="file" name="upfile" class="file" required><br/>
	<input type="submit" name="上传" value="上传" class="btn btn-info">
</form>


