<section class="u-bg-overlay g-bg-pos-top-center g-bg-img-hero g-bg-black-opacity-0_3--after g-py-100" style="background-image: url(https://htmlstream.com/preview/unify-v2.2/assets/img-temp/1920x1080/img24.jpg);">
  <div class="container u-bg-overlay__inner">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-8">
        <!-- Heading -->
        <h1 class="g-color-white text-uppercase mb-4">Login or register an account</h1>
        <div class="d-inline-block g-width-35 g-height-2 g-bg-white mb-4"></div>
        <!-- End Heading -->
      </div>
    </div>

    <div class="row justify-content-center align-items-center no-gutters">
      <div class="col-lg-5 g-bg-teal g-rounded-left-5--lg-up">
        <div class="g-pa-50">
          <!-- Form -->
          <form action="" class="g-py-15" method="post" onsubmit="return validateLoginForm();">
          	<input type="hidden" name="form" value="login">
            <h2 class="h3 g-color-white mb-4">
              Login <span class="text-danger"><?php echo $loginErrorMessage; ?></span>
            </h2>
            <div class="mb-4">
              <div class="input-group">
                <span class="input-group-addon g-width-45 g-brd-white g-color-white">
                  <i class="icon-finance-067 u-line-icon-pro"></i>
                </span>
                <input required name="email" class="form-control g-color-black g-brd-left-none g-brd-white g-bg-transparent g-color-white g-placeholder-white g-pl-0 g-pr-15 g-py-13" type="email" placeholder="Email">
              </div>
            </div>

            <div class="g-mb-40">
              <div class="input-group rounded">
                <span class="input-group-addon g-width-45 g-brd-white g-color-white">
                      <i class="icon-communication-062 u-line-icon-pro"></i>
                    </span>
                <input required name="password" class="form-control g-color-black g-brd-left-none g-brd-white g-bg-transparent g-color-white g-placeholder-white g-pl-0 g-pr-15 g-py-13" type="password" placeholder="Password">
              </div>
            </div>

            <div class="g-mb-40" style="visibility: hidden;margin-top: 3.6rem;">
              <div class="input-group rounded">
              </div>
            </div>

            <div class="g-mb-60">
              <button class="btn btn-md btn-block u-btn-primary rounded text-uppercase g-py-13" type="submit">Login</button>
            </div>
          </form>
          <!-- End Form -->
        </div>
      </div>

      <div class="col-lg-5 g-bg-white g-rounded-right-5--lg-up">
        <div class="g-pa-50">
          <!-- Form -->
          <form id="signupForm" action="" class="g-py-15" method="post" onsubmit="return validateSignupForm();">
          	<input type="hidden" name="form" value="signup">
            <h2 class="h3 g-color-black mb-4">Signup</h2>
            <div class="mb-4">
              <div class="input-group rounded">
                <span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
                      <i class="icon-communication-128 u-line-icon-pro"></i>
                    </span>
                <input required name="fname" class="form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13" type="text" placeholder="First name">
              </div>
            </div>

            <div class="mb-4">
              <div class="input-group rounded">
                <span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
                      <i class="icon-finance-067 u-line-icon-pro"></i>
                    </span>
                <input required name="lname" class="form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13" type="text" placeholder="Surname">
              </div>
            </div>

            <div class="mb-4">
              <div class="input-group rounded">
                <span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
                      <i class="icon-communication-062 u-line-icon-pro"></i>
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
                      <i class="icon-media-094 u-line-icon-pro"></i>
                    </span>
                <input id="signup-password" required name="password" class="form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13" type="password" placeholder="Password">
              </div>
                <small class="text-danger" id="signup-password-error"></small>
            </div>

            <button class="btn btn-md btn-block u-btn-primary rounded text-uppercase g-py-13" type="submit">Signup</button>
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