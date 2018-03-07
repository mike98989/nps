<div class="container mb-3">
  <header class="text-center g-width-60x--md mx-auto g-mb-30">
    <div class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
      <h2 class="h3 u-heading-v2__title g-color-gray-dark-v2 text-uppercase g-font-weight-600" style="">Work Experience</h2>
    </div>
  </header>
  <div class="col-md-12" style="margin:0 auto;float:none">
	</div>
	<div class="row mb-3">
		<div class="col-md-6 col-sm-12">
			<fieldset>
			  <legend>Add Work Experience:</legend>
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
				  		<button class="btn btn-md btn-block u-btn-primary rounded text-uppercase g-py-13" type="submit">Add</button>
				  	</div>
				  </div>
			  </form>
			</fieldset>
		</div>

		<div class="col-md-6 col-sm-12">
			<h3>Work experience</h3>
			<table class="table">
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
			      		<button type="submit" class="btn btn-link" style="font-size: 1.5rem;cursor: pointer;">&times;</button>
			      	</form>			      	
			      </td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>			
		</div>
	</div>
	<div class="row mb-3">
		<div class="col-sm-6 text-center">
			<form action="" method="post">
				<input type="hidden" name="form" value="back">
				<button class="btn btn-md btn-block u-btn-primary rounded text-uppercase g-py-13" type="submit">Back</button>
			</form>
		</div>
		<div class="col-sm-6 text-center">
			<form action="" method="post">
				<input type="hidden" name="form" value="next">
				<button class="btn btn-md btn-block u-btn-primary rounded text-uppercase g-py-13" type="submit">Save and proceed</button>
			</form>
		</div>
	</div>
  
</div>