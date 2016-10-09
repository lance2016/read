<div class="row">
    <div class="col-md-3">
        <div class="row">
            <div class="col-md-12">
                <div class="list-group" ng-controller="changeBgColor">
                    <a ui-sref="#" class="list-group-item active" >首页管理</a>
					 <a ui-sref="index.main.submit" class="list-group-item" ng-click="change($event)">上传图书</a>
		            <a ui-sref="index.main.manageBook" class="list-group-item" ng-click="change($event)">管理图书</a>
				</div>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div ui-view></div>
    </div>
</div>
