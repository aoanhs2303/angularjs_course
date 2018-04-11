'use strict';

var app = angular.module('demo', ['ngSanitize', 'ui.select']);

app.controller('DemoCtrl', function ($scope, $http, $timeout, $interval) {
  var vm = this;
  vm.availableColors = ['Red','Green','Blue','Yellow','Magenta','Maroon','Umbra','Turquoise'];
  vm.multipleDemo = {};
  vm.multipleDemo.colors = ['Blue','Red'];
});
