

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

                if ( empty($_post(id)) )
                 echo "hiiiaeuss" ;
    }
    else
    {
        return false;
    }


  }});