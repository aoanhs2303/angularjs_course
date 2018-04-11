 var app = angular.module('myApp',['ngMaterial', 'ngRoute']);

 app.config(function ($routeProvider, $locationProvider) {
 	$routeProvider
 	.when('/', {
 		templateUrl: 'include/content_index.html'
 	})
 	.when('/contact', {
 		templateUrl: 'include/content_contact.html'
 	})
 	.when('/about', {
 		templateUrl: 'include/content_about.html',
 		controller: 'aboutCtrl'
 	})
 	.when('/post', {
 		templateUrl: 'include/content_post.html'
 	})
 	.otherwise({ redirectTo: '/' })
 	$locationProvider.html5Mode(true);
 })

 app.controller('aboutCtrl', function ($scope, $http) {
 	$http.get('http://localhost/angular_nguoidung/Q_about/layDuLieuAbout').then(function(res){
 		$scope.dulieu = res.data;
 		console.log(res.data);
 	}, function(err){});
 })