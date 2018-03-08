
    ///////////// THIS IS THE INDEXPAGE CONTROLLER///////
    ///// THIS CONTROLS EVERY ACTIVITY ON THE INDEX PAGE
    /////////////////////////
  module.controller('hrApplicantsController', ['$scope','$http','infogathering','user_session', function($scope, $http, datagrab, user_session) {

      
    $scope.dirlocation=datagrab.dirlocation;
    $scope.currentPage = 1;
    $scope.pageSize = 50;
    $('.loader').show();

    //////////FETCH ALL RELATED TABLES
      
   $http.get("http://"+datagrab.dirlocation+"hr_api/get_all_applicants")
   .then(function(response) {
       
   $scope.applicants = response.data; 

   },function errorCallback(response) {
   return response.status;
   });

      

    




    }]);
