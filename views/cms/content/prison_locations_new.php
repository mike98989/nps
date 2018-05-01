 <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=g3ja9p6k9ix8rtw4ch7eagt702cj5b5fdtiko0do3id6mdch"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

<form method="post" ng-init="initialize_states()"action="<?php $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
<?php if(!isset($_GET['edit'])){?>    
<div class="col-lg-9" style="margin:0 auto;float:none">
<h4 style="font-weight:bold">Create News Prison</h4>
<?php if(isset($msg)){?>
<?php if($msg=='true'){?>
<div class="alert alert-success"><?php echo "New Prison Details Saved";?></div>      
<?php }else{?>    
<div class="alert alert-danger"><?php echo $msg;?></div>
<?php }?>
<?php }?>
<div class="entry input-group col-xs-12" style="margin-bottom:7px">
<span class="input-group-btn"> <button class="btn btn-default btn-add" type="button">Prison Name </button> </span>
<input type="text" class="form-control" id="title" name="prison_name" value="<?php if(isset($_POST['prison_name'])){echo $_POST['prison_name'];}?>  "  onFocus="" required placeholder="Enter name of prison"><br/>
</div>
<div class="entry input-group col-xs-12" style="margin-bottom:7px">
<span class="input-group-btn"> <button class="btn btn-default btn-add" type="button">Select State </button> </span>
<select class="form-control" name="state_id" >
<option  value="0">--Select State ----</option>    
<option ng-repeat="state in states" value="{{state.state_id}}">{{state.state}} - {{state.capital}}</option>
</select>
<br/>
</div>
<input type="hidden" name="status" value="1">    
<button type="submit" class="btn btn-md btn-success pull-right" style="margin-top:5px;">Save</button> 
    </div>
<?php }else{?>
<div class="col-lg-9" style="margin:0 auto;float:none">
<h4 style="font-weight:bold">Edit Prison Info </h4>
<?php if(isset($msg)){?>
<?php if($msg=='true'){?>
<div class="alert alert-success"><?php echo "Prison detaisl updated!";?></div>      
<?php }else{?>    
<div class="alert alert-danger"><?php echo $msg;?></div>
<?php }?>
<?php }?>
<div class="entry input-group col-xs-12" style="margin-bottom:7px">
<span class="input-group-btn"> <button class="btn btn-default btn-add" type="button">Prison Name </button> </span>
<input type="text" class="form-control" id="title" name="prison_name" value="<?php if(isset($_POST['prison_name'])){echo $_POST['prison_name'];}else{echo $prison['prison_name'];}?> " onFocus="" required placeholder="Enter name of prison"><br/>
</div>
<div class="entry input-group col-xs-12" style="margin-bottom:7px">
<span class="input-group-btn"> <button class="btn btn-default btn-add" type="button">Select State </button> </span>
<select class="form-control" name="state_id" ng-model="state_id" ng-init="state_id='<?php echo $prison['state_id'];?>'">
<option  value="0">--Select State ----</option>    
<option ng-repeat="state in states" value="{{state.state_id}}">{{state.state}} - {{state.capital}}</option>
</select>
<br/>
</div>
<input type="hidden" name="edit" value="<?php echo $_GET['edit'];?>">    
<button type="submit" class="btn btn-md btn-success pull-right" style="margin-top:5px;">Update</button> 
    </div>
    
<?php }?>
</form>


