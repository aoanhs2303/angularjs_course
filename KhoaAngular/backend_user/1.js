 var app = angular.module('myApp',['ngMaterial', 'ngRoute']);
 app.controller('MyController',  function($scope, $http, $rootScope, $location){
 	$rootScope.logout = function() {
 		$rootScope.dangnhapchua = false;
 		$location.path('/login');
 	}
 })

 app.config(function($routeProvider, $locationProvider) {
 	$locationProvider.html5Mode(true);
 	$routeProvider.
 	when('/', {
 		templateUrl: 'pages/listuser.html',
 		controller: 'listuserCtrl'
 	})
 	.when('/danhsachnguoidung', {
 		templateUrl: 'pages/listuser.html',
 		controller: 'listuserCtrl'
 	})
 	.when('/themnguoidung', {
 		templateUrl: 'pages/adduser.html',
 		controller: 'adduserCtrl'
 	})
 	.when('/login', {
 		templateUrl: 'pages/login.html',
 		controller: 'loginCtrl'
 	})
 	.otherwise({ redirectTo: '/' })
 })

app.controller('listuserCtrl',  function($scope, $http, $rootScope, $location, $mdToast){
	// if(!$rootScope.dangnhapchua) {
	// 	$location.path('/login');
	// }
	$rootScope.showMenuAndHeader = true;
	$rootScope.tieude = 'Danh sách người dùng';
	$http.get('http://localhost/angular_nguoidung/User_backend/APIUserData')
	.then(function(res){
		$scope.userData = res.data;	
	}, function(res){})
	 
	$scope.toggleShow = function(item) {
		item.show = !item.show;
	}
	$scope.updateUserData = function(item) {
		item.show = !item.show;
		var data = $.param({
			id: item.id,
			username: item.username,
			email: item.email,
			level: item.level	
		});

		console.log(data);
		var config = {
			headers: {
				'content-type': 'application/x-www-form-urlencoded;charset=UTF-8'
			}
		}
		$http.post('http://localhost/angular_nguoidung/User_backend/APIUpdateUser',data,config)
		.then(function(res){
			if(res.data == 1) {
				$scope.showSimpleToast('Cập nhật thành công');
			}
		}, function(err){})
	}

	var last = {
      bottom: false,
      top: true,
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
	
	  $scope.showSimpleToast = function(message) {
	    var pinTo = $scope.getToastPosition();
	
	    $mdToast.show(
	      $mdToast.simple()
	        .textContent(message)
	        .position(pinTo )
	        .hideDelay(1000)
	    );
	  };


})

app.controller('loginCtrl',  function($scope, $http, $mdToast, $rootScope, $location){
	$rootScope.showMenuAndHeader = false;
	$scope.login = function(user) {
		var data = $.param({
			username: $scope.user.username,
			password: $scope.user.password
		});

		var config = {
			headers: {
				'content-type': 'application/x-www-form-urlencoded;charset=UTF-8'
			}
		}
		$http.post('http://localhost/angular_nguoidung/User_backend/login',data,config)
		.then(function(res){
			if(res.data == 1) {
				$location.path('/');
				$rootScope.dangnhapchua = true;
			}
		}, function(err){})
	}
})

app.controller('adduserCtrl',  function($scope, $http, $mdToast, $rootScope, $location){
	if(!$rootScope.dangnhapchua) {
		$location.path('/login');
	}
	$rootScope.tieude = "Thêm Người Dùng";
	$rootScope.showMenuAndHeader = true;
	$scope.addUser = function() {
		var data = $.param({
			username: $scope.username,
			password: $scope.password,
			email: $scope.email,
			level: $scope.level
		});

		var config = {
			headers: {
				'content-type': 'application/x-www-form-urlencoded;charset=UTF-8'
			}
		}
		$http.post('http://localhost/angular_nguoidung/User_backend/addUser',data,config)
		.then(function(res){
			if(res.data == 1){
				$scope.showSimpleToast('Thêm thành công');
			} else {
				$scope.showSimpleToast('Thất bại');
			}
		}, function(err){})
	}
		var last = {
	      bottom: false,
	      top: true,
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
	
	  $scope.showSimpleToast = function(message) {
	    var pinTo = $scope.getToastPosition();
	
	    $mdToast.show(
	      $mdToast.simple()
	        .textContent(message)
	        .position(pinTo )
	        .hideDelay(3000)
	    );
	  };
})
