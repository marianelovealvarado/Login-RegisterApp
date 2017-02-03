var registerApp = angular.module('app',[]);
registerApp.controller('ctrl', function($scope, $http){
   
    $scope.getsData = function(){
    $http.get('getData.php')
       .then(function(result){
          $scope.b = result.data;
       
          
        });
 }; 

  $scope.insert = function(){
      let url = "http://127.0.0.1/registra/scripts/pushData.php";
      let data = $.param({
          Firstname : $scope.f,
          Lastname : $scope.l,
          Middlename : $scope.m,
          Dateofbirth : $scope.dob,
          Gender : $scope.g
          
      }); 

      let config = {
        headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                  }
      }
      $http.post(url, data, config)
           .then(
               function(response){
                 console.log(response);
                 $scope.getsData();
               }, 
               function(response){
                 console.log(response);
               }
            );
      }
});




