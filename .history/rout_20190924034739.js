

var app = angular.module("aa");


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

app.controller('Controlw',function Control($scope,$http){
  

  $http.get('selectexpert.php').then(function(response)
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

app.controller('listmsg',function Control($scope,$http){
  
  $http.get('listmsg.php').then(function(response)
  {
  $scope.inbox = response.data ;
 
  });                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
});


app.controller('Controlw',function Controlw($scope,$http){
  $scope.id_exp="hhhhhh";

  $scope.deletedata  = function() {

    alert("jjjjj");

    $scope.id_exp="hhhhhh";
   
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