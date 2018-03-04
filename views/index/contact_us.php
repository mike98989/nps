<hr>
            <div class="col-md-10" style="text-align:justify;line-height:27px;float:none;margin:auto">
            <h3 style="text-align:center"><strong>NATIONAL HEADQUARTERS</strong></h3>
			<h4 style="text-align:center">Bill Clinton Drive, Airport Road Abuja</h4>
      <div class="col-lg-12" style="text-align:center">
      <i class="fa fa-envelope"></i> Email: info@prisons.gov.ng <i class="fa fa-envelope"></i> Email: complaintresponsedesk@prisons.gov.ng<br/>
      
      </div>

      <div class="col-lg-12" style="text-align:center">
      <i class="fa fa-whatsapp"></i> Whatsapp: +234807505006  <i class="fa fa-phone"></i> SMS: +234807505006<br/>
     
      </div>


            <div class="col-lg-12" style="text-align:center;;margin:0 auto;padding:0;text-align:center">
            
            <li style="list-style:none;margin-right:15px">
            <a href="http://www.facebook.com/nigps" target="_new">
 <img src="<?php echo URL;?>public/images/facebook_icon.png" style="width:30px;float:left margin-right:5px">Facebook</a>
<a href="http://www.twitter.com/npsreformer" target="_new">
<img src="<?php echo URL;?>public/images/twitter_icon.png" style="width:30px;float:;margin-right:5px">Twitter
</a>
 </li>

 			
 
       </div>    
</div>
      
<div style="clear:both"></div>

<div class="row" style="margin-bottom:15px">           
<div id="map"></div>
    
</div>
<div class="container">
<div class="col-lg-6" style="float:none;margin:0 auto">
<h4 style="text-align:center">Please leave a message</h4>

 <?php if(isset($data['details']['msg'])){?>
<div class="alert alert-danger" style="text-align:center">Thank you <?php echo $_POST['full_name'];?><br/>
Your message was sent successfully! We will get back to you within 72 hours
</div>
<?php }?>
<form method="post" id="contactform" action="<?php $_SERVER['PHP_SELF'];?>#contactform">
<label><i class="fa fa-user"></i> Full name</label>
<input type="text" name="full_name" class="form-control" required>

<label><i class="fa fa-envelope"></i> Email: </label>
<input type="email" name="email" class="form-control" required>

<label><i class="fa fa-envelope"></i> Message: </label>
<textarea class="form-control" name="message" rows="5" required></textarea>

<input class="btn btn-success pull-right" type="submit" style="margin:10px 0">
</form>

</div>

</div>
<div style="clear:both"></div>



<script>
      function initMap() {
        var mapDiv = document.getElementById('map');
        var map = new google.maps.Map(mapDiv, {
            center: {lat: 8.978948, lng: 7.376539},
            zoom: 15,
               
				mapTypeId: "hybrid",
				
        });
		
		
      }
    </script>    



        <!-- Footer -->
        

    <!-- /.container -->



<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZtZjBvSMAFQ0sYUCmI1MfELfhQ3jBSAQ&callback=initMap">
    </script>
    

