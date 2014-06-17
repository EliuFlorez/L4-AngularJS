(function(){
var app = angular.module('app', ['ui.bootstrap', 'ui.router']);

app.config(function($stateProvider, $urlRouterProvider) {

    $urlRouterProvider.otherwise('/home');

    $stateProvider

        // HOME STATES AND NESTED VIEWS ========================================
        .state('home', {
            url: '/home',
            templateUrl: 'app/views/partial-home.html'
        })

        // nested list with custom controller
        .state('home.list', {
            url: '/list',
            templateUrl: 'app/views/partial-home-list.html',
            controller: function($scope) {
                $scope.dogs = ['Bernese', 'Husky', 'Goldendoodle'];
            }
        })

        // nested list with just some random string data
        .state('home.paragraph', {
            url: '/paragraph',
            templateUrl: 'app/views/partial-home-paragraph.html'
        })

        .state('monkeys', {
            url: '/monkeys',
            views: {
                // the main template will be placed here (relatively named)
                '': {
                    templateUrl: 'app/views/partial-about.html'
                },
                // for column two, we'll define a separate controller
                'tableMonkeys@monkeys': {
                    templateUrl: 'app/views/table-data.html',
                    controller: 'monkeyController',
                    resolve: {
                      monkeys : function(MonkeyService) {
                        return MonkeyService.get();
                      }
                    }
                }
            }

        });

});

app.factory("MonkeyService", function($http) {
  return {
    get: function() {
      return $http.get('/api/monkeys');
    }
  };
});

// let's define the scotch controller that we call up in the about state
app.controller('monkeyController', function($scope, $http, monkeys) {

    $scope.currentPage = 1;
    $scope.itemsPerPage = 20;

    $scope.monkeys = [];
    $scope.allMonkeys = monkeys.data;

    $scope.monkeys = $scope.allMonkeys.slice(0, $scope.itemsPerPage);

    $scope.totalItems = $scope.allMonkeys.length;

    $scope.pageChanged = function(currentPage)
    {
        var start = (currentPage - 1) * $scope.itemsPerPage;
        var end = start + $scope.itemsPerPage;
        $scope.monkeys = $scope.allMonkeys.slice(start, end);
    };
});

})();