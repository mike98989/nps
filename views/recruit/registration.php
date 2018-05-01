<section class="u-bg-overlay g-bg-pos-top-center g-bg-img-hero g-bg-black-opacity-0_3--after g-py-100" style="background-image: url(<?php echo URL;?>public/images/blur-wallpaper2.jpg);padding-top:10px !important; padding-bottom:10px !important" ng-controller="recruitRegistrationController">
<div class="container u-bg-overlay__inner">    
<div class="container" style="background:#fff;padding:30px 0;border-top:4px solid #90b205">
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
            <button type="button" class="btn btn-primary btn-circle">2</button>
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

    	
    <h2 class="h3 u-heading-v2__title g-color-gray-dark-v2 g-font-weight-600" style="margin-top:20px">Welldone <?php echo $_SESSION['user_details']['fname'].' '.$_SESSION['user_details']['sname'];?></h2>
    
     <h4>We will be needing your <strong>Personal Information</strong></h4>
       
    </div>
  </header>
  <hr>
  <div class="col-lg-10" style="margin:0 auto;float:none;">

	<form action="" method="post">
		<div class="row mb-3">
			<div class="col-md-6 col-sm-12">
				<div class="row mb-3">
			  	<div class="col-md-12">
			  		<label  style="font-weight:bold">Title <span class="text-danger">*</span></label>
			  		<select value="<?php echo $title; ?>" required class="form-control" name="title">
			  			<option value="mr">Mr</option>
			  			<option value="miss">Miss</option>
			  			<option value="mrs">Mrs</option>
			  		</select>
			  	</div>
			  </div>
			  <div class="row mb-3">
			  	<div class="col-md-12">
			  		<label style="font-weight:bold">Surname <span class="text-danger">*</span></label>
			  		<input required type="text" class="form-control" name="sname" value="<?php echo $sname; ?>">
			  	</div>
			  </div>
			  <div class="row mb-3">
			  	<div class="col-md-12">
			  		<label  style="font-weight:bold">First name <span class="text-danger">*</span></label>
			  		<input required type="text" class="form-control" name="fname" value="<?php echo $fname; ?>">
			  	</div>
			  </div>
			  <div class="row mb-3">
			  	<div class="col-md-12">
			  		<label  style="font-weight:bold">Middle name</label>
			  		<input value="<?php if(isset($_POST['mname'])){echo $mname;} ?>" type="text" class="form-control" name="mname">
			  	</div>
			  </div>
			  <div class="row mb-3">
			  	<div class="col-md-12">
			  		<label  style="font-weight:bold">Gender <span class="text-danger">*</span></label>
			  		<select value="<?php echo $gender; ?>" ng-model="gender" ng-init="gender='<?php echo $gender;?>'" required name="gender" class="form-control">
			  			<option value="female">Female</option>
			  			<option value="male">Male</option>
			  		</select>
			  	</div>
			  </div>
                
                 <div class="row mb-3">
			  	<div class="col-md-12">
			  		<label  style="font-weight:bold">Nationality <span class="text-danger">*</span></label>
			  		<select value="<?php echo $nationality; ?>" required name="nationality" class="form-control">
			  			<?php for ($i=0; $i < count($countries); $i++) { 
			  				if ($countries[$i]['name'] == "Nigeria") {
			  				echo "<option selected value='{$countries[$i]['name']}'>{$countries[$i]['name']}</option>";
			  					
			  				} else {
			  					echo "<option value='{$countries[$i]['name']}'>{$countries[$i]['name']}</option>";
			  					
			  				}
			  			}
			  			?>
			  		</select>
			  	</div>
			  </div>
                <hr/>
			  
                <fieldset>
				  <legend>Permanent Address: <span class="text-danger">*</span></legend>
				  <div class="row mb-3">
				  	<div class="col-md-12">
				  		<label style="font-weight:bold">Address</label>
				  		<input value="<?php echo $permAddress; ?>" required type="text" name="permAddress"  class="form-control">
				  	</div>
				  </div>
				  
				  <div class="row mb-3">
				  	<div class="col-md-12">
				  		<label style="font-weight:bold">State Of Origin</label>
				  		<select onchange="stateChanged('perm', event);" value="<?php echo $permState; ?>" required name="permState" class="form-control">
				  			<option value=""></option>
				  			<?php for($i = 0; $i < count($states); $i++) {
				  				$state = $states[$i];
				  				if ($state == $permState) {
				  					echo "<option value='{$state}' selected>{$state}</option>";
				  				} else {
				  					echo "<option value='{$state}'>{$state}</option>";
				  				}
				  			} ?>			  			
				  		</select>
				  	</div>
				  </div>
				  <div class="row mb-3">
				  	<div class="col-md-12">
				  		<label style="font-weight:bold">LGA Of Origin</label>
				  		<select id="permLga" value="<?php echo $permLga; ?>" required name="permLga" class="form-control">

				  			<?php for($i = 0; $i < count($permLgas); $i++) {
				  				$name = $permLgas[$i];
		  						if ($name == $permLga) {
			  						echo "<option selected value='{$name}'>{$name}</option>";
		  						} else {
			  						echo "<option value='{$name}'>{$name}</option>";
		  						}
				  			} ?>	
				  		</select>
				  	</div>
				  </div>
				</fieldset>
			</div>
			<div class="col-md-6 col-sm-12">
                
			  <div class="row mb-3">
			  	<div class="col-md-12">
			  		<label  style="font-weight:bold">Date of Birth <span class="text-danger">*</span></label>
			  		<input data-date-format="dd/mm/yyyy" value="<?php echo $dob; ?>" required type="text" name="dob" class="form-control datepicker" ng-model="dob" ng-init="dob='<?php echo $dob;?>'" ng-change="calculate_age(dob)">
			  	</div>
			  	<input type="hidden" name="age" id="age">
			  </div>
			  <div class="row mb-3">
			  	<div class="col-md-12">
			  		<label style="font-weight:bold">Height (M)</label>
			  		<input value="<?php echo $height; ?>" type="text" name="height" class="form-control">
			  	</div>
			  </div>
			  <div class="row mb-3">
			  	<div class="col-md-12">
			  		<label style="font-weight:bold">National Identification Number <span class="text-danger">*</span></label>
			  		<input value="<?php echo $nin; ?>" required type="text" name="nin"  class="form-control">
			  	</div>
			  </div>
			  <div class="row mb-3">
			  	<div class="col-md-12">
			  		<label style="font-weight:bold">E-mail <span class="text-danger">*</span></label>
			  		<input required type="email" readonly name="email"  class="form-control" value="<?php echo $email; ?>">
			  	</div>
			  </div>
			  <div class="row mb-3">
			  	<div class="col-md-12">
			  		<label style="font-weight:bold">Telephone number <span class="text-danger">*</span></label>
			  		<input value="<?php echo $phone; ?>" required type="phone" name="phone" class="form-control">
			  	</div>
			  </div>
			  <div class="row mb-3">
			  	<div class="col-md-12">
			  		<label style="font-weight:bold">Preferred address of Contact</label>
			  		<textarea name="prefAddress" rows="5" class="form-control"><?php echo $prefAddress;?></textarea>
			  	</div>
			  </div>			
			  <hr>
			  <fieldset>
				  <legend>Current Address: <span class="text-danger">*</span></legend>
				  <div class="row mb-3">
				  	<div class="col-md-12">
				  		<label style="font-weight:bold">Address</label>
				  		<input value="<?php echo $curAddress; ?>" required type="text" name="curAddress"  class="form-control">
				  	</div>
				  </div>
				  
				  <div class="row mb-3">
				  	<div class="col-md-12">
				  		<label style="font-weight:bold">State</label>
				  		<select onchange="stateChanged('cur', event);" id="curState" value="<?php echo $curState; ?>" required name="curState" class="form-control">
				  			<option value=""></option>
				  			<?php for($i = 0; $i < count($states); $i++) {
				  				$state = $states[$i];
				  				if ($state == $curState) {
				  					echo "<option value='{$state}' selected>{$state}</option>";
				  				} else {
				  					echo "<option value='{$state}'>{$state}</option>";
				  				}
				  			} ?>	
				  		</select>
				  	</div>
				  </div>
				  <div class="row mb-3">
				  	<div class="col-md-12">
				  		<label style="font-weight:bold">LGA</label>
				  		<select id="curLga" value="<?php echo $curLga; ?>" required name="curLga" class="form-control">

				  			<?php for($i = 0; $i < count($curLgas); $i++) {
				  				$name = $curLgas[$i];
		  						if ($name == $curLga) {
			  						echo "<option selected value='{$name}'>{$name}</option>";
		  						} else {
			  						echo "<option value='{$name}'>{$name}</option>";
		  						}
				  			} ?>	
				  		</select>
				  	</div>
				  </div>
				</fieldset>
				
			</div>
		</div>

		<div class="row mb-6">
			<input type="hidden" name="application_stage" value="<?php if($_SESSION['user_details']['application_stage']<3){echo '3';}else{echo $_SESSION['user_details']['application_stage'];}?>">
			<div class="col-sm-12" style="text-align: center;">
				<a class="btn btn-md btn-danger" href="<?php echo URL;?>recruit/logout">Logout</a>
				<button class="btn btn-md u-btn-primary rounded" type="submit">Save and Proceed</button>
			</div>
		</div>
  </form>
</div>
</div>
    </div>
</section>
<script>
	const lgas = <?php echo json_encode($lgas); ?>;
	
	function stateChanged(which, ev) {
		const options = lgas
			.filter(function(lga) {
				return lga.state === ev.target.value;
			})
			.map(function (lga) {
				return "<option value='"+ lga.name +"'>"+ lga.name +"</option>";		
			});
		
		document.getElementById(which + 'Lga').innerHTML = options;
	}

</script>