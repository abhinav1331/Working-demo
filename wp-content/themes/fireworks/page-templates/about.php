<?php 
/* template name: About Us */

get_header();
?>
<div class="main-section">
  <div class="container">
    <div class="row home disp-table">
      <div class="col-lg-3 disp-cell ver-top">
        <?php print categories_list(); ?>
        <!-- end of menu section div --> 
      </div>
      <!-- end of col-lg-3 div -->
      <div class="col-lg-9 disp-cell ver-top">
        <div class="about-content">
          <div class="main-title">
            <h1><?php the_title(); ?></h1>
          </div>
          <!-- end of main title div -->
          <blockquote>
            <div class="block-left" style="background: url(<?php the_field('section_1_image'); ?>) no-repeat;"> 
              <!-- <img src="<?php  bloginfo('stylesheet_directory'); ?>/images/about-quote.jpg" alt="img" class="img-responsive">--> 
            </div>
            <div class="block-right">
              <?php the_field('section_1_description'); ?>
            </div>
          </blockquote>
          <div class="about-issue">
            <h3><?php the_field('section_2_heading'); ?></h3>
            <div class="clearfix">
              <div class="about-icon"> <img src="<?php  bloginfo('stylesheet_directory'); ?>/images/pricing-tag.png" alt="pricing-tag"  /> </div>
              <div class="icon-detail">
                <?php the_field('section_2_part_1'); ?>
              </div>
              <!-- end of col-lg-11 div -->
              <div class="about-icon"> <img src="<?php  bloginfo('stylesheet_directory'); ?>/images/bulk-icon.png" alt="bulk-icon" /> </div>
              <div class="icon-detail">
                <?php the_field('section_2_part_2'); ?>
              </div>
              <!-- end of col-lg-11 div --> 
            </div>
            <!-- end of row div --> 
          </div>
          <!-- end of pricing issues --> 
        </div>
        <!-- end of about content div --> 
      </div>
      <!-- end of col-lg-9 div --> 
    </div>
  </div>
</div>

<?php
get_footer();
?>