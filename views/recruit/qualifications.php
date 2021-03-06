<section class="u-bg-overlay g-bg-pos-top-center g-bg-img-hero g-bg-black-opacity-0_3--after g-py-100" style="background:#ccc;padding-top:10px !important; padding-bottom:10px !important" ng-controller="recruitRegistrationController" ng-cloak>

<div class="container  u-bg-overlay__inner" style="background:#fff;padding:30px 0;border-top:4px solid #90b205">

<div class="stepwizard" style="margin-bottom:20px">
    <div class="stepwizard-row">
    	
    	<div class="stepwizard-step">
        	<a href="<?php if($_SESSION['user_details']['application_stage']>0){echo URL.'recruit/positions';}?>" style="color:inherit;">
            <button type="button" class="btn btn-default btn-circle">1</button>
            <p>Positions</p>
            </a>
        </div>

        <div class="stepwizard-step">
        	<a href="<?php if($_SESSION['user_details']['application_stage']>1){echo URL.'recruit/registration';}?>" style="color:inherit;">
            <button type="button" class="btn btn-default btn-circle">2</button>
            <p>Registration</p>
            </a>
        </div>
    	
        <div class="stepwizard-step">
        	<a href="<?php if($_SESSION['user_details']['application_stage']>2){echo URL.'recruit/qualifications';}?>" style="color:inherit;">
            <button type="button" class="btn btn-primary btn-circle">3</button>
            <p>Qualifications</p>
        	</a>
        </div>
        <div class="stepwizard-step">
        	<a href="<?php if($_SESSION['user_details']['application_stage']>3){echo URL.'recruit/experience';}?>" style="color:inherit;">
            <button type="button" class="btn btn-default btn-circle" disabled="disabled">4</button>
            <p>Work Experience</p>
        	</a>
        </div> 
        <div class="stepwizard-step">
        	<a href="<?php if($_SESSION['user_details']['application_stage']>4){echo URL.'recruit/attachments';}?>" style="color:inherit;">
            <button type="button" class="btn btn-default btn-circle" disabled="disabled">5</button>
            <p>Attachments</p>
        	</a>
        </div> 
        <div class="stepwizard-step">
            <button type="button" class="btn btn-default btn-circle" disabled="disabled">6</button>
            <p>Finish</p>
        	
        </div> 
    </div>
</div>


  <header class="text-center g-width-60x--md mx-auto g-mb-30">
    <div class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
    
      <h2 class="h3 u-heading-v2__title g-color-gray-dark-v2 g-font-weight-600" style="margin-top:20px">Welldone <?php echo $_SESSION['user_details']['fname'].' '.$_SESSION['user_details']['sname'];?></h2>

      <h4><strong>Please fill up your Qualifications (from Higherst to Lowest)</strong></h4>

    </div>
  </header>
  <hr>
	<div class="row">
		
<!-- MESSAGE MODAL WINDOW -->
<div ng-controller="recruitRegistrationController as recruitCtrll" class="modal fade" id="edu_qualification_Window_Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content col-lg-12" style="float:none;margin:auto;padding:0 10px">
      
        <div class="modal-header" style="text-align: center !important">
        <button type="button" class="close" style="" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><br/>
        <h5 class="modal-title" id="" style="text-align:center;font-weight: bold">Add Educational Qualification</h5>
      </div>
      
       <div class="modal-body" style="padding:5px;text-align:center">
          <form action="" method="post">
			  	<input type="hidden" name="form" value="educational">
				  <div class="row mb-3">
				  	<div class="col-md-6 col-sm-12">
				  		<label style="font-weight: bold">From</label>
				  		<select name="startdate" required="" class="form-control">
				  		<?php for($year=1978;$year<=date('Y');$year++){?>	
				  		<option value="<?php echo $year;?>"><?php echo $year;?></option>
				  		<?php }?>	
				  		</select>
				  		
				  	</div>
				  	<div class="col-md-6 col-sm-12">
				  		<label style="font-weight: bold" >To</label>
				  		<select name="enddate" required="" class="form-control">
				  		<?php for($year=1978;$year<=date('Y');$year++){?>	
				  		<option value="<?php echo $year;?>"><?php echo $year;?></option>
				  		<?php }?>	
				  		</select>
				  	</div>
				  </div>

				  <div class="row mb-3">
				  	<div class="col-md-6 col-sm-12">
				  		<label style="font-weight: bold">Type</label>
				  		<select name="type" required="" class="form-control" ng-model="degree" ng-init="degree='BSc'">
				  		<option value="{{degree.degree}}" ng-repeat="degree in degrees">{{degree.degree}}</option>
				  		<option value="Others">Others</option>
				  		</select>

				  	</div>
				  	<div class="col-md-6 col-sm-12">				  	
			  		<label style="font-weight: bold">Grade</label>
			  		<select name="classification" required="" class="form-control">
			  		<option value="{{classification.classification}}" ng-repeat="classification in classifications">{{classification.classification}}</option>

			  		</select>
			  						  		
				  	</div>
				  </div>

				    <div class="row mb-3">
				  	<div class="col-md-12">
				  		<label style="font-weight: bold">Educational Institution/School</label>
				  		<input type="text" name="institution" required class="form-control">
				  	</div>
				  </div>

				  <div class="row mb-3" ng-show="degree!='First School Leaving Certificate' && degree!='SSCE(WAEC)' && degree!='SSCE(NECO)'">
				  	<div class="col-md-12">
				  		<label style="font-weight: bold">Course of Study</label>
				  		<input type="text" name="course_of_study" class="form-control">
				  	</div>
				  </div>

				  <div class="row mb-3">
				  	<div class="col-sm-12 col-md-6">
				  		<label style="font-weight: bold">City</label>
				  		<input type="text" name="city" class="form-control">
				  	</div>
				  	<div class="col-sm-12 col-md-6">
				  		<label style="font-weight: bold">Country</label>
				  		<select required name="country" class="form-control" ng-model="country" ng-init="country='Nigeria'">
				  		<option value="{{country.name}}" ng-repeat="country in countries">{{country.name}}</option>
				  		</select>
				  	</div>
				  </div>
				  <div class="row mb-3">
				  	<div class="col-md-12 text-center">
				  		<button class="btn btn-md btn-block u-btn-primary rounded g-py-13" type="submit">Save</button>
				  	</div>
				  </div> 
        </form>
       </div>
  </div>
</div>
</div>


		
<!-- MESSAGE MODAL WINDOW -->
<div ng-controller="recruitRegistrationController as recruitCtrll" class="modal fade" id="pro_qualification_Window_Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content col-lg-12" style="float:none;margin:auto;padding:0 10px">
      
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h5 class="modal-title" id="" style="text-align:center;font-weight: bold">Add Professional Qualifications/Certifications </h5>
      </div>
      
       <div class="modal-body" style="padding:5px;text-align:center">
          <form action="" method="post">
			  	<input type="hidden" name="form" value="professional">
				  <div class="row mb-3">
				  	<div class="col-md-6 col-sm-12">
				  		<label style="font-weight: bold">From</label>
				  		<select name="startdate" required="" class="form-control">
				  		<?php for($year=1978;$year<=date('Y');$year++){?>	
				  		<option value="<?php echo $year;?>"><?php echo $year;?></option>
				  		<?php }?>	
				  		</select>
				  		
				  	</div>
				  	<div class="col-md-6 col-sm-12">
				  		<label style="font-weight: bold">To</label>
				  		<select name="enddate" required="" class="form-control">
				  		<?php for($year=1978;$year<=date('Y');$year++){?>	
				  		<option value="<?php echo $year;?>"><?php echo $year;?></option>
				  		<?php }?>	
				  		</select>
				  	</div>
				  </div>

				  <div class="row mb-3">
				  	<div class="col-md-12">
				  		<label style="font-weight: bold">Institution</label>
				  		<input type="text" name="institution" required class="form-control">
				  	</div>
				  </div>

				   <div class="row mb-3">
				  	<div class="col-md-12">
				  		<label style="font-weight: bold">Certification Title</label>
				  		<input type="text" name="certificate_title" class="form-control">
				  	</div>
				  </div>


				  <div class="row mb-3">
				  	<div class="col-md-6 col-sm-12">
				  		<label style="font-weight: bold">City</label>
				  		<input type="text" name="city" required class="form-control">
				  	</div>
				  	<div class="col-md-6 col-sm-12">
				  		<label style="font-weight: bold">Country</label>
				  		<select required name="country" class="form-control" ng-model="country" ng-init="country='Nigeria'">
				  		<option value="{{country.name}}" ng-repeat="country in countries">{{country.name}}</option>
				  		</select>
				  	</div>
				  </div>
				  
				  <div class="row mb-3">
				  	<div class="col-md-12 text-center">
				  		<button class="btn btn-md btn-block u-btn-primary rounded" type="submit">Save</button>
				  	</div>
				  </div>
			  </form>
       </div>
  </div>
</div>
</div>
	</div>
	
	<div class="row">
		<div class="col-lg-11" style="margin:0 auto;float:none">
			<h5 class="text-center" style="font-weight:bold">Educational Qualifications <button type="button" ng-click="add_educational_qualification()" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> Add Qualifications</button></h5>
			<table class="table table-striped table-bordered" style="font-size:13px" ng-init="get_qualifications(<?php echo (int) Session::get('id');?>)" ng-cloak>
			  <thead>
			    <tr>
			    	<th>#</th>
			      <th scope="col">Dates</th>
			      <th scope="col">Institution</th>
			      <th scop="ecol">Course of Study</th>
			      <th scope="col">City/Country</th>
			     <th scope="col">Type</th>
			     <th scope="col">Grade</th>
			      <th scope="col">Remove</th>
			    </tr>
			  </thead>
			  <thead>
			  <tr class="loader" id="load_qualification" style="display:nne">
			  <td colspan="8" style="text-align:center"><img src="<?php echo URL;?>public/images/loader.gif" style="width:40px;"></td>	
			  </tr>
			</thead>
			  	
			  <tr ng-show="edu_qualifications.length!=0" dir-paginate="edu in edu_qualifications | itemsPerPage: pageSize track by $index"  current-page="currentPage" ng-cloak>
			  <td>{{$index +1}}</td>
			  <td>{{edu.startdate}} - {{edu.enddate}}</td>
			  <td style="font-weight:bold">{{edu.institution}}</td>
			  <td>{{edu.course_of_study}}</td>
			  <td>{{edu.city}}/{{edu.country}}</td>
			  <td>{{edu.type}}</td>
			  <td>{{edu.classification}}</td>
			  <td><i class="fa fa-times" style="cursor:pointer" ng-click="delete_result(edu.id, <?php echo  (int) Session::get('id');?>,'qualification', edu)"></i></td>	
			  </tr>
			  <tr ng-show="edu_qualifications.length==0">
			  <td colspan="8" style="text-align:center;color:#f30">
			  	No educational qualifications yet!
			  </td>	
			  </tr>
			</table>	
			 <dir-pagination-controls boundary-links="true" template-url="" style="float:right"></dir-pagination-controls>	
		</div>

	</div>

	<hr>
	<div class="row">
		<div class="col-lg-11" style="margin:0 auto;float:none">
			<h5 class="text-center" style="font-weight:bold">Professional Qualifications/Certifications <button type="button" ng-click="add_professional_qualification()" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> Add Certifications</button></h5>
			<table class="table table-striped table-bordered">
			  <thead>
			    <tr>
			    <th>#</th>
			      <th scope="col">Dates</th>
			      <th scope="col">Institution</th>
			      <th scope="col">Certification</th>
			      <th scope="col">City/Country</th>
			      <th scope="col">Remove</th>
			    </tr>
			  </thead>
			  <thead>
			  <tr class="loader" id="load_professional" style="display:nne">
			  <td colspan="8" style="text-align:center"><img src="<?php echo URL;?>public/images/loader.gif" style="width:40px;"></td>	
			  </tr>
			  </thead>
			  <tr ng-show="pro_qualifications.length!=0" dir-paginate="pro in pro_qualifications | itemsPerPage: pageSize" current-page="currentPage" ng-cloak>
			  <td>{{$index +1}}</td>
			  <td>{{pro.startdate}} - {{pro.enddate}}</td>
			  <td>{{pro.institution}}</td>
			  <td>{{pro.certificate_title}}</td>
			  <td>{{pro.city}}/{{pro.country}}</td>
			  <td><i class="fa fa-times" style="cursor:pointer" ng-click="delete_result(pro.id, <?php echo  (int) Session::get('id');?>,'professional', pro )"></i></td>
			  </tr>
			  <tr ng-show="pro_qualifications.length==0">
			  <td colspan="6" style="text-align:center;color:#f30">
			  	No professional qualifications yet!
			  </td>	
			  </tr>
			</table>	
			<dir-pagination-controls boundary-links="true" template-url="" style="float:right"></dir-pagination-controls>		
		</div>
	</div>
	<hr/>
	<div class="row">
		<div class="col-sm-6 text-center">
			<form action="" method="post">
				<input type="hidden" name="form" value="back">
				<button class="btn btn-md  btn-success rounded" type="submit">Back</button>

				<a class="btn btn-md btn-danger" href="<?php echo URL;?>recruit/logout">Logout</a>
			</form>
		</div>
		<div class="col-sm-6 text-center">
			<form action="" method="post">
				<input type="hidden" name="application_stage" value="<?php if($_SESSION['user_details']['application_stage']<4){echo '4';}else{echo $_SESSION['user_details']['application_stage'];}?>">
				<input type="hidden" name="form" value="next">
				<button class="btn btn-md  u-btn-primary rounded" type="submit" ng-show="edu_qualifications.length!=0 || pro_qualifications.length!=0">Save and Proceed</button>
			</form>
		</div>
	</div>
  
</div>
</section>