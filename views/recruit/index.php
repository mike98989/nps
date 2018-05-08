<section class="u-bg-overlay g-bg-pos-top-center g-bg-img-hero g-bg-black-opacity-0_3--after g-py-20" style="background-image: url(<?php echo URL;?>public/images/blur-wallpaper2.jpg);padding-top:0">
  <div class="container u-bg-overlay__inner">
   <h4 style="text-align:center;color:#fff">Register or Login</h4>
    <div class="row justify-content-center align-items-center no-gutters col-lg-12" style="margin:0 auto;float:none;">
<div class="col-lg-10 g-bg-white" style="text-align: center;margin:10px auto;padding:10px">
  <h5 style="color:#f30">This recruitment exercise will span from 30/04/2018 to 11/06/2018</h5>
</div>

    </div>
    <div class="row justify-content-center align-items-center no-gutters col-lg-12" style="margin:0 auto;float:none;">

      <div class="col-lg-4 g-bg-white g-rounded-left-5--lg-up">
        <div class="g-pa-40" style="padding:10 0 !important">
        <h2 class="h4 g-color-black mb-4">
              The Nigerian Prisons Recruitment Exercise 2018
            </h2>
            <div style="color:#000;margin-bottom:1rem">
              Applications are hereby invited from suitably qualified candidates for full time appointments to fill existing vacancies in the following positions in the Nigeria Prisons Service:
              <ul style="list-style:disc;padding:0;margin:0;line-height:30px;font-weight:bold">
                <li>CATEGORY A: Superintendent Cadre:</li>
                <li>CATEGORY B: Inspectorate Cadre:</li>
                <li>CATEGORY C: Assistant Cadre:</li>
              </ul>
              
               <ul style="list-style:disc;padding:0;margin:0;line-height:30px;"><strong style="text-decoration: underline;">REQUIREMENTS</strong>
                <li>Applicants must be Nigerians by birth.</li>
                <li>Applicants must be between ages of 18 and 30 years</li>
              </ul><br/>
              <a href="<?php echo URL;?>recruit/info" class="btn btn-sm btn-success">Read More</a>
            </div>
            
          </div>
      </div>

      <div class="col-lg-4 g-bg-teal g-bg-white-gradient-opacity-v1" style="">
        <div class="g-pa-30" style="padding:10 0 !important">
          <!-- Form -->
          <form action="" class="" method="post" onsubmit="return validateLoginForm();">
          	<input type="hidden" name="form" value="login">
            <h2 class="h4 g-color-white mb-4">
              Already Registered 
            </h2>
            <div style="color:#fff;margin-bottom:1rem">
              If you are already registered and want to continue your application or check your application status.
            </div>
            <?php if(isset($loginErrorMessage)){?>
            <div class="alert alert-danger"><?php echo $loginErrorMessage; ?></div>
            <?php }?>
            <div class="mb-4">
              <div class="input-group">
                <span class="input-group-addon g-width-45 g-brd-white g-color-white">
                  <i class="fa fa-envelope"></i>
                </span>
                <input required name="email" class="form-control g-color-black g-brd-left-none g-brd-white g-bg-transparent g-color-white g-placeholder-white g-pl-0 g-pr-15 g-py-13" type="email" placeholder="Email">
              </div>
            </div>

            <div class="g-mb-40">
              <div class="input-group rounded">
                <span class="input-group-addon g-width-45 g-brd-white g-color-white">
                      <i class="fa fa-key"></i>
                    </span>
                <input required name="password" class="form-control g-color-black g-brd-left-none g-brd-white g-bg-transparent g-color-white g-placeholder-white g-pl-0 g-pr-15 g-py-13" type="password" placeholder="Password">
              </div>
            </div>

            
            <div class="g-recaptcha" data-sitekey="6Lcuqk4UAAAAAFErYJo2BeY0K6VhHmNo_38L2aA9"></div>
            <div class="g-mb-60">
              <button class="btn btn-md btn-block u-btn-primary rounded g-py-13" type="submit">Login</button>
            </div>
              
              <div class="g-mb-30" style=";margin-top: 6rem;text-align:center">
              
                
                
            </div>
          </form>
          <!-- End Form -->
        </div>
      </div>

      <div class="col-lg-4 g-bg-white g-rounded-right-5--lg-up">
        <div class="g-pa-30">
         <!-- Form -->
          <form id="signupForm" action="" class="" method="post" onsubmit="return validateSignupForm();">
            <input type="hidden" name="form" value="signup">
            <h3 class="h4 g-color-black mb-4">New Applicant</h2>
            <div class="mb-4">
              <div class="input-group rounded">
                <span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
                      <i class="fa fa-user"></i>
                    </span>
                <input required name="fname" value="<?php if(isset($_POST['fname'])){echo $_POST['fname'];}?>" class="form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13" type="text" placeholder="First name">
              </div>
            </div>

            <div class="mb-4">
              <div class="input-group rounded">
                <span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
                      <i class="fa fa-user"></i>
                    </span>
                <input required name="lname" value="<?php if(isset($_POST['lname'])){echo $_POST['lname'];}?>" class="form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13" type="text" placeholder="Surname">
              </div>
            </div>

            <div class="mb-4">
              <div class="input-group rounded">
                <span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
                      <i class="fa fa-envelope-o"></i>
                    </span>
                <input required id="signup-email" name="email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>" class="form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13" type="email" placeholder="Email">
              </div>
              <small class="text-danger" id="signup-email-error">
                <?php if (isset($signupErrorMessage)) { echo $signupErrorMessage; } ?>
              </small>
            </div>

            <div class="mb-4">
              <div class="input-group rounded">
                <span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
                      <i class="fa fa-key"></i>
                    </span>
                <input id="signup-password" required name="password" class="form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13" type="password" placeholder="Password">
              </div>
                <small class="text-danger" id="signup-password-error"></small>
            </div>

              <div class="mb-4">
              <div class="input-group rounded">
                <span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
                      <i class="fa fa-key"></i>
                    </span>
                <input id="re-signup-password" required name="re_password" class="form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13" type="password" placeholder="Re-enter Password">
              </div>
                
            </div>

            <div class="g-recaptcha" data-sitekey="6Lcuqk4UAAAAAFErYJo2BeY0K6VhHmNo_38L2aA9"></div>
            <button class="btn btn-md btn-block u-btn-primary rounded g-py-13" type="submit">Signup</button>
          </form>

          <!-- End Form -->
        </div>
      </div>
    </div>
  </div>
</section>
<?php
foreach ($this->scripts as $src) {
  echo "<script src='{$src}'></script>";
}
?>


<script src='https://www.google.com/recaptcha/api.js'></script>