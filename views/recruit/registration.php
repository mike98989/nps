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
			  		<label>Title</label>
			  		<select class="form-control" name="title">
			  			<option value="mr">Mr</option>
			  			<option value="mrs">Mrs</option>
			  		</select>
			  	</div>
			  </div>
			  <div class="row mb-3">
			  	<div class="col-md-12">
			  		<label>Surname</label>
			  		<input type="text" readonly class="form-control" name="sname" value="<?php echo $sname; ?>">
			  	</div>
			  </div>
			  <div class="row mb-3">
			  	<div class="col-md-12">
			  		<label>First name</label>
			  		<input type="text" readonly class="form-control" name="fname" value="<?php echo $fname; ?>">
			  	</div>
			  </div>
			  <div class="row mb-3">
			  	<div class="col-md-12">
			  		<label>Middle name</label>
			  		<input type="text" class="form-control" name="mname">
			  	</div>
			  </div>
			  <div class="row mb-3">
			  	<div class="col-md-12">
			  		<label>Gender</label>
			  		<select name="gender" class="form-control">
			  			<option value="female">Female</option>
			  			<option value="male">Male</option>
			  		</select>
			  	</div>
			  </div>
			  <div class="row mb-3">
			  	<div class="col-md-12">
			  		<label>Nationality</label>
			  		<select name="nationality" class="form-control">
			  			<option value="Nigeria">Nigeria</option>
			  		</select>
			  	</div>
			  </div>
			  <div class="row mb-3">
			  	<div class="col-md-12">
			  		<label>Date of Birth</label>
			  		<input type="date" name="dob" class="form-control">
			  	</div>
			  </div>
			  <div class="row mb-3">
			  	<div class="col-md-12">
			  		<label>Height</label>
			  		<input type="text" name="height" class="form-control">
			  	</div>
			  </div>
			  <div class="row mb-3">
			  	<div class="col-md-12">
			  		<label>National Identification Number</label>
			  		<input type="text" name="nin"  class="form-control">
			  	</div>
			  </div>
			  <div class="row mb-3">
			  	<div class="col-md-12">
			  		<label>E-mail</label>
			  		<input type="email" readonly name="email"  class="form-control" value="<?php echo $email; ?>">
			  	</div>
			  </div>
			  <div class="row mb-3">
			  	<div class="col-md-12">
			  		<label>Telephone number</label>
			  		<input type="phone" name="phone" class="form-control">
			  	</div>
			  </div>
			</div>
			<div class="col-md-6 col-sm-12">
			  <fieldset>
				  <legend>Permanent Address:</legend>
				  <div class="row mb-3">
				  	<div class="col-md-12">
				  		<label>Address</label>
				  		<input type="text" name="permAddress"  class="form-control">
				  	</div>
				  </div>
				  <div class="row mb-3">
				  	<div class="col-md-12">
				  		<label>Street/House number</label>
				  		<input type="text" name="permStreet"  class="form-control">
				  	</div>
				  </div>
				  <div class="row mb-3">
				  	<div class="col-md-12">
				  		<label>LGA</label>
				  		<select name="permLga" class="form-control">
				  			<option value="temp">Temp</option>
				  		</select>
				  	</div>
				  </div>
				  <div class="row mb-3">
				  	<div class="col-md-12">
				  		<label>State</label>
				  		<select name="permState" class="form-control">
				  			<option value="state">State</option>
				  		</select>
				  	</div>
				  </div>
				</fieldset>
			  <fieldset>
				  <legend>Current Address:</legend>
				  <div class="row mb-3">
				  	<div class="col-md-12">
				  		<label>Address</label>
				  		<input type="text" name="curAddress"  class="form-control">
				  	</div>
				  </div>
				  <div class="row mb-3">
				  	<div class="col-md-12">
				  		<label>LGA</label>
				  		<select name="curLga" class="form-control">
				  			<option value="temp">Temp</option>
				  		</select>
				  	</div>
				  </div>
				  <div class="row mb-3">
				  	<div class="col-md-12">
				  		<label>State</label>
				  		<select name="curState" class="form-control">
				  			<option value="temp">Temp</option>
				  		</select>
				  	</div>
				  </div>
				</fieldset>
				<div class="row mb-3">
			  	<div class="col-md-12">
			  		<label>Preferred address or Contact</label>
			  		<textarea name="prefAddress" class="form-control"></textarea>
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