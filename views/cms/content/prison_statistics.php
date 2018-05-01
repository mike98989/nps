    <!-- Full Width Column -->
  <div class="content-wrapper" ng-controller="cmsStatisticsController">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Prison Location
          
        </h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo URL;?>cms"><i class="fa fa-dashboard"></i> Home</a></li>
          <!--<li><a href="#">News</a></li>-->
          <li class="active">Prison Statistics</li>
        </ol>
      </section>
        
<section class="content">
           
<?php include('views/cms/snipets/left_bar.php')?>
          
          <div class="col-md-10">
              <!-- USERS LIST -->
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Prison Locations</h3>
                
                  <div class="box-tools pull-right">
                    
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                      <a href="<?php echo URL;?>cms/prison_locations/new" type="button" class="btn btn-default btn-xs btn-box-tool" data-widget="remove"><i class="fa fa-plus"></i></a>
                   
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding" style="text-align:center;padding-bottom:10px !important">
                <?php 
               if($url[3]==''){
                   include('prison_statistics_index.php');
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