<div class="container mb-3">
  <header class="text-center g-width-60x--md mx-auto g-mb-30">
    <div class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
      <h2 class="h3 u-heading-v2__title g-color-gray-dark-v2 text-uppercase g-font-weight-600" style="">Attachments</h2>
    </div>
  </header>
  <div class="col-md-12" style="margin:0 auto;float:none">
	</div>
	<div class="row mb-3">
		<div class="col-md-6 col-sm-12">
			<fieldset>
			  <legend>Add Attachment:</legend>
			  <form action="" method="post" enctype="multipart/form-data">
      		<input type="hidden" name="form" value="attachment">
      		<div id="select" class="row mb-3">
				  	<div class="col-sm-12">
				  		<label>Document type</label>
				  		<select onchange="toggleTitle(event);" required class="form-control">
				  			<option value="Birth certificate">Birth certificate</option>
				  			<option value="Age Declaration">Age Declaration</option>
				  			<option value="Bachelors Degree">Bachelors Degree</option>
				  			<option value="Masters Degree">Masters Degree</option>
				  			<option value="Doctorate Degree">Doctorate Degree</option>
				  			<option value="Diploma">Diploma</option>
				  			<option value="Passport">Passport</option>
				  			<option value="Other">Other</option>
				  		</select>
				  	</div>
				  </div>
				  <div id="other" class="row mb-3">
				  	<div class="col-sm-12">
				  		<label>Document title</label>
				  		<input id="titleInput" type="text" name="title" required class="form-control">
				  	</div>
				  </div>
				  <div class="row mb-3">
				  	<div class="col-md-12">
				  		<label>File</label>
				  		<input type="file" name="file" class="form-control" accept=".jpg,.png,.doc,.docx,.pdf">
				  	</div>
				  	<?php if (isset($err_msg)) { ?>
				  	<small class="text-danger"><?php echo $err_msg; ?></small>
				  	<?php }?>
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
			<h3>Attachments</h3>
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">Title</th>
			      <th scope="col">Remove</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php for ($i=0; $i < count($attachments); $i++) {  ?>
			    <tr>
			      <td><?php echo $attachments[$i]['title']; ?></td>
			      <td class="text-center" style="font-size: 1.5rem;cursor: pointer;">
			      <form action="" class="form-inline" method="post">
			      		<input type="hidden" name="form" value="delete_attachment">
			      		<input type="hidden" name="id" value="<?php echo $attachments[$i]['id']; ?>">
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
				<button class="btn btn-md btn-block u-btn-primary rounded text-uppercase g-py-13" type="submit">Finish</button>
			</form>
		</div>
	</div>
  
</div>
<script>
	const titleBlock = document.getElementById('other')
		titleInput = document.getElementById('titleInput');

	titleBlock.style.display = 'none';

	function toggleTitle(ev) {
		if (ev.target.value === 'Other') {
			titleBlock.style.display = 'block';
			titleInput.value = '';
		} else {
			titleInput.value =  ev.target.value;
			titleBlock.style.display = 'none';

		}
	}
</script>