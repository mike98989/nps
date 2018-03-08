
    ///////////// THIS IS THE INDEXPAGE CONTROLLER///////
    ///// THIS CONTROLS EVERY ACTIVITY ON THE INDEX PAGE
    /////////////////////////
  module.controller('hrDashboardController', ['$scope','$http','infogathering','user_session', function($scope, $http, datagrab, user_session) {

      
    $scope.dirlocation=datagrab.dirlocation;
    

    //////////FETCH ALL RELATED TABLES
      
   $http.get("http://"+datagrab.dirlocation+"hr_api/get_dashboard_counter")
   .then(function(response) {
   $scope.counter = angular.fromJson(response.data);
   
       calculat_percentage($scope.counter);
       
       
   //alert(JSON.stringify($scope.counter));
   },function errorCallback(response) {
   return response.status;
   });

    //////////////////CALCLATE PERCENTAGE
    function calculat_percentage(counter){
   
    var accepted = Math.round((counter[0].accepted/counter[0].completed)*100);
    var denied = Math.round((counter[0].denied/counter[0].completed)*100); 
    var unverified = 100 - accepted - denied;   
    demo.initChartist(accepted, denied, unverified);    
     //alert(unverified);    
    }

    





    }]);
