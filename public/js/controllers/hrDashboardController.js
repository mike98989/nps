
    ///////////// THIS IS THE INDEXPAGE CONTROLLER///////
    ///// THIS CONTROLS EVERY ACTIVITY ON THE INDEX PAGE
    /////////////////////////
  module.controller('hrDashboardController', ['$scope','$http','infogathering','user_session', function($scope, $http, datagrab, user_session) {

      
    $scope.completeUrlLocation=datagrab.completeUrlLocation;
    

    //////////FETCH ALL RELATED TABLES
      
   //$http.get("http://"+datagrab.dirlocation+"hr_api/get_dashboard_counter")
   $http.get(datagrab.completeUrlLocation+"hr_api/get_dashboard_counter")
   .then(function(response) {

   $scope.counter = angular.fromJson(response.data);
       calculate_percentage($scope.counter);
   //alert(JSON.stringify($scope.counter));
   },function errorCallback(response) {
   return response.status;
   });

    //////////////////CALCLATE PERCENTAGE
    function calculate_percentage(counter){
    var accepted = Math.round((counter[0].accepted *100)/counter[0].completed * 10) / 10;
    var denied = Math.round((counter[0].denied *100)/counter[0].completed * 10) / 10;
    var unverified = 100 - accepted - denied; 

    var inspectorate_cadre = Math.round((counter[0].inspectorate_cadre *100)/counter[0].completed * 10) / 10;
    var assistant_cadre = Math.round((counter[0].assistant_cadre *100)/counter[0].completed * 10) / 10;
    var superintendent_cadre = Math.round((counter[0].superintendent_cadre *100)/counter[0].completed * 10) / 10;
    var uncertain = Math.round((100 - inspectorate_cadre - assistant_cadre - superintendent_cadre)*10)/10;
    demo.initChartist(accepted, denied, unverified, assistant_cadre, inspectorate_cadre, superintendent_cadre, uncertain);    
     //alert(unverified);    
    }

    





    }]);
