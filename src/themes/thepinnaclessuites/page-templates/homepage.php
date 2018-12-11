<?php
/**
 * Template Name: Home
 *
 * @package understrap
 */

get_header(); ?>

<div id="landing-page" class="">

  <section class="section howAndWho">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 howAndWho__mainBlurb text-center text-lg-left">
          <p class="lead">We help you accomplish your real estate investment and homeownership goals by providing safe and secure&nbsp;solutions.</p>
          <p class="mb-4">At Sandhill Properties, our philosophy is to create long term relationships where all parties benefit. Learn more about our programs and how they can help&nbsp;you.</p>
          <a href="<?php bloginfo('url'); ?>/what-is-rent-to-own" class="btn btn-dark btn-lg mb-5 mb-lg-0">How does it&nbsp;work?</a>
        </div>
        <div class="col-lg-4 col-md-6 d-flex justify-content-center justify-content-md-end">
            <?php get_template_part('includes/cta', 'buyer'); ?>
        </div>
        <div class="col-lg-4 col-md-6 d-flex justify-content-center justify-content-md-end">
            <?php get_template_part('includes/cta', 'investor'); ?>
       </div>
     </div>
   </div>
 </section><!-- /howAndWho -->

 <section class="meetDon">
  <div class="container">
    <div class="row justify-content-between align-items-end align-items-lg-center">
      <div class="col-md-5 col-lg-6 order-md-1 text-center text-md-left">

	      <div class="meetDon--content">
		      <h2 class="text-white">Meet Don Cecile</h2>
		      <p>The concept of rent-to-own was reborn through Don&#039;s inspiration and desire to find a way to help clients succeed at investing in real estate safely and at the same time helping others become home&nbsp;owners.</p>
		      <a class="btn btn-light btn-lg mt-2" href="<?php bloginfo('url'); ?>/about-us">Learn More</a>
	      </div>

      </div>
      <div class="col-md-7 col-lg-6 meeting__photo">
       <img src="<?php bloginfo('template_url'); ?>/images/index-doncecile.jpg" alt="Don Cecile" class="img-fluid">
     </div>
   </div>
 </div>
</section><!-- /meetDon -->

</div><!-- #landing-page -->

<?php get_footer();
