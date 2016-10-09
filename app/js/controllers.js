var myCtrls = angular.module('myCtrls',[]);
//登录
myCtrls.controller('login', function($scope,$http,$state) {
	var bool=false;
$scope.login=function(){
	if($scope.user==null||$scope.password==null||$scope.code==null)
				;
	else{
		
		 $http({
					method:'GET',
					url:"php/chk_code.php",
					params: {code:$scope.code}//show操作
				})
				.success(function(data,status,headers,config){
					if(data=="1")
					{
						
							{
								 $http({
												method:'GET',
												url:"php/edit.php",
												params: {action:"login",user:$scope.user,password:$scope.password}//show操作
											}).success(function(data,status,headers,config){
												//data = angular.fromJson(data);	
												//$scope.datas= data;
												if(data=="登陆成功")
												{
													$('#myModal').modal('hide');
													history.go(0);
												}
												else 
												{
													$scope.changecode();
													alertify.error("账号或密码错误");
												}				
											}).error(function(){
										}); 
									
							}		
				
								
					}
					else{
							$scope.changecode();
							alertify.error("验证码错误");
							
						}
						
				}).error(function(){
				});  
			
	
}}
$scope.changecode=function(){
	var srcc='php/code_num.php?' + Math.random()
	document.getElementById("getcode_num").src=srcc;

}

});


//搜索
myApp.controller('SearchCtrl',function SearchCtrl($scope, $http,$state) {
	
		$scope.selectedSite="title";
		$scope.show=false;
	 // $scope.names = ["编号", "题目", "作者"];
		  $scope.sites = {
	    题目 : "title",
	    作者 : "author",
		出版社 : "press",
		出版日期:"date"
	}; 
	
		
	
	$scope.search = function() {
		$scope.show=true;
		$http({
					method:'GET',
					url:"php/edit.php",
					params: {
								action:"search",
								select: $scope.selectedSite,
								keywords:$scope.keywords				
							}//查找操作
				})
		.success(function(data, status) {
			$scope.status = status;
			$scope.data = data;
			$scope.result = data; // Show result from server in our <pre></pre> element
			if($scope.result=="失败")
			{
				$scope.result="";
				alertify.error("查找失败");
			}
				
			else 
			{
				alertify.success("查找成功");
				
			}
		})
		.
		error(function(data, status) {
			$scope.data = data || "Request failed";
			$scope.status = status;			
		});
	};
	
	
	//删除书籍
	$scope.Delete = function(id,src){
		//	reset();
			var r = alertify.confirm("确定要删除 <strong>"+id+"</strong> 吗?",function (e){
				if (e) {
					$http({
						method:'GET',
						url:'php/edit.php',
						params: {action:"del",title:id,src:src}
					}).success(function(data,status,headers,config){
						alertify.success("删除成功");
							setTimeout(function(){	history.go(0);},500);
							
															
					}).error(function(data,status,headers,config){
						alertify.error("删除失败,请检查网络连接");
					});						
				} else {
					
					alertify.error("操作取消");
				}
			}); 			
		}
		$scope.LoadMore = function(){
			$scope.datas=saveData;
		}
});



//图书管理
myApp.controller('Bookshow',['$scope','$http','$state',
	function SearchCtrl($scope, $http, $state,$route) {
		var num;
		 $scope.maxSize = 7;    // 显示最大页数
        $scope.totalItems = 10000; // 总条数
        $scope.currentPage = 1;//当前页取值
        $scope.bigTotalItems = 20;
        $scope.bigCurrentPage = 1;
		
			$scope.getNum = function(){
			$http({
				method:'GET',
				url:"php/edit.php",
				params: {action:"showTotal"}//查询总记录条数
			}).success(function(data,status,headers,config){
				num=data;
			}).error(function(){
			}); 
		}
		$scope.getNum();
		
		$scope.getBook = function(){
			$http({
				method:'GET',
				url:"php/edit.php",
				params: {action:"show",pageNo:($scope.bigCurrentPage-1)*4,pageSize:4}//show操作
			}).success(function(data,status,headers,config){
				data = angular.fromJson(data);				
			$scope.bigTotalItems = (num/4)*10;//默认每页10条，此处转换为每页4条		
			//	saveData=data;
					//data = data.slice(($scope.bigCurrentPage-1)*4,$scope.bigCurrentPage*4);//每页显示4条
					$scope.datas= data;
					
			}).error(function(){

			}); 
		}
		$scope.getBook();
		var watch = $scope.$watch('bigCurrentPage',function(newValue,oldValue, scope){
				setTimeout(function(){$scope.getBook();},500);
});
		
	//删除书籍
	$scope.DeleteBook = function(id,src){
		//	reset();
			var r = alertify.confirm("确定要删除 <strong>"+id+"</strong> 吗?",function (e){
				if (e) {
					$http({
						method:'GET',
						url:'php/edit.php',
						params: {action:"del",title:id,src:src}
					}).success(function(data,status,headers,config){
							$scope.getBook();
						alertify.success("删除成功");	
					}).error(function(data,status,headers,config){
						alertify.error("删除失败,请检查网络连接");
					});						
				} else {					
					alertify.error("操作取消");
				}
			}); 			
		}
		
	
}]);



//编辑文章
myCtrls.controller('ReWriteArticle',['$stateParams','$scope','$http','$state','msgBox',
	function($stateParams,$scope,$http,$state,msgBox){

			var transform = function(data){
				return $.param(data);
			}	
			 $http.post("php/bianji.php",
				{
							title:$stateParams.title
				}, 
				{headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'},
				transformRequest: transform
			}).success(function(data,status,headers,config){
				var a=CKEDITOR.replace('WriteArticleEditor');	
				var b=CKEDITOR.replace('CatalogEditor');	
				a.setData(data[0].content);	
				$scope.shunxu=data[0].shunxu;
				$scope.src=data[0].src;
				$scope.title=data[0].title;
				$scope.author=data[0].author;
				$scope.press=data[0].press;
				$scope.date=data[0].date;
				$scope.intro=data[0].intro;
				b.setData(data[0].catalog);	
				$scope.id=data[0].title;
				alertify.success("加载完成");
				
			}).error(function(data,status,headers,config){
			}); 			
	

		 $scope.Submit = function(src,title,author,press,date,intro){			
			$scope.content = CKEDITOR.instances.WriteArticleEditor.getData();
			$scope.catalog = CKEDITOR.instances.CatalogEditor.getData();   //获取第二个CKeditor的值
			//转换JSON的方法
			var transform = function(data){
				return $.param(data);
			}		
			 $http.post("php/update.php",
				{
							shunxu:$scope.shunxu,
							src : $scope.src,
							title:$scope.title,
							author : $scope.author,
							press:$scope.press,
							date: $scope.date,
							intro: $scope.intro,
							content:$scope.content,
							catalog:$scope.catalog,
							id:$scope.id
				}, 
				{headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'},
				transformRequest: transform
			}).success(function(data,status,headers,config){

				if(data=="更新成功")
					alertify.success(data);
				else
				{
					alertify.error(data);
					$scope.title=data;
				}
			}).error(function(data,status,headers,config){
			});  
			setTimeout(function(){$state.go('index.main.manageBook')},500);
		}

	}
]);




//改变a标签的颜色(仅用于本项目，由于bootstrap的样式冲突，所以很捉急-_-!)
myCtrls.controller('changeColor',['$scope',
	function($scope){
		$scope.change = function($event){
			$($event.target).parent().siblings().find('a').removeClass("a-color-active");
			$($event.target).parent().siblings().find('a').addClass("a-color");
			$($event.target).addClass("a-color-active");
		}
	}
]);
//改变a标签的背景颜色(仅用于本项目，由于bootstrap的样式冲突，所以很捉急-_-!)
myCtrls.controller('changeBgColor',['$scope',
	function($scope){
		$scope.change = function($event){
			$($event.target).siblings().removeClass("a-bgcolor-active");
			$($event.target).siblings().addClass("a-bgcolor");
			$($event.target).addClass("a-bgcolor-active");
		}	
	}
]); 
 