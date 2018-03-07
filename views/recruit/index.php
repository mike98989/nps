<section class="u-bg-overlay g-bg-pos-top-center g-bg-img-hero g-bg-black-opacity-0_3--after g-py-100" style="background-image: url(<?php echo URL;?>public/images/blur-wallpaper2.jpg);">
  <div class="container u-bg-overlay__inner">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-8">
        <!-- Heading -->
        <h1 class="g-color-white mb-4">Login or Register</h1>
        <div class="d-inline-block g-width-35 g-height-2 g-bg-white mb-4"></div>
        <!-- End Heading -->
      </div>
    </div>

    <div class="row justify-content-center align-items-center no-gutters col-lg-9" style="margin:0 auto;float:none;">
      <div class="col-lg-6 g-bg-teal g-rounded-left-5--lg-up g-bg-white-gradient-opacity-v1" style="">
        <div class="g-pa-50" style="padding:10 0 !important">
          <!-- Form -->
          <form action="" class="" method="post" onsubmit="return validateLoginForm();">
          	<input type="hidden" name="form" value="login">
            <h2 class="h4 g-color-white mb-4">
              Already Registered <span class="text-danger"><?php echo $loginErrorMessage; ?></span>
            </h2>
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

            

            <div class="g-mb-60">
              <button class="btn btn-md btn-block u-btn-primary rounded g-py-13" type="submit">Login</button>
            </div>
              
              <div class="g-mb-30" style=";margin-top: 3rem;text-align:center">
              
                <a href="#" style="color:#fff">I forgot my Password</a>
                
            </div>
          </form>
          <!-- End Form -->
        </div>
      </div>

      <div class="col-lg-6 g-bg-white g-rounded-right-5--lg-up">
        <div class="g-pa-50">
          <!-- Form -->
          <form id="signupForm" action="" class="" method="post" onsubmit="return validateSignupForm();">
          	<input type="hidden" name="form" value="signup">
            <h2 class="h4 g-color-black mb-4">New Applicant</h2>
            <div class="mb-4">
              <div class="input-group rounded">
                <span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
                      <i class="fa fa-user"></i>
                    </span>
                <input required name="fname" class="form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13" type="text" placeholder="First name">
              </div>
            </div>

            <div class="mb-4">
              <div class="input-group rounded">
                <span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
                      <i class="fa fa-user"></i>
                    </span>
                <input required name="lname" class="form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13" type="text" placeholder="Surname">
              </div>
            </div>

            <div class="mb-4">
              <div class="input-group rounded">
                <span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
                      <i class="fa fa-envelope-o"></i>
                    </span>
                <input required id="signup-email" name="email" class="form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13" type="email" placeholder="Email">
              </div>
              <small class="text-danger" id="signup-email-error">
                <?php if (isset($signupErrorMessage)) { echo 'Email already used'; } ?>
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