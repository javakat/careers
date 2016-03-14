
var home = angular.module('career-center-jobs', ['angularLazyImg'])

home.config(['$interpolateProvider', function($interpolateProvider) {
  'use strict';
  $interpolateProvider.startSymbol('[[')
  $interpolateProvider.endSymbol(']]')
}]);

home.controller('calendar-ctrl', ['$scope', '$http', function ($scope, $http) {
  'use strict';
  
  var eventsFile = (window.location.href.indexOf('localhost') != -1) ? 
                    'http://auburn.edu/career/events.json' : '/career/events.json',
      calendar
  
  $http.get(eventsFile)
  .then(function (res) {
    calendar = new Calendar(res)
    $scope.events = calendar.events.slice(0, 1)
  })
}])
home.controller('sponsors-ctrl', ['$scope', '$http', function ($scope, $http) {
  'use strict';
  
  var sponsorsFile = (window.location.href.indexOf('localhost') != -1) ? 
                    'http://auburn.edu/career/sponsors.json' : '/career/sponsors.json',
      sponsors
  
  $http.get(sponsorsFile)
  .then(function (res) {
    sponsors = new Sponsors(res)
    $scope.sponsors = sponsors.list
  })
}])