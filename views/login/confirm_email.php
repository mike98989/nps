

<aside id="fh5co-hero" class="" style="display:nne;background:linear-gradient(rgba(20,20,20, .4),rgba(20,20,20, .4)),url(<?php echo URL;?>views/images/top_background.jpg); padding:40px 0 2px;text-align:center;border-bottom:1px solid #000;margin-bottom:15px">
<h1 style="text-align:center;color:#fff">Bravo!</h1>
</aside>



<div class="container">
    
  <div class="col-lg-6" style="margin:auto;float:none;text-align:center">
    <img src="<?php echo URL;?>public/images/logo.png" style="height:150px;margin-bottom:10px;display:none"/>
      
    <?php echo $message['msg'];?>
      
       
  </div>
  <!-- /.login-logo -->
  
</div>
  
</div>

<script>
$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
</script>