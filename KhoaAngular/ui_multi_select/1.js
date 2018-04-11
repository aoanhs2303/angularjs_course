 var app = angular.module('myApp',['ngMaterial','ngSanitize', 'ui.select']);
 app.controller('MyController',  function($scope,$http){
 	var vm = this;
 	$http.get('http://localhost/angular_nguoidung/Library')
 	.then(function(res){
 		vm.availableColors = res.data;
 		vm.multipleDemo = {};
 		vm.multipleDemo.danhmuc = [];
 	},function(err){})

 	$scope.guidulieu = function($dulieu) {
 		console.log($dulieu);
 	}

 })