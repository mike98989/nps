 <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=g3ja9p6k9ix8rtw4ch7eagt702cj5b5fdtiko0do3id6mdch"></script>
  <!--<script>tinymce.init({ selector:'textarea' });</script>-->


<div class="col-lg-12" style="text-align:left" ng-init="initialise_all_gallery()">
<h4>Gallery & Slider Content</h4>
<div class="well alert-default" style="padding:4px">Best dimension option for Image Slider is 1280px by 720px </div>
<?php if(isset($msg)){?>    
<div class="alert alert-success" style="padding:4px"><?php echo $msg;?> </div>
<?php }?>  

<div class="loader" style="text-align:center;display:none">
    <img ng-src="http://{{dirlocation}}public/images/loader.gif" style="width:60px">
    </div>    
    
<div class="col-md-4" ng-repeat="gallery in gallery">
              <!-- USERS LIST -->
  <div class="box box-success">
   
    <!-- /.box-header -->
    <div class="box-body no-padding" style="text-align:center;">
      <div style="display: none" class="edit" style="padding:5px 0">
        <span class="col-lg-10" style="padding:0;">
    <input type="text" value="{{gallery.galleryTitle}}" class="form-control">
  </span>
    <button class="btn btn-xs btn-default pull-right" style="margin-top:8px"><i class="fa fa-save"></i></button>  
    </div>
    <img ng-src="http://{{dirlocation}}public/{{gallery.path}}" style="width:100%">
        
        <button ng-if="gallery.galleryType=='1'" type="button" class="btn btn-box-tool pull-left" data-widget="remove">
            slider
        </button>
        <button ng-if="gallery.galleryType=='2'" type="button" class="btn btn-box-tool pull-left" data-widget="remove">
            gallery
        </button>
        
        <button type="button" ng-click="delete_image(gallery)" class="btn btn-box-tool pull-right" data-widget="remove"><i class="fa fa-times"></i>
        </button>
        <button type="button" class="btn btn-box-tool pull-right" onclick="$('.edit').toggle();" data-widget=""><i class="fa fa-edit"></i>
        </button>

    </div>
      <div class="box-footer no-padding" style="padding:3px !important">
     <h5 class="box-title" style="margin:0;padding:0">{{gallery.galleryTitle}}</h5>  
      </div>
    <!-- /.box-footer -->
  </div>
  <!--/.box -->
</div>
 
<form class="col-lg-4" id="targetwrap" method="post" action="<?php $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data" style="display:none">
<div class="box box-success">    
<input type="text" class="form-control" placeholder="Title" name="galleryTitle" required>    
<input type="text" class="form-control" placeholder="gallery internal link" name="button">    
<input id="src" type="file" name="galleryImage" style="display:none"  onchange="angular.element(this).scope().Set_upload_img(this)">
<img id="target" style="width:100%">
<label style="font-weight:normal !important; padding-left:3px">
<input type="radio" name="galleryType" value="1" checked> Slider  <input type="radio" name="galleryType" value="2"> Gallery       
</label>    
<input type="hidden" name="status" value="1">     
<input type="hidden" name="date" value="<?php echo date('Y/m/d');?>">     
<button type="submit" class="btn btn-default btn-xs pull-right" style="margin:7px 3px">Upload Image</button> 
<div style="clear:both"></div>    
</div>
</form>    
</div>




