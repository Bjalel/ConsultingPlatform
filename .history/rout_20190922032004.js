

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

app.controller('Control1', function(id) {

  //$http DELETE function
  $http({

    method: 'DELETE',
    url: 'deleteexpert.php' + id

  }).then(function successCallback(response) {

    alert("User has deleted Successfully");
    var index = $scope.users.indexOf(user);
    $scope.users.splice(index, 1);

  }, function errorCallback(response) {

    alert("Error. while deleting user Try Again!");

  });

});