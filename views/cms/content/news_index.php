<div controller="cmsNewsController"  style="text-align:left">
<div class="col-lg-12">    
<h4>All News</h4>    
<table class="table table-striped" ng-init="initialise_all_news()">
<tr style="font-weight:bold">
<td>#</td>
<td>Image</td>     
<td>Title</td>   
<td>Content</td>
<td></td>
<td></td>    
</tr>    
<tr ng-repeat="newsitem in news">
<td>{{$index +1}}</td>    
<td><img ng-src="http://{{dirlocation}}public/{{newsitem.picture}}" style="width:40px"></td>    
<td style="">{{newsitem.newsTitle}}</td>
<td ng-init="sanitize = sanitize(newsitem.Details)">{{sanitize | limitTo:200}}</td>    
<td width="120px">
<a href="http://{{dirlocation}}cms/news/new/?edit={{newsitem.id}}" class="btn btn-xs btn-default pull-left"><i class="fa fa-edit"></i></a>
<a href="http://{{dirlocation}}cms/news?unpublish={{newsitem.id}}" ng-if="newsitem.status=='1'" class="btn btn-xs btn-default">Unpublish</a>
<a href="http://{{dirlocation}}cms/news?publish={{newsitem.id}}" ng-if="newsitem.status=='0'" class="btn btn-xs btn-success">publish</a>    
</td>
<td><button ng-click="deleteNews(newsitem.id)" class="btn btn-xs btn-default pull-left"><i class="fa fa-times"></i></button></td>    
</tr>
</table>
</div>
</div>