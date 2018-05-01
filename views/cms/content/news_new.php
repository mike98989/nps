 <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=g3ja9p6k9ix8rtw4ch7eagt702cj5b5fdtiko0do3id6mdch"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
<?php if(!isset($_GET['edit'])){?>
<form method="post" action="<?php $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
<div class="col-lg-9" style="text-align:left">
<h4>Create News Content</h4>
<?php if(isset($msg)){?>
<?php if($msg=='true'){?>
<div class="alert alert-success"><?php echo "News content published!";?></div>      
<?php }else{?>    
<div class="alert alert-danger"><?php echo $msg;?></div>
<?php }?>
<?php }?>
<div class="entry input-group col-xs-12" style="margin-bottom:7px">
<span class="input-group-btn"> <button class="btn btn-default btn-add" type="button">News Title </button> </span>
<input type="text" class="form-control" id="title" name="newsTitle" value="<?php if(isset($_POST['newsTitle'])){echo $_POST['newsTitle'];}?>  "  onFocus="" required placeholder="News Title"><br/>
</div>
<label>Content</label>
<textarea id="froala-editor" rows="6" class="form-control" name="Details">
<?php if(isset($_POST['newsTitle'])){echo $_POST['Details'];}?>    
</textarea>
    
  
<?php if((isset($msg) ? $msg : null)=='true'){?>    
<button type="submit" class="btn btn-sm btn-success pull-right" style="margin-top:5px;">Update</button> 
<?php }else{?>
<button type="submit" class="btn btn-sm btn-success pull-right" style="margin-top:5px;">Save & Publish</button>   
<?php }?>    
    </div>
<div class="col-lg-3">
<img id="target" style="width:100%;display:none">  
<span style="font-size:11px;color:#f30">Best image size should be 500px by 600px</span> <br/> 
<button type="button" class="btn btn-sm btn-default" style="margin-top:10px" onclick="$('#src').click()">Set Featured Image</button>
<input type="hidden" name="status" value="1">
<input type="hidden" name="link" value="<?php echo rand(1000,100000);?>">    
<input type="hidden" name="year" value="<?php echo date('Y');?>">  
<input type="hidden" name="month" value="<?php echo date('m');?>">  
<input type="hidden" name="day" value="<?php echo date('d');?>">      
<input type="hidden" name="posterID" value="<?php echo $_SESSION['details'][0]['admin_email'];?>">      
<input type="file" onchange="angular.element(this).scope().setFeaturedImage(this)" id="src" name="featured_image" style="display:none">    
</div>
</form>
<?php } elseif(isset($_GET['edit'])){?>

<form method="post" action="<?php $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
<div class="col-lg-9" style="text-align:left">
<h4>Edit News Content</h4>
<?php if(isset($msg)){?>
<?php if($msg=='true'){?>
<div class="alert alert-success"><?php echo "News content edited!";?></div>      
<?php }else{?>    
<div class="alert alert-danger"><?php echo $msg;?></div>
<?php }?>
<?php }?>
<div class="entry input-group col-xs-12" style="margin-bottom:7px">
<span class="input-group-btn"> <button class="btn btn-default btn-add" type="button">News Title </button> </span>
<input type="text" class="form-control" id="title" name="newsTitle" value="<?php if(isset($_POST['newsTitle'])){echo $_POST['newsTitle'];}else{echo $news['newsTitle'];}?>  "  onFocus="" required placeholder="News Title"><br/>
</div>
<label>Content</label>
<textarea id="froala-editor" rows="6" class="form-control" name="Details">
<?php if(isset($_POST['newsTitle'])){echo $_POST['Details'];}else{echo $news['Details'];}?>    
</textarea>
    
<button type="submit" class="btn btn-sm btn-success pull-right" style="margin-top:5px;">Update</button>    
    </div>
<div class="col-lg-3">
<img id="target" style="width:100%;display:nne" src="<?php echo URL.'public/'.$news['picture'];?>">    
<button type="button" class="btn btn-sm btn-default" style="margin-top:10px" onclick="$('#src').click()">Change Featured Image</button>
<input type="hidden" name="edit" value="<?php echo $_GET['edit'];?>">    

<input type="hidden" name="posterID" value="<?php echo $_SESSION['details'][0]['admin_email'];?>">      
<input type="file" onchange="angular.element(this).scope().setFeaturedImage(this)" id="src" name="featured_image" style="display:none">    
</div>
</form>
<?php }?>

