
<div class="" style="background:#fff">

<div style="background:linear-gradient(rgba(20,20,20, .4),rgba(20,20,20, .4)),url(<?php echo URL;?>views/images/top_background.jpg); padding:20px 0 2px;text-align:center;border-bottom:1px solid #000">
    
<h1 style="text-align:center;margin-bottom:10px;color:#fff;font-weight:normal">Get Started</h1>

    
</div>

<div id="fh5co-pricing-section" style="margin-top:0;padding:20px 0">
		<div class="container">
			

              
<div class="col-lg-10" style="margin:0 auto;float:none;padding-top:0">
 <div class="price-box" style="text-align:left;border-bottom:3px solid #d6049d">
<h3 style="margin-bottom:10px;bottom-top:0;text-align:center">Create Your Account In Less than 60 Seconds!</h3>
<div class="row">   
<?php if(!isset($message['sendstatus'])){?>
<div class="col-lg-7 animate-box" style="">

<button type="button" class="btn btn-sm btn-block btn-info" style="display:none">Login with your facebook account</button>    
    
<button type="button" class="btn btn-sm btn-block btn-danger" style="display:none">Login with your Twitter account</button> 
    
<?php if(isset($message['msg'])){?>    
<div class="alert alert-default purplebg-darker"><?php echo $message['msg'];?></div> 
<?php }?>
    
<form method="post" action="<?php $_SERVER['PHP_SELF'];?>" style="color:;">
<label style="font-weight:bold">Full Name</label>    
<input type="text" class="form-control" name="user_fname" placeholder="Full name" required>

<label>Email</label>    
<input type="email" class="form-control" name="user_email" placeholder="email@domain.com" required>

<div class="col-md-6" style="padding:2px">   
<label>Password</label>    
<input type="password" class="form-control" name="user_password" placeholder="password" required> 
</div> 
<div class="col-md-6" style="padding:2px">      
<label>Confirm Password</label>    
<input type="password" class="form-control" name="confirm_password" placeholder="Retype password" required> 
<input type="hidden" name="coins" value="100"/>
<input type="hidden" name="profile_img" value="profile_img/default_img.jpg"/>
<input type="hidden" name="cover_img" value="profile_cover_img/default_img.jpg"/>     
<input type="hidden" name="user_confirm_id" value="<?php echo rand(100000,1000000);?>"/>
<input type="hidden" name="registered_date" value="<?php echo date('Y/m/d h:i:s A');?>"/>  

    </div>    
<label><input type="checkbox" ng-model="premium" name="premium_user" class="check" value="1"> Register as premium Member</label>

    
<div class="alert alert-default hidden-lg hidden-md" style="background:#deaede;border:1px solid #f05aeb">
<span ng-show="premium!='1'">
<strong>Note:</strong> Free members can only upload 1 (one) content per week and cannot monetize their content. This account has a small campaign reach.   
</span>
<span ng-show="premium=='1'">  
<strong style="font-size:15px;font-weight:bold">By registering as a Premium Member, you get:</strong>
<table class="table no-border">    
<tr><td><i class="fa fa-check"></i> Free 300 coin on signup</td></tr>
<tr><td><i class="fa fa-check"></i> Unlimited Track upload</td></tr> 
<tr><td><i class="fa fa-check"></i> Unlimited Social Media Campeign</td></tr>  
<tr><td><i class="fa fa-check"></i> Unlimited content upload weekly</td></tr> 
<tr><td><i class="fa fa-check"></i> Enjoy premium site features</td></tr>
<tr><td><i class="fa fa-check"></i> Make money from track/content sales</td></tr>    
<tr><td><i class="fa fa-check"></i> Track on hellogospel music library</td></tr>

</table>    
</span>    
</div> 
    
    
 <div ng-show="premium=='1'"> 
<hr>     
<label>Select Levels</label>
    
<div class="radio" style="text-align:center;">    
<label style="margin-right:10px" title="Level 1 Premium plan" data-container="body" data-toggle="popover" data-placement="left" data-content="
<table class='table'>
<tr><td><i class='fa fa-check'></i> Average reach of 1000 people while setting up your campaign</td></tr>
<tr><td><i class='fa fa-check'></i> Bonus 20 coins on sign up </td></tr> 
<tr><td><i class='fa fa-check'></i> Access to participate in all our HG initiatives on-site and off-site for the paid period</td></tr> 
<tr><td><strong>Amount:</strong> N250/year </tr></table>">
<input type="radio" id="lev1" ng-model="levelpayment" value="1@250" name="premium_level" class="radio"> Level 1</label> 
    
<label style="margin-right:10px" title="Level 2 Premium plan" data-container="body" data-toggle="popover" data-placement="bottom" data-content="
<table class='table'>
<tr><td><i class='fa fa-check'></i> Average reach of 100000 people while setting up your campaign</td></tr>
<tr><td><i class='fa fa-check'></i> Bonus 50 coins on sign up  </td></tr> 

<tr><td><i class='fa fa-check'></i> Access to participate in all our HG initiatives on-site and off-site for the paid period</td></tr> 
<tr><td><strong>Amount:</strong> N500/year </tr></table>">
<input type="radio" ng-model="levelpayment" id="lev3" value="2@500" name="premium_level" class="radio"> Level 2</label> 
    
<label title="Level 3 Premium plan" data-container="body" data-toggle="popover" data-placement="right" data-content="
<table class='table'>
<tr><td><i class='fa fa-check'></i> Average reach of over 1000000 people while setting up your campaign</td></tr>
<tr><td><i class='fa fa-check'></i> Bonus 100 coins on sign up  </td></tr> 
<tr><td><i class='fa fa-check'></i> PRO Value Added Service while setting up your campaign, this user will be featured on our Home Page, TV and record deal access.</td></tr> 
<tr><td><i class='fa fa-check'></i> Access to participate in all our HG initiatives on-site and off-site for the paid period</td></tr> 
<tr><td><strong>Amount:</strong> N750/year </tr></table>">
<input type="radio" ng-model="levelpayment" id="lev3" value="3@750" name="premium_level" class="radio"> Level 3</label>    
</div>    

</div>     
    
    
    
<div style="text-align:center">   
<button type="submit" class="btn btn-purple" style="margin:10px auto;border-radius:5px"> Get started <i class="fa fa-arrow-right"></i></button><br/>
<a href="<?php echo URL;?>userlogin" style="color:#000;font-size:14px">Already have account?</a>     
</div>
    
<div style="font-size:13px;text-align:center">By creating a hellogospel account, you agree to our <a href="">Terms of Service</a></div>    
</form>    

</div>
   
    
    
<div class="col-lg-5 animate-box" style="font-size:14px">
<div class="alert alert-default hidden-xs" style="background:#deaede;border:1px solid #f05aeb">
<span ng-show="premium!='1'">
<strong>Note:</strong> Free members can only upload 1 (one) content per week and cannot monetize their content. This account has a small campaign reach. 
<hr style="border:none; border-bottom:1px solid #e19ff5;margin-bottom:4px">     
</span>
   
<strong style="font-size:15px;font-weight:bold">By registering as a Premium Member, you get:</strong>
<table class="table no-border">    
<tr><td><i class="fa fa-check"></i> Free 300 coin on signup</td></tr>
<tr><td><i class="fa fa-check"></i> Unlimited Track upload</td></tr> 
<tr><td><i class="fa fa-check"></i> Unlimited Social Media Campeign</td></tr>  
<tr><td><i class="fa fa-check"></i> Unlimited content upload weekly</td></tr> 
<tr><td><i class="fa fa-check"></i> Enjoy premium site features</td></tr>
<tr><td><i class="fa fa-check"></i> Make money from track/content sales</td></tr>    
<tr><td><i class="fa fa-check"></i> Track on hellogospel music library</td></tr>

</table>    

</div>    
</div> 
    
<div class="col-lg-5 animate-box" style="display:none">
<h3 style="text-align:center;margin-bottom:5px;">Be Heard!</h3> 
<h5 style="text-align:center;">You are just few clicks away from the world</h5>    
<ul style="color:;font-weight:normal;line-height:25px;font-size:16px;list-style:none;text-align:justify;padding:0">
<li style="margin:5px 0">
<span>  
<i class="fa fa-users fa-3x" style="float:left;margin-right:5px;margin-top:7px;display:none"></i></span> 
<span>    
Connect with awesome new people in the newest playground of musicians and various other type of artists. Find new talents or meet your favourites.
</span>
<hr>
</li>     
<li style="margin:5px 0">
<span>  
<img src="<?php echo URL;?>views/images/icon_connect.png" class="img-circle" style="width:60px;;float:left;margin-right:10px;margin-top:7px;display:none"/>
<span>
Keep track of all events near you and see what events your friends are attending. You can easily buy tickets online and reserve your spot at your favourite events.
 </span>  
<hr>    
</li>   
<li style="margin:5px 0">

<img src="<?php echo URL;?>views/images/icon_shield.png" class="img-circle" style="width:60px;;float:left;margin-right:10px;margin-top:7px;display:none"/>     
Extremely secure, you are always the one who decides what you do with your data, you can completely delete your account at any point, without any restrictions.
   
<hr>    
</li> 
  
</ul>    
</div>
 </div>     

<?php }elseif($message['sendstatus']=='0'){?>
<div style="text-align:center;font-weight:bold">
    <h3>Plan Details</h3>
    Plan: <?php echo $message['payment_page_details']['account_plan'];?><br>
    Level: <?php echo $message['payment_page_details']['level'];?><br/>
     Amount Payable: <?php echo $message['payment_page_details']['payable'];?><br/>
    <h3>Choose any payment option</h3>
</div> 
     <div class="col-lg-7" style="float:none;margin:0 auto">
<div class="col-lg-6">          
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="YBJLDMLRYKVMG">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</div>
<!-----PAYSTACK--->
<div class="col-lg-6">           
<form >
  <script src="https://js.paystack.co/v1/inline.js"></script>
  <button type="button" class="btn btn-purple-darker btn-sm pull-right" onclick="payWithPaystack()"> Pay With Paystack </button> 
</form>
<script>
  function payWithPaystack(){
    var handler = PaystackPop.setup({
      key: 'pk_test_41be118fcc60b703fd37429df41174cc9c1cb15a',
      email: 'premium@hellogospel.com',
      amount: <?php echo $message['payment_page_details']['payable'].'00';?>,
      ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      metadata: {
         custom_fields: [
            {
                display_name: "Mobile Number",
                variable_name: "mobile_number",
                value: "+2348012345678"
            }
         ]
      },
      callback: function(response){
          alert('success. transaction ref is ' + response.reference);
      },
      onClose: function(){
          alert('window closed');
      }
    });
    handler.openIframe();
  }
</script>
</div>  
</div>         
<?php }else{?>
<div class="col-lg-8 animate-box" style="margin:auto;float:none;text-align:center;padding-top:40px"> 
<h3>An activation email has been sent to your account! <br/>Please click on the activation button on your email</h3> 
     
 </div>   
<?php }?>
     <div style="clear:both"></div>
</div>
   
            </div>
            
            
            
            
		</div>
	</div>
    
    
    
</div>    
