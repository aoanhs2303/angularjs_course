var app = angular.module('myApp',['ngMaterial']);
app.controller('MyController',  function($scope){
	$scope.tukhoa = "";
	$scope.truyentranh = [
		{tentruyen: "Doremon"},
		{tentruyen: "Conan"},
		{tentruyen: "Hentai"},
		{tentruyen: "Naturo"},
		{tentruyen: "Tấm cám"},
		{tentruyen: "Thần đồng đất Việt"},
		{tentruyen: "Something"},
		{tentruyen: "Sơn tùng"}
	]
})