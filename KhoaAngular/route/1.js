var app = angular.module('myApp',['ngMaterial', 'ngRoute']);
app.controller('MyController',  function($scope){

})

app.config(function($routeProvider, $locationProvider) {
	$routeProvider
	.when('/', {
		templateUrl: 'chinh.html',
		controller: 'ChinhController'
	})
	.when('/xahoi', {
		templateUrl: 'xahoi.html',
		controller: 'XahoiController'
	})
	.when('/quangcao', {
		templateUrl: 'quangcao.html',
		controller: 'QuangcaoController'
	})
	.otherwise({ redirectTo: '/' })

	$locationProvider.html5Mode(true);

})

app.controller('ChinhController', function ($scope, $http) {
	$http.get("model/chinh.json").then(function(response) {
        $scope.dulieu = response.data;
    });
})

app.controller('XahoiController', function ($scope, $http) {
	$http.get("model/xahoi.json").then(function(response) {
        $scope.dulieu = response.data;
        console.log(response.data);
    });
})
app.controller('QuangcaoController', function ($scope, $http) {
	$http.get("model/quangcao.json").then(function(response) {
        $scope.dulieu = response.data;
        console.log(response.data);
    });
})