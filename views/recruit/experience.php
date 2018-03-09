<section class="u-bg-overlay g-bg-pos-top-center g-bg-img-hero g-bg-black-opacity-0_3--after g-py-100" style="background:#ccc;padding-top:10px !important; padding-bottom:10px !important" ng-controller="recruitRegistrationController">
<div class="container u-bg-overlay__inner" style="background:#fff;padding:30px 0;border-top:4px solid #90b205">
  <header class="text-center g-width-60x--md mx-auto g-mb-30">
    <div class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
      <h2 class="h3 u-heading-v2__title g-color-gray-dark-v2 g-font-weight-600" style="">Work Experience</h2>
    </div>
  </header>

	<div class="row" style="padding:2px 10px">
		<div class="col-lg-5 col-sm-12">
			<fieldset>
			  <h5 style="font-weight:bold;text-align:center">Add Work Experience:</h5>
			  <form action="" method="post">
      		<input type="hidden" name="form" value="experience">
				  <div class="row mb-3">
				  	<div class="col-md-6 col-sm-12">
				  		<label>Start date</label>
				  		<input type="date" name="startdate"  class="form-control">
				  	</div>
				  	<div class="col-md-6 col-sm-12">
				  		<label>End date</label>
				  		<input type="date" name="enddate"  class="form-control">
				  	</div>
				  </div>
				  <div class="row mb-3">
				  	<div class="col-md-12">
				  		<label>Organization</label>
				  		<input type="text" name="organization" class="form-control">
				  	</div>
				  </div>
				  <div class="row mb-3">
				  	<div class="col-md-12">
				  		<label>Role</label>
				  		<input type="text" name="role" class="form-control">
				  	</div>
				  </div>
				  <div class="row mb-3">
				  	<div class="col-md-12 text-center">
				  		<button class="btn btn-sm u-btn-primary rounded" type="submit">Save</button>
				  	</div>
				  </div>
			  </form>
			</fieldset>
		</div>

		<div class="col-md-7 col-sm-12">
			<h5 class="text-center" style="font-weight: bold">Work experience</h5>
			<table class="table table-striped table-bordered">
			  <thead>
			    <tr>
			      <th scope="col">Start date</th>
			      <th scope="col">End date</th>
			      <th scope="col">Organization</th>
			      <th scope="col">Role</th>
			      <th scope="col">Remove</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php for ($i=0; $i < count($experience); $i++) {  ?>
			    <tr>
			      <td><?php echo $experience[$i]['startdate']; ?></td>
			      <td><?php echo $experience[$i]['startdate']; ?></td>
			      <td><?php echo $experience[$i]['organization']; ?></td>
			      <td><?php echo $experience[$i]['role']; ?></td>
			      <td class="text-center" style="font-size: 1.5rem;cursor: pointer;">
			      <form action="" class="form-inline" method="post">
			      		<input type="hidden" name="form" value="delete_experience">
			      		<input type="hidden" name="id" value="<?php echo $experience[$i]['id']; ?>">
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
			</form>
		</div>
		<div class="col-sm-6 text-center">
			<form action="" method="post">
				<input type="hidden" name="form" value="next">
				<button class="btn btn-md u-btn-primary rounded " type="submit">Save and Proceed</button>
			</form>
		</div>
	</div>
  
</div>
</section>