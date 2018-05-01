    <!-- Full Width Column -->
  <div class="content-wrapper" ng-controller="cmsGalleryController">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Gallery/Slider Images
          
        </h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo URL;?>cms"><i class="fa fa-dashboard"></i> Home</a></li>
          <!--<li><a href="#">News</a></li>-->
          <li class="active">Home content</li>
        </ol>
      </section>
        
<section class="content">
           
<?php include('views/cms/snipets/left_bar.php')?>
          
          <div class="col-md-10">
              <!-- USERS LIST -->
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Image Gallery</h3>
                
                  <div class="box-tools pull-right">
                    
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                      <button type="button" onclick="$('#src').click();" class="btn btn-default btn-xs btn-box-tool" data-widget="remove"><i class="fa fa-plus"></i></button>
                   
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding" style="text-align:center;padding-bottom:10px !important">
                <?php 
               if($url[3]==''){
                   include('gallery_index.php');
               }else{
                   include('home_content_'.$url[3].'.php');
               }
                    
                ;?>    
                    
                    
                </div>
                
                <!-- /.box-footer -->
              </div>
              <!--/.box -->
            </div>
          
          
          </section>
        
        
        
        
      </div>
</div>