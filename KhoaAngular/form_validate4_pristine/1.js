 var app = angular.module('myApp',['ngMaterial']);
 app.controller('MyController',  function($scope){
 	$scope.reset = function(form) {
 		form.$setPristine();
 	}
 })