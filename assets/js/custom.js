var myApp = angular.module("myApp", ["ngRoute"]);
myApp.config(function($routeProvider) {
    $routeProvider
    .when("/", {
		controller: "MainController",
        templateUrl : "home.php"
    })
    .when("/category/:cat_type", {
		controller: "NationalController",
        templateUrl : "national.php"
    })
    .when("/green", {
        templateUrl : "green.htm"
    })
    .when("/blue", {
        templateUrl : "blue.htm"
    });
});
var app = {};
app.frontend = "http://localhost/bdtime_frontend/";
app.backend = "http://localhost/bdtime_frontend/admin/";