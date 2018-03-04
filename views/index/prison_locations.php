<hr>
            <div class="col-md-10" style="text-align:justify;line-height:27px;float:none;margin:auto">
 <form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
 <fieldset>
 <legend style="text-align:center">Please Select states</legend>
 <div class="col-lg-7" style="margin:0 auto;float:none">
<select name="state" class="form-control" style="margin-bottom:5px">
 <?php foreach ($states as $state){?>
 <option value="<?php echo $state['state_id'];?>" <?php if((isset($_GET['state']) ? $_GET['state'] : null)==$state['state_id']){echo "selected='selected'";}?>><?php echo $state['state'];?></option>
 <?php }?>
 </select>
      <input type="submit" class="btn btn-success btn-md pull-right" style="margin-bottom:10px" value="Get Prisons">
 </div>
 
 </fieldset>
 </form>
 </div>
 
 <?php if(isset($prisons)){?>
 <h4 align="center"><strong>PRISON(S) IN <?php echo strtoupper($prisons[0]['state']);?></strong></h4>
 <div class="col-md-4" style="text-align:justify;line-height:27px;float:none;margin:auto;display:nne">
 <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-striped">
  <tr>
    <td width="16%"><strong>S/n</strong></td>
    <td width="84%" style="text-align:center"><strong>Prisons</strong></td>
  </tr>
  <?php foreach($prisons as $key=>$prison){?>
  <tr>
    <td><?php echo $key+1;?></td>
    <td style="text-align:center"><?php echo $prison['prison_name'];?></td>
  </tr>
  <?php }?>
</table>

     
     
 </div>
 <?php }?>

            
            <!-- /.col-md-8 -->
            <div class="col-md-4" style="color:#fff;display:none">
            </div>
        