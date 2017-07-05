angular.module('myApp').controller('HomeController', function($scope, $http, $window, $sce){
    $http.get(app.backend + 'apis/initializeData').then(function (result, events) {
			console.log(result)
            $scope.menus = result.data.menus;
            $scope.breaking_news = result.data.breaking_news;
            

        });
})

angular.module('myApp').controller('MainController', function($scope, $http, $window, $sce){
    $http.get(app.backend + 'apis/initializeData').then(function (result, events) {
			console.log(result)
            $scope.latest_news = result.data.latest_news;
            

        });
})


angular.module('myApp').controller('NationalController', function($scope, $http, $window, $routeParams){
    $scope.category_label = $routeParams.cat_type;
	/* $http.get(app.backend + 'apis/initializeData').then(function (result, events) {
			console.log(result)
            $scope.menus = result.data.menus;
            $scope.breaking_news = result.data.breaking_news;
            

        }); */
	$http.get(app.backend + 'apis/getCategoryDetails/'+$scope.category_label).then(function (result, events) {
			console.log(1111111111)
			console.log(result)
            $scope.latest_news = result.data.latest_news;
            $scope.all_news = result.data.all_news;
			$scope.category = result.data.category[0].category_name;
            

        });
	
})

