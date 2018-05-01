<div controller="cmsPrisonController"  style="text-align:left">
<div class="col-lg-12">    
<h4>All Prisons</h4>  
<div class="loader" style="text-align:center;display:none">
    <img ng-src="http://{{dirlocation}}public/images/loader.gif" style="width:60px">
    </div>
    
<table class="table table-striped" ng-init="initialise_all_prisons()">
<tr style="font-weight:bold">
<td>#</td>
<td>Prison Name</td>     
<td>Prison Location</td>   
<td></td>    
</tr>    
<tr dir-paginate="prison in prisons | filter:q | filter: prisonSearch |  itemsPerPage: pageSize" current-page="currentPage" ng-cloak>

<td>{{$index +1}}</td>    
<td style="font-weight:bold">{{prison.prison_name}}</td>    
<td style="">{{prison.state}} State</td>
<td>
<a href="http://{{dirlocation}}cms/prison_locations/new/?edit={{prison.prison_id}}" class="btn btn-xs btn-default"><i class="fa fa-edit"></i></a>
<button class="btn btn-xs btn-default" style="display: none;">Disable</button>       
</td>    
    
</tr>
</table>
<dir-pagination-controls boundary-links="true" template-url="" style="float:right"></dir-pagination-controls>    
</div>
</div>