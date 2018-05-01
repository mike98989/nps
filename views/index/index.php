
    <!-- Promo Block -->
    <section class="" style="display:nne;padding:0 !important;">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="padding:0;">
  <ol class="carousel-indicators" data-interval="10">
    <?php for($b=0; $b<=count($slider); $b++){foreach ($slider as $li){?>
    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $b;?>" class="<?php if($b==0){echo 'active';} $b++;?>"></li>
    <?php }}?>
  </ol>
  <div class="carousel-inner" role="listbox" style="padding:0;height:;overflow:hidden">
    <?php for($a=1; $a<=count($slider); $a++){foreach ($slider as $image_slider){?>

       <div class="carousel-item <?php if($a==1){echo 'active';} $a++;?>">
    <section class="g-bg-cover g-bg-pos-top-center g-bg-img-hero g-bg-black-opacity-0_4--after g-min-height-100vh g-flex-centered g-py-100" style="background-image: url(<?php echo URL.'public/'.$image_slider['path'];?>);">
      <div class="container g-color-white text-center g-z-index-1">
        <div class="mb-5" style="margin-top:100px">
          <h2 class="g-font-weight-700 g-font-size-35 g-font-size-60--md  g-mb-30">
             <?php echo $image_slider['galleryTitle'];?>
            </h2>

        </div>
        <?php if($image_slider['button']!=''){?>
        <a class="js-go-to btn u-btn-outline-white g-color-white g-bg-white-opacity-0_1 g-color-black--hover g-bg-white--hover g-font-weight-600  g-rounded-50 g-px-30 g-py-13 animated u-animation-was-fired undefined" href="<?php echo URL.$image_slider['button'];?>" data-target="#content" style="display: inline-block;margin-top:150px"><?php if($image_slider['button']=='recruit'){echo "Apply Now!";}else{echo "Learn more";}?></a>
        <?php }?>
      </div>
    </section>
    </div>
    <?php }}?>



  </div>

  <a class="carousel-control-prev" href="#carouselExampleIndicators" style="display:none" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators"  style="display:none" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

</div>

    </section>

    <section class="g-py-100">
      <div class="container">
        <header class="text-center g-width-60x--md mx-auto g-mb-30">
          <div class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
            <h2 class="h3 u-heading-v2__title g-color-gray-dark-v2 text-uppercase g-font-weight-600" style="">Latest News</h2>
          </div>

        </header>


            <div class="col-lg-12" style="margin:0 auto;float:none">
                 <div class="row">

          <?php foreach ($all_news as $news){?>        
          <div class="col-lg-4 g-mb-30 g-mb-0--lg" style="margin-bottom:5px">
            <!-- Article -->
            <article class="u-block-hover">
              <figure class="g-bg-cover g-bg-bluegray-opacity-0_3--after" style="padding:0">
                <img class="img-fluid w-100 u-block-hover__main--zoom-v1" src="<?php echo URL.'public/'.$news['picture'];?>" alt="Image">
              </figure>


              <div class="g-pos-abs g-bottom-20 g-left-20 g-right-20" style="padding:0">

                <h5 class="h5 g-mt-10">
                    <a class="g-color-white g-color-white--hover" href="<?php echo URL.'news?id='.$news['link'];?>"><?php echo $news['newsTitle'];?></a>
                  </h5>

                <hr class="g-brd-white-opacity-0_4 g-my-10">
                  <p style="color:#fff;padding-top:3px;padding-bottom:2px">
                  <?php echo strip_tags(substr($news['Details'], 0, 180));?> ...
                  </p>
                <span class="g-mr-5">
                    <a class="btn btn-xs u-btn-yellow rounded-0" href="<?php echo URL.'news?id='.$news['link'];?>" style="background:#859b09;color:#fff">Read More</a>
                  </span>

              </div>
            </article>
            <!-- End Article -->
          </div>
          <?php }?>

         


        </div>
          </div>
      </div>
    </section>
    <!-- End Latest News -->

    <!-- Icon Blocks -->
    <div class="row no-gutters g-brd-bottom--lg g-brd-gray-light-v4">
      <div class="col-lg-3 g-pa-60">
        <!-- Icon Blocks -->
        <div class="text-center">
          <span class="d-inline-block u-icon-v3 u-icon-size--xl g-font-size-36 g-bg-primary g-color-white rounded-circle g-mb-20">
              <i class="fa fa-cog"></i>
            </span>
          <h3 class="h4 g-color-gray-dark-v2 mb-3">History of NPS</h3>
          <p class="mb-0">The origin of modern Prisons Service in Nigeria is 1861. That was the year when conceptually, Western-type prison was established in Nigeria. The declaration of Lagos as a colony in 1861 marked the beginning of the institution of formal machinery of governance.</p>
          <a href="<?php echo URL;?>history_of_nps" class="btn btn-success btn-xs">Read more</a>
        </div>
        <!-- End Icon Blocks -->
      </div>

      <div class="col-lg-3 g-brd-left--lg g-brd-gray-light-v4 g-pa-60">
        <!-- Icon Blocks -->
        <div class="text-center">
          <span class="d-inline-block u-icon-v3 u-icon-size--xl g-font-size-36 g-bg-primary g-color-white rounded-circle g-mb-20">
              <i class="fa fa-star"></i>
            </span>
          <h3 class="h4 g-color-gray-dark-v2 mb-3">Roll Of Honours</h3>
          <p class="mb-0">From its inception to date, the Nigerian Prisons Service has had 20 heads. The first seven Directors of Prisons (as the office was then termed) had British nationality.</p>
          <a href="<?php echo URL;?>roll_of_honours" class="btn btn-success btn-xs">Read more</a>
        </div>
        <!-- End Icon Blocks -->
      </div>

      <div class="col-lg-3 g-brd-left--lg g-brd-gray-light-v4 g-pa-60">
        <!-- Icon Blocks -->
        <div class="text-center">
          <span class="d-inline-block u-icon-v3 u-icon-size--xl g-font-size-36 g-bg-primary g-color-white rounded-circle g-mb-20">
              <i class="fa fa-refresh"></i>
            </span>
          <h3 class="h4 g-color-gray-dark-v2 mb-3">Mission/Vision</h3>
          <p class="mb-0">Our intention is to establish a credible Prisons Service which through excellent penal practice seek lasting change in offender’s attitudes, values and behaviour and ensure successful reintegration into the society.</p>
          <a href="<?php echo URL;?>mission_vision" class="btn btn-success btn-xs">Read more</a>
        </div>
        <!-- End Icon Blocks -->
      </div>


        <div class="col-lg-3 g-brd-left--lg g-brd-gray-light-v4 g-pa-60">
        <!-- Icon Blocks -->
        <div class="text-center">
          <span class="d-inline-block u-icon-v3 u-icon-size--xl g-font-size-36 g-bg-primary g-color-white rounded-circle g-mb-20">
              <i class="fa fa-thumbs-up"></i>
            </span>
          <h3 class="h4 g-color-gray-dark-v2 mb-3">Nigerian Prison Today
</h3>
          <p class="mb-0">The abolition of Native Authority prisons in 1968 and the subsequent unification of the Prisons Service in Nigeria therefore marked the beginning of Nigerian Prisons Service as a composite reality.</p>
          <a href="<?php echo URL;?>history_of_nps#prison_today" class="btn btn-success btn-xs">Read more</a>
        </div>
        <!-- End Icon Blocks -->
      </div>
    </div>
    <!-- End Icon Blocks -->
    <!-- About Us -->
    <section class="g-py-100">
      <div class="container">
        <header class="text-center g-width-60x--md mx-auto g-mb-60">
          <div class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
            <h2 class="h3 u-heading-v2__title g-color-gray-dark-v2 text-uppercase g-font-weight-600">The Admin. Structure</h2>
          </div>

        </header>

        <div class="row">

            <div class="col-lg-5 g-mb-30 g-mb-0--lg">
            <!-- Article -->
            <article class="u-block-hover">
              <figure class="g-bg-cover g-bg-bluegray-opacity-0_9--after">
                <img class="img-fluid w-100 u-block-hover__main--zoom-v1" src="<?php echo URL;?>public/images/keyboard.jpg" alt="Image description">
              </figure>

              <div class="g-pos-abs g-bottom-20 g-left-20 g-right-20">

                <h3 class="h4 g-mt-10" style="color:#fff">
                    It is a lot more easier contacting us! You are sure of getting a response ASAP
                  </h3>

                <hr class="g-brd-white-opacity-0_4 g-my-10">

                <span class="g-mr-5">
                    <a class="btn btn-xs u-btn-yellow rounded-0" href="<?php echo URL;?>contact_us" style="background:#859b09;color:#fff">Contact Us</a>
                  </span>

              </div>
            </article>
            <!-- End Article -->
          </div>


          <div class="col-lg-7 align-self-center g-pl-30--lg g-mb-50 g-mb-0--lg">
            <p class="g-mb-30">At the apex of the NPS sits the Controller-General of the Nigerian Prisons Service. He is the Chief Executive Officer and is responsible for the formulations and implementation of penal policies in Nigeria. He is responsible to the President through the Minister of Interior and the Civil Defence, Fire, Immigration and Prisons Services Board which the Minister heads. But in matters of prison policy he takes direct responsibility for policy implementation.
He is assisted by six (6) Deputy Controllers-General (DCGs) who head the six broad administrative divisions called Directorates into which the Service is broken for efficient management. </p>
              <a href="<?php echo URL;?>admin_structure" class="btn btn-sm btn-success">Read More</a>

          </div>
        </div>
      </div>
    </section>
    <!-- End About Us -->



    <!-- Clients -->
    <section>
        <h2 style="text-align:center" class="h3 u-heading-v2__title g-color-gray-dark-v2 g-font-weight-600">External Links</h2>
      <div id="clients" class="" data-autoplay="true" data-lazy-load="ondemand" style="text-align:center;padding-bottom:20px" data-slides-show="6">
<a href="https://login.remita.net/remita/external/NPS/collector/payments.reg" target="_blank">
        <img class="mx-auto g-width-120  slick-loading" src="<?php echo URL;?>public/images/external_remitta.png" alt="NPS Remittal Link">
    </a>

<a href="http://services.gov.ng" target="_blank">
        <img class="mx-auto g-width-120  slick-loading" src="<?php echo URL;?>public/images/coat_of_arms.png" alt="Services Link">
    </a>
          
      </div>
    </section>

  <section>
<h3 style="text-align:center" class="h3 u-heading-v2__title g-color-gray-dark-v2 g-font-weight-600">Remita Revenue Reference Code</h3>
<div class="col-lg-5" style="float:none;margin:0 auto">
<table class="table table-condensed table-striped">
<tr>
<td>#1</td>
<td>SALES OF GOVT. ASSET(VEHICLES)</td>
<td style="font-weight:bold">1000082645</td>
</tr>
<tr>
<td>#2</td>
<td>SALES OF GOVT. ASSET(GOODS)</td>
<td style="font-weight:bold">1000082632</td>
</tr>
<tr>
<td>#3</td>
<td>PRISONS INDUSTRY</td>
<td style="font-weight:bold">1000082593</td>
</tr>
<tr>
<td>#4</td>
<td>PRISONS AGRIC</td>
<td style="font-weight:bold">1000082551</td>
</tr>
<tr>
<td>#5</td>
<td>TENDER FEE</td>
<td style="font-weight:bold">1000082548</td>
</tr>
<tr>
<td>#6</td>
<td>CONTRACT AGREEMENT FEE</td>
<td style="font-weight:bold">1000082522</td>
</tr>
</table>
</div>

  </section>
