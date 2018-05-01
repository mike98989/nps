<form method="post" ng-controller="">
<div class="col-lg-9" style="margin:0 auto;float:none">
<h4 style="font-weight:bold">Set Prison Statistics </h4>
<?php if(isset($msg)){?>
<div class="alert alert-success"><?php echo $msg;?></div>
<?php }?>
<div class="entry input-group col-xs-12" style="margin-bottom:7px">
<span class="input-group-btn"> <button class="btn btn-default btn-add" type="button">Heading </button> </span>
<input type="text" class="form-control" id="title" name="heading" value="<?php if(isset($_POST['heading'])){echo $_POST['heading'];}else{echo $statistics['heading'];}?> " onFocus="" required placeholder="Heading Title"><br/>
</div>

<div class="entry input-group col-xs-12" style="margin-bottom:7px">
<span class="input-group-btn"> <button class="btn btn-default btn-add" type="button">Total Inmate Population </button> </span>
<input type="number" class="form-control" disabled="disabled" id="title" name="total_inmate_population" value="<?php echo $statistics['awaiting_trial_female'] + $statistics['awaiting_trial_male'] + $statistics['convicted_female'] + $statistics['convicted_male']?>" onFocus="" required placeholder="Total Inmate Population"><br/>
</div>

<div class="entry input-group col-xs-12" style="margin-bottom:7px">
<span class="input-group-btn"> <button class="btn btn-default btn-add" type="button">Total Male Population </button> </span>
<input type="number" class="form-control" disabled="disabled" id="title" name="total_male_population" value="<?php echo $statistics['awaiting_trial_male'] + $statistics['convicted_male']?>" onFocus="" required placeholder="Total Male Population"><br/>
</div>

<div class="entry input-group col-xs-12" style="margin-bottom:7px">
<span class="input-group-btn"> <button class="btn btn-default btn-add" type="button">Total Female Population </button> </span>
<input type="number" class="form-control" disabled="disabled" id="title" name="total_female_population" value="<?php echo $statistics['awaiting_trial_female'] + $statistics['convicted_female']?>" onFocus="" required placeholder="Total Female Population"><br/>
</div>
<div class="entry input-group col-xs-12" style="margin-bottom:7px">
<span class="input-group-btn"> <button class="btn btn-default btn-add" type="button">Convicted Male </button> </span>
<input type="number" class="form-control" id="title" name="convicted_male" value="<?php if(isset($_POST['convicted_male'])){echo $_POST['convicted_male'];}else{echo $statistics['convicted_male'];}?>" onFocus="" required placeholder="Convicted Male"><br/>
</div>
<div class="entry input-group col-xs-12" style="margin-bottom:7px">
<span class="input-group-btn"> <button class="btn btn-default btn-add" type="button">Convicted Female </button> </span>
<input type="number" class="form-control" id="title" name="convicted_female" value="<?php if(isset($_POST['convicted_female'])){echo $_POST['convicted_female'];}else{echo $statistics['convicted_female'];}?>" onFocus="" required placeholder="Convicted Female"><br/>
</div>

<div class="entry input-group col-xs-12" style="margin-bottom:7px">
<span class="input-group-btn"> <button class="btn btn-default btn-add" type="button">Total Convicted </button> </span>
<input type="number" class="form-control" disabled="disabled" id="title" name="total_convicted" value="<?php echo $statistics['convicted_female'] + $statistics['convicted_male']?>" onFocus="" required placeholder="Convicted Female"><br/>
</div>

<hr>

<div class="entry input-group col-xs-12" style="margin-bottom:7px">
<span class="input-group-btn"> <button class="btn btn-default btn-add" type="button">Awaiting Trial Male </button> </span>
<input type="number" class="form-control" id="title" name="awaiting_trial_male" value="<?php if(isset($_POST['awaiting_trial_male'])){echo $_POST['awaiting_trial_male'];}else{echo $statistics['awaiting_trial_male'];}?>" onFocus="" required placeholder="Awaiting Trial Male"><br/>
</div>
<div class="entry input-group col-xs-12" style="margin-bottom:7px">
<span class="input-group-btn"> <button class="btn btn-default btn-add" type="button">Awaiting Trial Female </button> </span>
<input type="number" class="form-control" id="title" name="awaiting_trial_female" value="<?php if(isset($_POST['awaiting_trial_female'])){echo $_POST['awaiting_trial_female'];}else{echo $statistics['awaiting_trial_female'];}?>" onFocus="" required placeholder="Awaiting Trial Female"><br/>
</div>
<div class="entry input-group col-xs-12" style="margin-bottom:7px">
<span class="input-group-btn"> <button class="btn btn-default btn-add" type="button">Total Awiaiting Trial </button> </span>
<input type="number" class="form-control" disabled="disabled" id="title" name="total_awaiting_trial" value="<?php echo $statistics['awaiting_trial_female'] + $statistics['awaiting_trial_male']?>" onFocus="" required placeholder="Total Awaiting Trial"><br/>
</div>


<input type="hidden" value="<?php echo $statistics['id'];?>" name="update_statistics">
<button type="submit" class="btn btn-md btn-success pull-right" style="margin-top:5px;">Update</button> 
</div>
    

    </div>

</form>