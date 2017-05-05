
var app = angular.module('myApp', ['ngRoute']);
		app.config(function($routeProvider){
			$routeProvider
			.when('/', {templateUrl : 'pages/home.php', controller : 'mainController'})
			.when('/about', {templateUrl : 'pages/about.php', controller : 'aboutCtrl'})
			.when('/contact', {templateUrl : 'pages/contact.php', controller : 'contactCtrl'})
			.when('/teacher', {templateUrl : 'pages/teacher.php', controller : 'teacherCtrl'})
			.when('/student', {templateUrl : 'pages/viewStudent.php', controller : 'studentCtrl'});
		});
    
	    app.controller('mainController', function($scope) {
	
	        $scope.message = 'Everyone come and see how good I look!';
	    });

	    app.controller('aboutCtrl', function($scope) {
	        $scope.message = 'Look! I am an about page.';
	    });

	    app.controller('contactCtrl', function($scope) {
	        $scope.message = 'Contact us! JK. This is just a demo.';
	    });

	    app.controller('teacherCtrl', function($scope) {
	        $scope.teacherList = ['Alen', 'jeny', 'Ruby', 'jorden'];
	    });

	    app.controller('studentCtrl', function($scope, $http) {
	        $http.get("./pages/popData.php").success(function(data){
	        	$scope.studentList = data; 
	        }).error(function(data){
	        	console.log(data)
	        });
	    });