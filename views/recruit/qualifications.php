<div class="container mb-3">
  <header class="text-center g-width-60x--md mx-auto g-mb-30">
    <div class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
      <h2 class="h3 u-heading-v2__title g-color-gray-dark-v2 text-uppercase g-font-weight-600" style="">Qualifications (From Highest to Lowest)</h2>
    </div>
  </header>
  <div class="col-md-12" style="margin:0 auto;float:none">
	</div>
	<div class="row mb-3">
		<div class="col-md-6 col-sm-12">
			<fieldset>
			  <legend>Add Educational Qualification:</legend>
			  <form action="" method="post">
			  	<input type="hidden" name="form" value="educational">
				  <div class="row mb-3">
				  	<div class="col-md-6 col-sm-12">
				  		<label>Start date</label>
				  		<input type="date" name="startdate" required class="form-control">
				  	</div>
				  	<div class="col-md-6 col-sm-12">
				  		<label>End date</label>
				  		<input type="date" name="enddate" required class="form-control">
				  	</div>
				  </div>
				  <div class="row mb-3">
				  	<div class="col-md-12">
				  		<label>Educational Qualification</label>
				  		<input type="text" name="qualification" required class="form-control">
				  	</div>
				  </div>
				  <div class="row mb-3">
				  	<div class="col-md-12">
				  		<label>Educational Institution</label>
				  		<input type="text" name="institution" required class="form-control">
				  	</div>
				  </div>
				  <div class="row mb-3">
				  	<div class="col-sm-12 col-md-6">
				  		<label>City</label>
				  		<input type="text" name="city" required class="form-control">
				  	</div>
				  	<div class="col-sm-12 col-md-6">
				  		<label>Country</label>
				  		<select required name="country" class="form-control">
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
				  <div class="row mb-3">
				  	<div class="col-md-12 text-center">
				  		<button class="btn btn-md btn-block u-btn-primary rounded text-uppercase g-py-13" type="submit">Add</button>
				  	</div>
				  </div>
			  </form>
			</fieldset>
		</div>

		<div class="col-md-6 col-sm-12">
		  <fieldset>
			  <legend>Add Additional Qualification/Professional Certificate:</legend>
			  <form action="" method="post">
			  	<input type="hidden" name="form" value="professional">
				  <div class="row mb-3">
				  	<div class="col-sm-12 col-md-6">
				  		<label>Start date</label>
				  		<input type="date" name="startdate" required class="form-control">
				  	</div>
				  	<div class="col-sm-12 col-md-6">
				  		<label>End date</label>
				  		<input type="date" name="enddate" required class="form-control">
				  	</div>
				  </div>
				  <div class="row mb-3">
				  	<div class="col-md-12">
				  		<label>Institution</label>
				  		<input type="text" name="institution" required class="form-control">
				  	</div>
				  </div>
				  <div class="row mb-3">
				  	<div class="col-md-6 col-sm-12">
				  		<label>City</label>
				  		<input type="text" name="city" required class="form-control">
				  	</div>
				  	<div class="col-md-6 col-sm-12">
				  		<label>Country</label>
				  		<select required name="country" class="form-control">
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
				  <div class="row mb-3">
				  	<div class="col-md-12">
				  		<label>Professional/Reg No.</label>
				  		<input type="text" name="reg_no" required class="form-control">
				  	</div>
				  </div>
				  <div class="row mb-3">
				  	<div class="col-md-12">
				  		<label>Educational Level</label>
				  		<input type="text" name="level" class="form-control">
				  	</div>
				  </div>
				  <div class="row mb-3">
				  	<div class="col-md-12">
				  		<label>Grade</label>
				  		<input type="text" name="grade" class="form-control">
				  	</div>
				  </div>
				  <div class="row mb-3">
				  	<div class="col-md-12">
				  		<label>Field of Study</label>
				  		<input type="text" name="fos" required class="form-control">
				  	</div>
				  </div>
				  <div class="row mb-3">
				  	<div class="col-md-12">
				  		<label>Highest qualification</label>
				  		<input type="text" name="highest_qual" required class="form-control">
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
	</div>
	<hr>
	<div class="row mb-3">
		<div class="col-md-12">
			<h3>Educational qualifications</h3>
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">Start date</th>
			      <th scope="col">End date</th>
			      <th scope="col">Qualification</th>
			      <th scope="col">Institution</th>
			      <th scope="col">City</th>
			      <th scope="col">Country</th>
			      <th scope="col">Remove</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php for ($i=0; $i < count($educationals); $i++) {  ?>
			    <tr>
			      <td><?php echo $educationals[$i]['startdate']; ?></td>
			      <td><?php echo $educationals[$i]['enddate']; ?></td>
			      <td><?php echo $educationals[$i]['qualification']; ?></td>
			      <td><?php echo $educationals[$i]['institution']; ?></td>
			      <td><?php echo $educationals[$i]['city']; ?></td>
			      <td><?php echo $educationals[$i]['country']; ?></td>
			      <td class="text-center" style="font-size: 1.5rem;cursor: pointer;">
			      	<form action="" class="form-inline" method="post">
			      		<input type="hidden" name="form" value="delete_educational">
			      		<input type="hidden" name="id" value="<?php echo $educationals[$i]['id']; ?>">
			      		<button type="submit" class="btn btn-link" style="font-size: 1.5rem;cursor: pointer;">&times;</button>
			      	</form>
			      	
			      </td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>			
		</div>
	</div>
	<div class="row mb-3 mt-3">
		<div class="col-md-12">
			<h3>Additional qualifications</h3>
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">Start date</th>
			      <th scope="col">End date</th>
			      <th scope="col">Institution</th>
			      <th scope="col">City</th>
			      <th scope="col">Country</th>
			      <th scope="col">Reg No.</th>
			      <th scope="col">Edu. Level</th>
			      <th scope="col">Grade</th>
			      <th scope="col">Field</th>
			      <th scope="col">Highest Qualification</th>
			      <th scope="col">Remove</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php  for ($i=0; $i < count($professionals); $i++) {  ?>
			    <tr>
			      <td><?php echo $professionals[$i]['startdate']; ?></td>
			      <td><?php echo $professionals[$i]['enddate']; ?></td>
			      <td><?php echo $professionals[$i]['institution']; ?></td>
			      <td><?php echo $professionals[$i]['city']; ?></td>
			      <td><?php echo $professionals[$i]['country']; ?></td>
			      <td><?php echo $professionals[$i]['reg_no']; ?></td>
			      <td><?php echo $professionals[$i]['level']; ?></td>
			      <td><?php echo $professionals[$i]['grade']; ?></td>
			      <td><?php echo $professionals[$i]['fos']; ?></td>
			      <td><?php echo $professionals[$i]['highest_qual']; ?></td>
			      <td class="text-center">
			      	<form action="" class="form-inline" method="post">
			      		<input type="hidden" name="form" value="delete_professional">
			      		<input type="hidden" name="id" value="<?php echo $professionals[$i]['id']; ?>">
			      		<button type="submit" class="btn btn-link" style="font-size: 1.5rem;cursor: pointer;">&times;</button>
			      	</form>
			      	
			      </td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>			
		</div>
	</div>
	<div class="row mt-3 mb-3">
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