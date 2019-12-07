 var myApp = angular.module('myApp', []);

myApp.controller('Control',function Control($scope,$http){
  

    $http.get('http://localhost/resolugp/selectexpert.php').then(function(response)
    {
    $scope.expert = response.data ;
    console.log($scope.expert);
    });                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
});