

var app = angular.module("aa",["ngRoute"]);


app.config(function($routeProvider) {
  $routeProvider
  .when("/", {
    templateUrl : "adminexpert.html"
  })
  .when("/client", {
    templateUrl : "adminclient.html"
  })
  .when("/pack", {
    templateUrl : "adminpack.html"

  })
  .when("/expertise", {
    templateUrl : "adminexpertise.html"

  });
});

app.controller('MyController',function MyController($scope,$http){
                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
});

app.controller('Control',function Control($scope,$http){
  

  $http.get('selectexpert.php').then(function(response)
  {
  $scope.expert = response.data ;
 
  });        

  $scope.fonction= function(ab){
           alert(ab);
    $scope.dest=ab;
    

    $('[href="#12"].[href="#5"]').tab('show');

}                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
});



app.controller('Control2',function Control($scope,$http){
  
  $http.get('selectclient.php').then(function(response)
  {
  $scope.client = response.data ;
 
  });                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
});

app.controller('listmsg',function Control($scope,$http){
  
  $http.get('listmsg.php').then(function(response)
  {
  $scope.inbox = response.data ;
 
  });                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
});


