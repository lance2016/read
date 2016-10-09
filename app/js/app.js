var myApp = angular.module('myApp', [
	'ui.router','myCtrls','myServices','myDirectives','ui.bootstrap'
]);

myApp.config(function($stateProvider, $urlRouterProvider) {
    $urlRouterProvider.otherwise('/index/main/welcome');
    $stateProvider
        .state('index', {
            url: '/index',
            views: {
                '': {
                    templateUrl: 'tpls/index.php'
                },
                'topbar@index': {
                    templateUrl: 'tpls/topbar.php'
                },
                'main@index': {
                    templateUrl: 'tpls/indexconfig.php'
                },
            }
        })
		
		.state('index.main', {
            url: '/main',
            views: {
                'main@index': {
                    templateUrl: 'tpls/indexconfig.php'
                }
            }
        })
		
		//首页侧边栏
        .state('index.main.welcome', {
            url: '/welcome',
            templateUrl: 'tpls/welcome.php'
        })
		.state('index.main.submit', {
            url: '/submit',
            templateUrl: 'tpls/submit.php'
        })
		 .state('index.main.manageBook', {
            url: '/manageBook',
            templateUrl: 'tpls/manageBook.php'
        })
		
		//文章编辑
        .state('index.main.rewrite', {
            url: '/rewrite/:title',
                templateUrl: 'tpls/rewrite.php'
        })
		

		
		//切换到频道search
		.state('index.search', {
            url: '/search',
             views: {
                'main@index': {
                    templateUrl: 'tpls/search.php'
                }
            }
        })
		//切换到频道书籍管理
		.state('index.article', {
            url: '/article',
             views: {
                'main@index': {
                    templateUrl: 'tpls/manageBook.php'
                }
            }
        })
		//编辑
        .state('index.rewrite', {
            url: '/rewrite/:title',
            views: {
                'main@index': {
                    templateUrl: 'tpls/rewrite.php'
                }
            }
        })	
		
		
		
		
		//文章发布
        .state('index.write', {
            url: '/write',
            views: {
                'main@index': {
                    templateUrl: 'tpls/write.php'
                }
            }
        })
		
		
		
		
		
		
		
});
  