 var app = angular.module('myApp',['ngMaterial']);
 app.controller('MyController',  function($scope){
 	$scope.hienthi = true;
 	$scope.giatri = 'Lorem ipsu ut sint ratione aut cum. Ratione incidunt, eligendi repudiandae.'
 	$scope.toggle = function() {
 		$scope.hienthi = !$scope.hienthi;
 	}

 	$scope.nhieunguoi = [
 		{
 			ten: "viet",
 			namsinh: "1986",
 			facebook: "fb.com/viet",
 			sdt: "0122222222"
 		}, 
 		{
 			ten: "luc",
 			namsinh: "1997",
 			facebook: "fb.com/luc",
 			sdt: "090909090"
 		},
 		{
 			ten: "nam",
 			namsinh: "2000",
 			facebook: "fb.com/nam",
 			sdt: "08080808080"
 		}
 	];

 	$scope.hienra = function(item) {
 		item.show = !item.show;
 	}
 })