

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

app.controller('Control2',function Control($scope,$http){
  
  $http.get('selectclient.php').then(function(response)
  {
  $scope.client = response.data ;
 
  });                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
});


app.controller('Control',function Control($scope,$http){
  

  $http.get('selectexpert.php').then(function(response)
  {
  $scope.expert = response.data ;
 
  });        

  $http.get('clientdata.php').then(function(response)
  {
  $scope.clt = response.data ;
  console.log(response.data)
 
  });  

  $scope.fonction= function(ab,ac){
           alert(ab);
    $scope.dest=ab;

    $('[href="#16"]').tab('show');
}  

  $http.get('listmsg.php').then(function(response)
  {
  $scope.inbox = response.data ;
 
                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
});
$scope.inserttData = function() {
  $http.post(
      "envoiemsg.php",
      {
          'sujet':$scope.sujet,
          'nom':$scope.nom,
          'prenom':$scope.prenom,
          'desc':$scope.desc,
          
      }).then(function (response) {

      
        alert(data);
          
      });
  

}


});





