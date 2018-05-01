<link rel="stylesheet" href="<?php echo URL;?>public/dist/css/AdminLTE.min.css">
<body class="hold-transition login-page" ng-app="">
<div class="col-lg-5" style="float:none;margin:40px auto">
    <div class="login-logo"><img src="<?php echo URL;?>public/images/logo.png" style="width:70px">
    <a href="#" style="font-size:24px;padding-bottom:0"><b>NPS</b> Content Management System </a>
  </div>
    <div class="col-lg-8" style="float:none;margin:0 auto">
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
      <div class="form-group has-feedback">
    <?php if(isset($message['error'])){?>
    <div class="alert alert-danger">
    <?php echo $message['error'];?>
    </div>
    <?php }?>
        <input type="email" value="<?php if(isset($_POST['user_email'])){echo $_POST['user_email'];}?>" name="user_email" required class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="user_password" required class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      
        
        
          <button type="submit" class="btn btn-success btn-flat pull-right">Sign In</button>
       
        <!-- /.col -->
      <div style="clear:both"></div>
    </form>

    
    

  </div>
  <!-- /.login-box-body -->
</div>
</div>
<!-- /.login-box -->
</body>