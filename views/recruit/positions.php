<section class="u-bg-overlay g-bg-pos-top-center g-bg-img-hero g-bg-black-opacity-0_3--after g-py-100" style="background:#ccc;padding-top:10px !important; padding-bottom:10px !important" ng-controller="recruitRegistrationController">
<div class="container u-bg-overlay__inner" style="background:#fff;padding:30px 0;border-top:4px solid #90b205" ng-init="get_positions(<?php echo (int) Session::get('id');?>)">

		<div class="stepwizard" style="margin-bottom:20px">
    <div class="stepwizard-row">
    	
    	<div class="stepwizard-step">
        	<a href="<?php if($_SESSION['user_details']['application_stage']>0){echo URL.'recruit/positions';}?>" style="color:inherit;">
            <button type="button" class="btn btn-primary btn-circle">1</button>
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
        <h2></h2>
      <h2 class="h3 u-heading-v2__title g-color-gray-dark-v2 g-font-weight-600" style="margin-top:20px">Welcome <?php echo $_SESSION['user_details']['fname'].' '.$_SESSION['user_details']['sname'];?></h2>
    </div>
    
      <h4>Please select your preferred position</h4>
      <h5>Click <a href="<?php echo URL.'recruit/info';?>">Read more</a> to know more about the available category/positions.</h5>
  
  </header>
  <hr>
  <div class="col-md-8" style="margin:0 auto;float:none" ng-cloak>
  	<form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
        <?php if (isset($msg)){?>
        <div class="alert alert-warning"><?php echo $msg;?></div>
        <?php }?>
  	<label style="font-weight:bold">Select Category</label>
	<select value="" required class="form-control" name="position_category" ng-model="user_details.position_category">
	<option value="0">--SELECT CATEGORY--</option>	
	<option value="{{position.id}}" ng-repeat="position in positions">{{position.title}}</option>
	</select>

	<label ng-show="user_details.position_category !='0'" style="font-weight:bold">Select Position</label>
	<select ng-show="user_details.position_category !='0'" required class="form-control" name="position_applied_for" ng-model="user_details.position_applied_for" required id="position_applied_for">
	<option value="0">--SELECT POSITION--</option>		
	<option value="{{sub_position.sub_position_id}}" ng-repeat="sub_position in sub_positions | filter:{ position_id: user_details.position_category}">{{sub_position.sub_title}}</option>
	</select>
	<div class="alert alert-success" ng-show="user_details.position_applied_for !='0'" style="margin-top:10px;text-align:center">
	{{sub_positions[user_details.position_applied_for -1].hint}}	
	</div>
	<hr>
	<input type="hidden" name="recruit_id" value="<?php echo (int) Session::get('id');?>">
    <input type="hidden" name="application_stage" value="<?php if($_SESSION['user_details']['application_stage']<2){echo '2';}else{echo $_SESSION['user_details']['application_stage'];}?>">
	<a class="btn btn-md btn-danger" style="margin-top:10px;" href="<?php echo URL;?>recruit/logout">Logout</a>
	<button ng-show="user_details.position_applied_for!=0" type="submit" class="btn btn-success btn-md pull-right" style="margin-top:10px;float:right">Save & Proceed</button>
	</div>
	<div style="clear:both"></div>

	<hr>

  
</div>
</section>
