var myApp = angular.module('myApp', []);

myApp.controller('MyController',function MyController($scope,$http){
  

    $http.get('http://localhost/resolugp/selectexpert.php').then(function(response)
    {
    $scope.expert = response.data ;
    console.log($scope.expert);
    });                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
});