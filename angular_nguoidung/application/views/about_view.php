<!DOCTYPE html>
<html lang="en"  >
<head>
	<title> Quản lý About  </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 	
	<link rel="stylesheet" href="<?php echo base_url() ?>asset/vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>asset/vendor/angular-material.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>asset/vendor/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>asset/1.css">
</head>
<style>
	md-toast.ng-scope._md.md-default-theme.md-bottom.md-right {
		position: fixed;
	}
</style>
<body ng-app="myApp" ng-controller="MyController">
	<div class="container">
		<div class="jumbotron">
			<h1 class="display-3">Quản lý About</h1>
		</div>
		<div ng-repeat="value in dulieu" ng-init="value.show='true'">
			<div class="card">
				<div class="card-header"><h5><b>Tiêu dề</b></h5></div>
				<div class="card-block"  ng-show="value.show">
					<h4 class="card-title"><h6>{{ value.tieude }}</h6>
				</div>
				<div class="card-block" ng-show="!value.show">
					<input type="text" class="form-control" ng-model="value.tieude">
				</div>
			</div>	
			<div class="card">
				<div class="card-header"><h5><b>Tiêu dề phụ</b></h5></div>
				<div class="card-block" ng-show="value.show">
					<h4 class="card-title"><h6>{{ value.tieudephu }}</h6>
				</div>
				<div class="card-block" ng-show="!value.show">
					<input type="text" class="form-control" ng-model="value.tieudephu">
				</div>
			</div>	
			<div class="card">
				<div class="card-header"><h5><b>Nội dung</b></h5></div>
				<div class="card-block" ng-show="value.show">
					<h4 class="card-title"><h6>{{ value.noidung }}</h6>
				</div>
				<div class="card-block" ng-show="!value.show">
					<input type="text" class="form-control" ng-model="value.noidung">
				</div>
			</div>	
			<div class="card">
				<div class="card-header"><h5><b>Hình ảnh</b></h5></div>
				<div class="card-block" ng-show="value.show">
					<img src="{{ value.anh }}" style="height: 300px" alt="">
				</div>
				<div class="card-block" ng-show="!value.show">
					<input type="text" class="form-control" ng-model="value.anh">
				</div>
			</div>	
			<div class="button">
				<button ng-click="toggle(value)" class="btn btn-outline-warning btn-block" ng-show="value.show">Sửa <i class="fa fa-pencil"></i></button>
				<button ng-click="updateData(value)" class="btn btn-outline-success btn-block" ng-show="!value.show">Lưu <i class="fa fa-pencil"></i></button>
			</div>		
		</div>

		<img src="" alt="" class="img-fluid">
	</div>
	
	


	<script type="text/javascript" src="<?php echo base_url() ?>asset/vendor/bootstrap.js"></script>  
	<script type="text/javascript" src="<?php echo base_url() ?>asset/vendor/angular-1.5.min.js"></script>  
	<script type="text/javascript" src="<?php echo base_url() ?>asset/vendor/angular-animate.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>asset/vendor/angular-route.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>asset/vendor/angular-aria.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>asset/vendor/angular-messages.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>asset/vendor/angular-material.min.js"></script>  
	<script type="text/javascript" src="<?php echo base_url() ?>asset/1.js"></script>
</body>
	<script>
		 var app = angular.module('myApp',['ngMaterial']);
		 app.controller('MyController', function ($scope, $http, $mdToast) {
		 	$http.get('http://localhost/angular_nguoidung/Q_about/layDuLieuAbout').then(function(res){
		 		$scope.dulieu = res.data;
		 		console.log(res.data);
		 	}, function(err){
		 		console.log(err);
		 	})

		 	$scope.toggle = function(item) {
		 		item.show = !item.show;
		 	}

		 	$scope.updateData = function(item) {
		 		item.show = !item.show;
		 		var dulieucansua = $.param({
		 			id: item.id,
		 			tieude: item.tieude,
		 			tieudephu: item.tieudephu,
		 			noidung: item.noidung,
		 			anh: item.anh
		 		});

		 		$http.post('http://localhost/angular_nguoidung/Q_about/luuDuLieu',dulieucansua,{headers:{
		 			'content-type':'application/x-www-form-urlencoded;charset=utf-8'
		 		}}).then(function(res){
		 			$scope.showSimpleToast();
		 			console.log(res.data);
		 		}, function(err){})	
		 	}


var last = {
      bottom: true,
      top: false,
      left: false,
      right: true
    };

  $scope.toastPosition = angular.extend({},last);

  $scope.getToastPosition = function() {
    sanitizePosition();

    return Object.keys($scope.toastPosition)
      .filter(function(pos) { return $scope.toastPosition[pos]; })
      .join(' ');
  };

  function sanitizePosition() {
    var current = $scope.toastPosition;

    if ( current.bottom && last.top ) current.top = false;
    if ( current.top && last.bottom ) current.bottom = false;
    if ( current.right && last.left ) current.left = false;
    if ( current.left && last.right ) current.right = false;

    last = angular.extend({},current);
  }

  $scope.showSimpleToast = function() {
    var pinTo = $scope.getToastPosition();

    $mdToast.show(
      $mdToast.simple()
        .textContent('Cập nhật thành công!')
        .position(pinTo )
        .hideDelay(3000000)
    );
  };

  $scope.showActionToast = function() {
    var pinTo = $scope.getToastPosition();
    var toast = $mdToast.simple()
      .textContent('Marked as read')
      .action('UNDO')
      .highlightAction(true)
      .highlightClass('md-accent')// Accent is used by default, this just demonstrates the usage.
      .position(pinTo);

    $mdToast.show(toast).then(function(response) {
      if ( response == 'ok' ) {
        alert('You clicked the \'UNDO\' action.');
      }
    });
  };



		 })
	</script>

</html>