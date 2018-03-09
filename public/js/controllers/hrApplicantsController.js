
    ///////////// THIS IS THE INDEXPAGE CONTROLLER///////
    ///// THIS CONTROLS EVERY ACTIVITY ON THE INDEX PAGE
    /////////////////////////
  module.controller('hrApplicantsController', ['$scope','$http','infogathering','user_session', function($scope, $http, datagrab, user_session) {
      
    $scope.dirlocation=datagrab.dirlocation;
    $scope.currentPage = 1;
    $scope.pageSize = 50;
    $('.loader').show();

    $scope.get_applicants = function(category){
    //////////FETCH ALL RELATED TABLES  
   $http.get("http://"+datagrab.dirlocation+"hr_api/get_all_"+category)
   .then(function(response) {
   $scope.applicants = response.data; 
   },function errorCallback(response) {
   return response.status;
   });
   }

   /*
   $scope.count_records = function(id){
    //////////FETCH OTHER RECORDS  
   $http.get("http://"+datagrab.dirlocation+"hr_api/count_records?id="+id)
   .then(function(response) {
   $scope.count_records = response.data; 
   },function errorCallback(response) {
   return response.status;
   }); 
   }
  */

   $scope.get_applicants_other_details = function(id){
    //////////FETCH APPLICANTS OTHER DETAILS 
   $http.get("http://"+datagrab.dirlocation+"hr_api/get_applicants_other_details?id="+id)
   .then(function(response) {
   $scope.applicants_educational_details = angular.fromJson(response.data.educational_qualifications);
   $scope.applicants_professional_details = angular.fromJson(response.data.professional_qualifications); 
   $scope.attachments = angular.fromJson(response.data.attachments); 
   $scope.work_experience  = angular.fromJson(response.data.work_experience);
   },function errorCallback(response) {
   return response.status;
   });

   }

      

    




    }]);
