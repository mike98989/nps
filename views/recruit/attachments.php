<section class="u-bg-overlay g-bg-pos-top-center g-bg-img-hero g-bg-black-opacity-0_3--after g-py-100" style="background:#ccc;padding-top:10px !important; padding-bottom:10px !important" ng-controller="recruitRegistrationController">
<div class="container u-bg-overlay__inner" style="background:#fff;padding:30px 0;border-top:4px solid #90b205">
  <header class="text-center g-width-60x--md mx-auto g-mb-30">
    <div class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
      <h2 class="h3 u-heading-v2__title g-color-gray-dark-v2 g-font-weight-600" style="">Attachments</h2>
    </div>
    <div class="alert alert-success">
      <h5>You need to upload at least a passport photograph, SSCE and First School Leaving Certificate to complete the registration process</h5>
  </div>
  </header>
  <div class="col-md-12" style="margin:0 auto;float:none">
	</div>
	<div class="row" style="padding:3px 10px">
		<div class="col-md-5 col-sm-12">
			<fieldset>
			  <h5 style="font-weight:bold;text-align:center">Add Attachment:</h5>
			  <form action="" method="post" enctype="multipart/form-data">
      		<input type="hidden" name="form" value="attachment">
      		<div id="select" class="row mb-3">
				  	<div class="col-sm-12">
				  		<label>Document type</label>
				  		<select onchange="toggleTitle(event);" required class="form-control">
				  			<?php for ($i=0; $i < count($attachments_list); $i++) { 
				  				echo "<option value='{$attachments_list[$i]['degree']}'>{$attachments_list[$i]['degree']}</option>";
				  			} ?>
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
				  		<button class="btn btn-sm u-btn-primary rounded" type="submit">Add Doc.</button>
				  	</div>
				  </div>

				<div class="alert alert-success">
			      <ul style="padding-left:5px;line-height:25px">
			      	<li>Upload file must either be in jpeg, pdf or MS word(docx) format</li>
			      	<li>Upload file must not exceed 2MB</li>
			      </ul>
			  </div>
			  </form>
			</fieldset>
		</div>

		<div class="col-md-7 col-sm-12">
			<h5 class="text-center" style="font-weight: bold">Attachments</h5>
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
			</form>
		</div>
		<?php if ($files_attached) { ?>
		<div class="col-sm-6 text-center">
			<form action="" method="post">
				<input type="hidden" name="form" value="next">
				<button class="btn btn-md u-btn-primary rounded" type="submit">Finish (4/4)</button>
			</form>
		</div>
		<?php } ?>
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