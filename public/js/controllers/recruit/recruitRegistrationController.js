
    ///////////// THIS IS THE INDEXPAGE CONTROLLER///////
    ///// THIS CONTROLS EVERY ACTIVITY ON THE INDEX PAGE
    /////////////////////////
  module.controller('recruitRegistrationController', ['$scope','$http','infogathering','user_session', function($scope, $http, datagrab, user_session) {

      
    $scope.dirlocation=datagrab.dirlocation;
   $scope.currentPage = 1;
    $scope.pageSize = 10;

    //////////FETCH ALL RELATED TABLES
   $http.get("http://"+datagrab.dirlocation+"recruit_api/get_all_related_tables")
   .then(function(response) {
   $scope.degrees = angular.fromJson(response.data.type_of_degree); 
    $scope.classifications = angular.fromJson(response.data.classifications);
   },function errorCallback(response) {
   return response.status;
   });

      
    $scope.get_qualifications = function(id){
    //////////FETCH RESULTS
   $http.get("http://"+datagrab.dirlocation+"recruit_api/get_qualifications?id="+id)
   .then(function(response) {
    $scope.edu_qualifications = angular.fromJson(response.data.qualifications);
    $scope.pro_qualifications = angular.fromJson(response.data.professionals);  
   },function errorCallback(response) {
   return response.status;
   });
   
      
    }
    
    $scope.delete_result = function (id,user_id,table){
    var conf = confirm("Do you want to delete this record?");
    if(conf==true){
    //////////DELETE RESULT
   $http.get("http://"+datagrab.dirlocation+"recruit_api/delete_result?id="+id+"&user_id="+user_id+"&table="+table)
   .then(function(response) {
    if(response.data==''){
    window.location.reload();    
    }   
   },function errorCallback(response) {
   return response.status;
   });
        
    }    
    }
      

    $scope.add_educational_qualification = function(){
    $('#edu_qualification_Window_Modal').appendTo("body").modal('show');    
    }

    $scope.add_professional_qualification = function(){
    $('#pro_qualification_Window_Modal').appendTo("body").modal('show');    
    }
    



    }]);
