var events = angular.module('career-center-events', [])

events.controller('calendar-ctrl', function ($scope, $http) {
  'use strict';
  $http.get('../events.json')
       .then(function (res) {
         $scope.events = res.data.filter(function (el) {
           return !('external-event' in el)
         }).sort(function (a, b) { return byRelativeImmediacy(a, b) })
         $scope.externalEvents = res.data.filter(function (el) {
           return 'external-event' in el
         }).sort(function (a, b) { return byRelativeImmediacy(a, b) })
  })
  
  var byRelativeImmediacy = function(a, b) {
      var aRelativeMonth = getRelativeMonth(a.date['numerical-month'])
        , bRelativeMonth = getRelativeMonth(b.date['numerical-month'])

      if(aRelativeMonth == bRelativeMonth) return a.date.day - b.date.day
      return aRelativeMonth - bRelativeMonth
  }
  
  var getRelativeMonth = function (month) {    
    var currentMonth = new Date().getMonth() + 1
    
    // Examples:
    // month = 10, currentMonth = 11
    //   return 10 + (12 - 11) = 11
    // month = 1, currentMonth = 1
    //   return 0
    
    if(month - currentMonth >= 0)
      return month - currentMonth
    else
      return month + (12 - currentMonth)
    
  }
})