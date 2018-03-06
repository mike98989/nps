<div class="container mb-3">
  <header class="text-center g-width-60x--md mx-auto g-mb-30">
    <div class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
      <h2 class="h3 u-heading-v2__title g-color-gray-dark-v2 text-uppercase g-font-weight-600" style="">Personal Information</h2>
    </div>
  </header>
  <div class="col-md-12" style="margin:0 auto;float:none">
	</div>
	<form action="" method="post">
		<div class="row mb-3">
			<div class="col-md-6 col-sm-12">
				<div class="row mb-3">
			  	<div class="col-md-12">
			  		<label>Title <span class="text-danger">*</span></label>
			  		<select value="<?php echo $title; ?>" required class="form-control" name="title">
			  			<option value="mr">Mr</option>
			  			<option value="mrs">Mrs</option>
			  		</select>
			  	</div>
			  </div>
			  <div class="row mb-3">
			  	<div class="col-md-12">
			  		<label>Surname <span class="text-danger">*</span></label>
			  		<input required type="text" readonly class="form-control" name="sname" value="<?php echo $sname; ?>">
			  	</div>
			  </div>
			  <div class="row mb-3">
			  	<div class="col-md-12">
			  		<label>First name <span class="text-danger">*</span></label>
			  		<input required type="text" readonly class="form-control" name="fname" value="<?php echo $fname; ?>">
			  	</div>
			  </div>
			  <div class="row mb-3">
			  	<div class="col-md-12">
			  		<label>Middle name</label>
			  		<input value="<?php echo $mnane; ?>" type="text" class="form-control" name="mname">
			  	</div>
			  </div>
			  <div class="row mb-3">
			  	<div class="col-md-12">
			  		<label>Gender <span class="text-danger">*</span></label>
			  		<select value="<?php echo $gender; ?>" required name="gender" class="form-control">
			  			<option value="female">Female</option>
			  			<option value="male">Male</option>
			  		</select>
			  	</div>
			  </div>
			  <div class="row mb-3">
			  	<div class="col-md-12">
			  		<label>Nationality <span class="text-danger">*</span></label>
			  		<select value="<?php echo $nationality; ?>" required name="nationality" class="form-control">
			  			<option value="Nigeria">Nigeria</option>
			  		</select>
			  	</div>
			  </div>
			  <div class="row mb-3">
			  	<div class="col-md-12">
			  		<label>Date of Birth <span class="text-danger">*</span></label>
			  		<input value="<?php echo $dob; ?>" required type="date" name="dob" class="form-control">
			  	</div>
			  </div>
			  <div class="row mb-3">
			  	<div class="col-md-12">
			  		<label>Height</label>
			  		<input value="<?php echo $height; ?>" type="text" name="height" class="form-control">
			  	</div>
			  </div>
			  <div class="row mb-3">
			  	<div class="col-md-12">
			  		<label>National Identification Number <span class="text-danger">*</span></label>
			  		<input value="<?php echo $nin; ?>" required type="text" name="nin"  class="form-control">
			  	</div>
			  </div>
			  <div class="row mb-3">
			  	<div class="col-md-12">
			  		<label>E-mail <span class="text-danger">*</span></label>
			  		<input required type="email" readonly name="email"  class="form-control" value="<?php echo $email; ?>">
			  	</div>
			  </div>
			  <div class="row mb-3">
			  	<div class="col-md-12">
			  		<label>Telephone number <span class="text-danger">*</span></label>
			  		<input value="<?php echo $phone; ?>" required type="phone" name="phone" class="form-control">
			  	</div>
			  </div>
			</div>
			<div class="col-md-6 col-sm-12">
			  <fieldset>
				  <legend>Permanent Address: <span class="text-danger">*</span></legend>
				  <div class="row mb-3">
				  	<div class="col-md-12">
				  		<label>Address</label>
				  		<input value="<?php echo $permAddress; ?>" required type="text" name="permAddress"  class="form-control">
				  	</div>
				  </div>
				  <div class="row mb-3">
				  	<div class="col-md-12">
				  		<label>Street/House number</label>
				  		<input value="<?php echo $permStreet; ?>" required type="text" name="permStreet"  class="form-control">
				  	</div>
				  </div>
				  <div class="row mb-3">
				  	<div class="col-md-12">
				  		<label>LGA</label>
				  		<select value="<?php echo $permLga; ?>" required name="permLga" class="form-control">
				  			<option value="temp">Temp</option>
				  		</select>
				  	</div>
				  </div>
				  <div class="row mb-3">
				  	<div class="col-md-12">
				  		<label>State</label>
				  		<select value="<?php echo $permState; ?>" required name="permState" class="form-control">
				  			<option value="state">State</option>
				  		</select>
				  	</div>
				  </div>
				</fieldset>
			  <fieldset>
				  <legend>Current Address: <span class="text-danger">*</span></legend>
				  <div class="row mb-3">
				  	<div class="col-md-12">
				  		<label>Address</label>
				  		<input value="<?php echo $curAddress; ?>" required type="text" name="curAddress"  class="form-control">
				  	</div>
				  </div>
				  <div class="row mb-3">
				  	<div class="col-md-12">
				  		<label>Street/House number</label>
				  		<input value="<?php echo $curStreet; ?>" required type="text" name="curStreet"  class="form-control">
				  	</div>
				  </div>
				  <div class="row mb-3">
				  	<div class="col-md-12">
				  		<label>LGA</label>
				  		<select value="<?php echo $curLga; ?>" required name="curLga" class="form-control">
				  			<option value="temp">Temp</option>
				  		</select>
				  	</div>
				  </div>
				  <div class="row mb-3">
				  	<div class="col-md-12">
				  		<label>State</label>
				  		<select value="<?php echo $curState; ?>" required name="curState" class="form-control">
				  			<option value="temp">Temp</option>
				  		</select>
				  	</div>
				  </div>
				</fieldset>
				<div class="row mb-3">
			  	<div class="col-md-12">
			  		<label>Preferred address or Contact</label>
			  		<textarea name="prefAddress" class="form-control"><?php echo $prefAddress; ?></textarea>
			  	</div>
			  </div>			
			</div>
		</div>
		<div class="row mb-3">
			<div class="col-sm-12" style="text-align: center;">
				<button class="btn btn-md btn-block u-btn-primary rounded text-uppercase g-py-13" type="submit">Save and proceed</button>
			</div>
		</div>
  </form>
</div>