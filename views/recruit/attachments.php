<section class="u-bg-overlay g-bg-pos-top-center g-bg-img-hero g-bg-black-opacity-0_3--after g-py-100" style="background:#ccc;padding-top:10px !important; padding-bottom:10px !important" ng-controller="recruitRegistrationController">
<div class="container u-bg-overlay__inner" style="background:#fff;padding:30px 0;border-top:4px solid #90b205">

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
            <button type="button" class="btn btn-default btn-circle">3</button>
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
            <button type="button" class="btn btn-primary btn-circle" disabled="disabled">5</button>
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
      <h2 class="h3 u-heading-v2__title g-color-gray-dark-v2 g-font-weight-600" style="margin-top:20px">Just in a moment <?php echo $_SESSION['user_details']['fname'].' '.$_SESSION['user_details']['sname'];?></h2>
      <h4>Upload all your <strong>Credentials</strong></h4>
    </div>
    
      <h5><?php echo $position['hint'];?> to complete the registration process</h5>
  
  </header>
  <hr/>
  <div class="col-md-12" style="margin:0 auto;float:none">
	</div>
	<div class="row" style="padding:3px 10px">
		<div class="col-md-5 col-sm-12">
			<fieldset>
            <h5 style="font-weight:bold;text-align:center">Basic Required Documents:</h5>
            <ul style="list-style-type:decimal;">
            <li>Birth Certificate/Age Declaration</li>
            <li>Certificate of Identification/Origin</li>
            <li>Medical Fitness Certificate</li>
            <li>First School Leaving Certificate</li>
            <li>Passport Photograph</li>
            <li>SSCE (WAEC OR NECO)</li>
            <li>Educational/Professional Certificates</li>
            <li>Any Other Valid Document</li>
            </ul>
			  <hr/>
			  <form action="#uploaded_credentials" method="post" enctype="multipart/form-data">
      		<input type="hidden" name="form" value="attachment">
      		<div class="alert alert-success" style="display:none">
			      <ul style="padding-left:5px;line-height:25px">
			      	<li>Upload all required documents including your passport photograph, your First School Leaving Certificate, SSCE and any other document. </li>
			      	<li>Upload file must either be in jpeg, pdf or MS word(docx) format.</li>
			      	<li>Upload file must not exceed 2MB.</li>
			      </ul>
			  </div>
      		<div id="select" class="row mb-3">
				  	<div class="col-sm-12">
				  		<label style="font-weight: bold">Document type</label>
				  		<select onchange="toggleTitle(event);" required class="form-control">
				  			<option value=""></option>
				  			<?php for ($i=0; $i < count($attachments_list); $i++) { 
				  				echo "<option value='{$attachments_list[$i]['degree']}'>{$attachments_list[$i]['degree']}</option>";
				  			} ?>
				  			<option value="Others">Others</option>
				  		</select>
				  	</div>
				  </div>
				  <div id="other" class="row mb-3">
				  	<div class="col-sm-12">
				  		<label style="font-weight: bold">Document title</label>
				  		<input id="titleInput" type="text" name="title" required class="form-control">
				  	</div>
				  </div>
				  <div class="row mb-3">
				  	<div class="col-md-12">
				  		<label style="font-weight: bold">File</label>
				  		<input type="file" name="file" class="form-control" accept=".jpg,.png,.doc,.docx,.pdf">
                        <?php if (isset($err_msg)) { ?>
                    <div  class="alert alert-danger" style="text-align: center"><?php echo $err_msg; ?></div>
                    <?php }?>
				  	</div>
				  	
				  </div>
				  <div class="row mb-3">
				  	<div class="col-md-12 text-center">
				  		<button class="btn btn-md u-btn-primary rounded" type="submit">Upload Doc.</button>
				  	</div>
				  </div>

				
			  </form>
			</fieldset>
		</div>

		<div class="col-md-7 col-sm-12" id="uploaded_credentials">
			<h5 class="text-center" style="font-weight: bold">Uploaded Credentials</h5>
			
			<table class="table table-striped table-bordered">
			  <thead>
			    <tr>
			    	<th>#</th>
			    	<th>Type</th>
			      <th scope="col">Title</th>
			      <th scope="col">Remove</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php for ($i=0; $i < count($attachments); $i++) {  ?>
			    <tr style="padding:5px">
			    <td><?php echo $i+1;?></td>
			    <td><?php $ext=strtolower(end(explode('.',$attachments[$i]['path'])));?><img src="<?php echo URL.'public/images/'.$ext.'_icon.png';?>" style="width:25px";?></td>	
			      <td><?php echo $attachments[$i]['title'];?></td>
			      <td class="text-center" style="font-size: 1.5rem;cursor: pointer;">
			      <form action="" class="form-inline" method="post">
			      		<input type="hidden" name="form" value="delete_attachment">
			      		<input type="hidden" name="id" value="<?php echo $attachments[$i]['id']; ?>">
			      		<button type="submit" class="btn btn-link" style="padding:0;font-size: 1.5rem;cursor: pointer;">&times;</button>
			      	</form>			      	
			      </td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>			
		</div>
	</div>
	<hr>
	<div class="row mb-3">
		<div class="col-sm-6 text-center">
			<form action="" method="post">
				<input type="hidden" name="form" value="back">
				<button class="btn btn-md btn-success rounded" type="submit">Back</button>

				<a class="btn btn-md btn-danger" href="<?php echo URL;?>recruit/logout">Logout</a>
			</form>
		</div>
		<?php if ($files_attached) { ?>
		<div class="col-sm-6 text-center">
            <span style="text-align: center">Your details can no longer be edited after final submission.</span>
			<form action="" method="post">
                <input type="hidden" name="application_stage" value="<?php if($_SESSION['user_details']['application_stage']<6){echo '6';}else{echo $_SESSION['user_details']['application_stage'];}?>">
				<input type="hidden" name="form" value="next">
				<button class="btn btn-md btn-success rounded" type="button" ng-click="preview_details(<?php echo (int) Session::get('id');?>)">Preview</button>
				<button class="btn btn-md btn-primary rounded" type="submit">Finish</button>

				
			</form>
			
		</div>
		<?php } ?>
	</div>
  
</div>


<!-- MESSAGE MODAL WINDOW -->
<div class="modal fade" id="preview_Window_Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-lg" style="float:none;margin:auto;padding:0 3px;width:130%">
      
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h5 class="modal-title" id="" style="text-align:center;font-weight: bold">My Details </h5>
      </div>
      
       <div class="modal-body" style="padding:;" ng-init="get_applicants_other_details(user_details.recruit_id)">
                   <div class="loader">
                   <img src="{{completeUrlLocation}}public/images/loader.gif" style="width:50px">    
                   </div>
                            <div class="" style=""> 
                            <div style="text-align:center">   
                            <h4 style="margin:5px;text-align:center"><span style="color:#A2CD6A">Category:</span> 
                    <br/>{{user_details.title}} <br/><span style="color:#A2CD6A">Applied Position:</span>
                     <br/><span>{{user_details.sub_title}}</span>
                     <div style="color:#8A3925;font-size:13px;font-style: italic;padding:7px 0;">
                        <span style="color:#000">Hint:</span> {{user_details.hint}}</div>
                        
                        </h4>
                    </div>
                                
                                <div style="text-align:center">

                                <img ng-repeat="attachment in attachments | filter:{ title: 'Passport Photograph' }" ng-src="{{completeUrlLocation}}prison_cms_files/{{attachment.path}}" style="width:30%;margin:0 auto;float:none">
                            </div>
                            </div>

                            <div class="row" style="padding-top:10px">
                            <div class="col-lg-12" style="">
                                
                                 <div class="header">
                                <h4 class="title" style="text-align: center">{{user_details.fname}} {{user_details.sname}}</h4>
                            </div>
                            <table class="table table-striped no-border" style="border:none !important;font-size:14px;display:nne">
                            <tr>
                            <td style="font-weight:bold">First Name</td>
                            <td>{{user_details.fname}}</td>
                            <td style="font-weight:bold">Surname</td>
                            <td>{{user_details.sname}}</td>
                            </tr>
                            <tr>
                            <td style="font-weight:bold">Middle Name</td>
                            <td>{{user_details.mname}}</td>
                            <td style="font-weight:bold">D.O.B</td>
                            <td>{{user_details.dob}} <strong>({{user_details.age}} years)</strong></td>
                            </tr>
                            <tr>
                            <td style="font-weight:bold">Gender</td>
                            <td>{{user_details.gender}}</td>
                            <td style="font-weight:bold">Height</td>
                            <td>{{user_details.height}}</td>
                            </tr>
                            <tr>
                            <td style="font-weight:bold">Email</td>
                            <td>{{user_details.email}}</td>
                            <td style="font-weight:bold">Phone</td>
                            <td>{{user_details.phone}}</td>
                            </tr>
                            <tr>
                            <td style="font-weight:bold">Nationality</td>
                            <td>{{user_details.nationality}}</td>
                            <td style="font-weight:bold">Perm Address</td>
                            <td>{{user_details.permAddress}}</td>
                            </tr>

                            <tr>
                            <td style="font-weight:bold">State Of Origin</td>
                            <td>{{user_details.permState}}</td>
                            <td style="font-weight:bold">LGA Of Origin</td>
                            <td>{{user_details.permLga}}</td>
                            </tr>

                            <tr>
                            <td style="font-weight:bold">Current LGA</td>
                            <td>{{user_details.curLga}}</td>
                            <td style="font-weight:bold">Current Address</td>
                            <td>{{user_details.curAddress}}</td>
                            </tr>

                            <tr>
                            <td style="font-weight:bold">Current State</td>
                            <td>{{user_details.curState}}</td>
                            <td style="font-weight:bold">NIN</td>
                            <td>{{user_details.nin}}</td>
 
                            </table>   
                     
                            </tr>
                            </div> 

                            <hr>
                            <div class="col-lg-12" style="display:nne;padding:5px 20px">
                               
                              <div class="header">
                            <h4 class="title">Educational Qualification</h4>
                            </div>   
                            <table class="table table-responsive table-bordered" style="display:nne;width:100%;font-size:12px !important">
                            <tr style="font-weight:bold">
                            <td>#</td>
                            <td>Dates</td>
                            <td>Institution/School</td>
                            <td>Type</td>
                            <td>Course of Study</td>
                            <td>Grade</td>
                            <td>City/Country</td>
                            </tr>    
                            <tr ng-repeat="edu in applicants_educational_details" ng-controller="recruitRegistrationController as recruitCtrll">
                            <td>{{$index +1}}</td>    
                            <td>{{edu.startdate}} - {{edu.enddate}}</td>
                            <td>{{edu.institution}}</td>  
                            <td>{{edu.type}}</td>  
                            <td>{{edu.course_of_study}}</td>  
                            <td>{{edu.classification}}</td>  
                            <td>{{edu.city}}/{{edu.country}}</td>    
                            </tr>    
                            <table>
                            <hr>    
                            <div class="header">
                            <h4 class="title" style="">Professional Certifications</h4>
                            </div>   
                            <table class="table table-responsive table-bordered" style="display:nne;width:100%;font-size:12px !important">
                            <tr style="font-weight:bold">
                            <td>#</td>
                            <td>Dates</td>
                            <td>Institution/School</td>                         
                            <td>Certificate</td>                        
                            <td>City/Country</td>
                            </tr>    
                            <tr ng-repeat="pro in applicants_professional_details">
                            <td>{{$index +1}}</td>    
                            <td>{{pro.startdate}} - {{pro.enddate}}</td>
                            <td>{{pro.institution}}</td>                              
                            <td>{{pro.certificate_title}}</td>     
                            <td>{{pro.city}}/{{pro.country}}</td>    
                            </tr>    
                            <table>    

                            <hr>    
                            <div class="header">
                            <h4 class="title" style="">Work Experience</h4>
                            </div>   
                            <table class="table table-responsive table-bordered" style="display:nne;width:100%;font-size:12px !important">
                            <tr style="font-weight:bold">
                            <td>#</td>
                            <td>Start Date</td>
                            <td>End Date</td>                         
                            <td>Organization</td>                        
                            <td>Role</td>
                            </tr>    
                            <tr ng-repeat="work in work_experience">
                            <td>{{$index +1}}</td>    
                            <td>{{work.startdate}}</td>
                            <td>{{work.enddate}}</td>                              
                            <td>{{work.organization}}</td>     
                            <td>{{work.role}}</td>    
                            </tr>    
                            <table>


                            <div class="hidden-lg">
                            <div class="header">
                            <h4 class="title">Credentials</h4>
                            </div> 
                            <table class="table table-responsive table-bordered hidden-lg" style="display:nne;font-size:12px !important">
                                <tr style="font-weight:bold">
                            <td>#</td>
                            <td>Type</td>
                            <td>Doc. Title</td>
                            </tr>  
                            <tr ng-repeat="attach in attachments" ng-init="{{ext=attach.path.split('.').pop()}}">
                            <td>{{$index +1}}</td>
                            <td><img ng-src="{{completeUrlLocation}}public/images/{{ext}}_icon.png" style="width:20px;"></td>
                            <td><a href="{{completeUrlLocation}}prison_cms_files/{{attach.path}}" style="text-decoration: underline;color:#000">{{attach.title}}</a></td>
                            </tr>  
                            </table>
                            </div>        
                            
                            </div>

                            </div>
                             
                            
                             </div>
                         </div>
                     </div>
                 </div>

</section>
<script>
	const titleBlock = document.getElementById('other')
		titleInput = document.getElementById('titleInput');

	titleBlock.style.display = 'none';

	function toggleTitle(ev) {
		if (ev.target.value === 'Others') {
			titleBlock.style.display = 'block';
			titleInput.value = '';
		} else {
			titleInput.value =  ev.target.value;
			titleBlock.style.display = 'none';
		}
	}
</script>


