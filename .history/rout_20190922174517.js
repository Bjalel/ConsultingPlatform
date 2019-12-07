

var app = angular.module("aa", ["ngRoute"]);


app.config(function($routeProvider) {
  $routeProvider
  .when("/", {
    templateUrl : "adminexpert.html"
  })
  .when("/client", {
    templateUrl : "adminclient.html"
  })
  .when("/expertise", {
    templateUrl : "adminexpertise.html"
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


app.controller('Control2',function Control($scope,$http){
  
  $http.get('selectclient.php').then(function(response)
  {
  $scope.client = response.data ;
 
  });                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
});




app.controller('Control1',function Control1($scope,$http){
  $scope.deleteData    = function(id ) {
   
    if (confirm("Are you sure !!!. ")) {
         $http.post(
                "deleteexpert.php",
                {
                    
                    'id':id,
                  
                   
                }).then(function (data) {
                  alert("hello");
                    alert(data);
             
                    $scope.displayData();
                    alert("hi");
                });

                
    }
    else
    {
        return false;
    }


  }});