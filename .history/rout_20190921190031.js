

var app = angular.module("aa", ["ngRoute"]);
app.config(function($routeProvider) {
  $routeProvider
  .when("/", {
    templateUrl : "adminexpert.html"
  });


});

app.controller('MyController',function MyController($scope,$http){
                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
});

app.controller('Control',function Control($scope,$http){
  

  $http.get('http://localhost/resolugp/selectexpert.php').then(function(response)
  {
  $scope.expert = response.data ;
  console.log($scope.expert);
  });                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
});