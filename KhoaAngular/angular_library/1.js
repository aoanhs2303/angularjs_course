 var app = angular.module('myApp',['ngMaterial', 'ui.select', 'ngSanitize']);
 app.controller('MyController',  function($scope, $http){
 	$http.get('http://localhost/angular_nguoidung/Library')
 	.then(function(res){
 		console.log(res.data);
 		$scope.itemArray = res.data;
 		$scope.selected = { value: $scope.itemArray[0] };
 	}, function(err){})

 	// $scope.itemArray = [
  //       {id: 1, name: 'first'},
  //       {id: 2, name: 'second'},
  //       {id: 3, name: 'third'},
  //       {id: 4, name: 'fourth'},
  //       {id: 5, name: 'fifth'},
  //   ];

    

    $scope.laydulieu = function() {
    	console.log($scope.selected.value.tendanhmuc);
    }

 })