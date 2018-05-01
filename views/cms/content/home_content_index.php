 <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=g3ja9p6k9ix8rtw4ch7eagt702cj5b5fdtiko0do3id6mdch"></script>
  <!--<script>tinymce.init({ selector:'textarea' });</script>-->

<form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
<div class="col-lg-12" style="text-align:left">
<h4>Update Home Content</h4>
<?php if(isset($msg)){?>   
<div class="alert alert-success"><?php echo $msg;?></div>
<?php }?>

<label>Mission Statement</label>
<textarea rows="6" class="form-control" name="mission" required>
<?php if(isset($_POST['mission'])){echo $_POST['mission'];}else{echo $home_content['mission'];}?>    
</textarea>
    
<label>Vision Statement</label>
<textarea rows="6" class="form-control" name="vision" required>
<?php if(isset($_POST['vision'])){echo $_POST['vision'];}else{echo $home_content['vision'];}?></textarea>    
  
    
<label>Functions of NPS</label>
<textarea rows="6" class="form-control" name="functions_of_nps" required>
<?php if(isset($_POST['functions_of_nps'])){echo $_POST['functions_of_nps'];}else{echo $home_content['functions_of_nps'];}?></textarea>    
    
<input type="hidden" name="update_home_content" value="1">   
    
<label>External Links</label>
    
<input type="submit" class="btn btn-sm btn-success pull-right" value="Update" style="margin-top:5px;"> 
   
</div>

    </form>


