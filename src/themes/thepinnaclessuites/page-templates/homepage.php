<?php
/**
 * Template Name: Home
 *
 * @package understrap
 */

get_header(); ?>

<div id="landing-page" class="">

  <section class="howAndWho">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 howAndWho__mainBlurb text-center text-lg-left">
          <p class="callOut">We help you accomplish your real estate investment and homeownership goals by providing safe and secure&nbsp;solutions.</p>
          <p class="mb-4">At Sandhill Properties, our philosophy is to create long term relationships where all parties benefit. Learn more about our programs and how they can help&nbsp;you.</p>
          <a class="btn btn-secondary mb-5 mb-lg-0">How does it&nbsp;work?</a>
        </div>
        <div class="col-lg-4 col-md-6 d-flex justify-content-center justify-content-md-end">
          <div class="howAndWho__forWho" id="forRenters">
            <h2 class="text-center text-md-left">For Renters</h2>
            <img src="<?php bloginfo('template_url'); ?>/images/index-renters.jpg" alt="A father and mother embracing their child">
            <div class="howAndWho__infoBlock">
              <p>The path to home ownership is rent-to-own</p>
              <a href="#">Learn More <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 d-flex justify-content-center justify-content-md-end">
          <div class="howAndWho__forWho" id="forInvestors">
            <h2 class="text-center text-md-left mt-4 mt-md-0">For Investors</h2>
            <img src="<?php bloginfo('template_url'); ?>/images/index-investors.jpg" alt="A potential investor">
            <div class="howAndWho__infoBlock">
             <p>Real estate investments that make sense</p>
             <a href="#">Learn More <i class="fas fa-arrow-circle-right"></i></a>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section><!-- /howAndWho -->

 <section class="meetDon">
  <div class="container">
    <div class="row justify-content-between align-items-center pt-5 pt-sm-4 pt-lg-0">
      <div class="col-md-6 order-md-1 text-center text-md-left meeting__text">
        <h2 class="text-white">Meet Don Cecile</h2>
        <p>The concept of rent-to-own was reborn through Don&#039;s inspiration and desire to find a way to help clients succeed at investing in real estate safely and at the same time helping others become home&nbsp;owners.</p>
        <a class="btn btn-primary mt-2" href="#">Meet the <span class="d-none d-sm-inline">Sandhill Properties</span> Team</a>
      </div>
      <div class="col-md-6 meeting__photo">
       <img src="<?php bloginfo('template_url'); ?>/images/index-doncecile.jpg" alt="Don Cecile" class="img-fluid">
     </div>
   </div>
 </div>
</section><!-- /meetDon -->

</div><!-- #landing-page -->

<?php get_footer();
