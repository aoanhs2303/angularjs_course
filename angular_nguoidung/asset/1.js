 var app = angular.module('myApp',['ngMaterial']);
 app.controller('MyController',  function($scope, $http){
 	$scope.hienthi = true;
 	$scope.giatri = 'Lorem ipsu ut sint ratione aut cum. Ratione incidunt, eligendi repudiandae.'
 	$scope.toggle = function() {
 		$scope.hienthi = !$scope.hienthi;
 	}

 	$http.get("http://localhost/angular_nguoidung/nguoidung/laydulieu")
    .then(function(response) {
        $scope.nhieunguoi = response.data;
    });

    $scope.luudulieu = function(nguoi) {
    	// Thay đổi front end;
    	nguoi.show = !nguoi.show;

    	var data = $.param({
    		id: nguoi.id,
    		facebook: nguoi.facebook,
    		sdt: nguoi.sdt,
    		namsinh: nguoi.namsinh,
    		ten: nguoi.ten
    	});
    	var config = {
    		headers: {
    			'content-type': 'application/x-www-form-urlencoded;charset=utf-8'
    		}
    	};
    	$http.post('http://localhost/angular_nguoidung/nguoidung/luudulieu', data, config).then(function(res){
    		console.log(res.data);
    		//Thành công thì làm gì
    	}, function(res){
    		console.log(res.data);
    		//Thất bại thì làm 
    	});

    }

 	$scope.hienra = function(item) {
 		item.show = !item.show;
 	}
 })