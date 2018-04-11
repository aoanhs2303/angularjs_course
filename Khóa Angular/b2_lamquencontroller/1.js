 var app = angular.module('myApp',['ngMaterial']);
 app.controller('MyController', function($scope){
 	$scope.thamso = "Cái này dùng ở đâu cũng được";
 	$scope.a1 = "Some thing";
 	$scope.a3 = function() {
 		$scope.a1 = "tada";
 	}
 })