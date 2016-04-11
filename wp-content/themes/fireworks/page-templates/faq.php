<?php 
/* template name: FAQ */

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
                   <h1>FAQ</h1>
                 </div>
                 <div class="faq-section">
                 	<ul id="accordion-faq" class="accordion">
					<?php
                $args = array( 'post_type' => 'faq','orderby' => 'post_date','order'=> 'ASC','posts_per_page' => -1,		
				 'post_status'=>'publish' );
                		$query = new WP_Query($args);
                          if ($query->have_posts()) : ?>
		              <?php while ($query->have_posts()) : $query->the_post();
                      $id=get_the_ID();
                      ?>
                      <li>
						  <div class="links"><h3><?php the_title(); ?></h3>
							<i class="shw-ans">Show Answer</i><i class="hideans">Hide Answer</i>
						  </div>
						  <ul class="submenus">
							  <li>
							  <?php the_content(); ?>
							  </li>
                          </ul>
                      </li>
					    <?php endwhile; endif; ?>
						<?php wp_reset_query(); ?>
                      
                    </ul>
                 </div>
                 	<!-- end of main title div --> 
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