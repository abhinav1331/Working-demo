<?php 
/* template name: Contact Us */

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
          <div class="contact-section">
          	<p>Please send us a message. <span>We will get back to you within 24 hours. </span>We promise!</p>
              <div class="row">
                <div class="col-lg-6">
					<?php print do_shortcode('[contact-form-7 id="49" title="Contact us"]'); ?>
                </div>
                <!-- end of col-lg-6 div -->
                <div class="col-lg-6">
                	<ul class="contat-list">
                    	<li>
                        	<i class="fa fa-envelope-o"></i>
                            <a href="mailto:<?php the_field('email-id'); ?>"><?php the_field('email-id'); ?></a>
                        </li>
                        <li>
                        	<i class="fa fa-phone"></i>
                            <a href="tel:<?php the_field('phone_number'); ?>"><?php the_field('phone_number'); ?></a>
                        </li>
                        <li>
                        	<i class="fa fa-map-marker"></i>
                           <?php the_field('address'); ?>
                        </li>
                    </ul>
                    	<!-- end of contact list div -->
                </div>
                <!-- end of col-lg-6 div --> 
              </div>
              <!-- end of row div -->            
          </div>
          <!-- end of contact section div --> 
        </div>
        <!-- end of about content div --> 
      </div>
      <!-- end of col-lg-9 div --> 
    </div>
  </div>
</div>
<script>
	    jQuery(function() {
			
				jQuery('form').addClass('common-form');
			
		});
</script>

<?php
get_footer();
?>