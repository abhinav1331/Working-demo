<?php
session_start();
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>


		
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
          <div class="blog-Holder">
				<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

		

		?>
          		<div class="blog-post">
                	<div class="blog-title">
                    	
                    </div>
					<?php the_content(); ?>
                    
                </div>
                	<!-- end of blog post div -->
                <div class="clearfix"></div>
				  <?php endwhile; 
                    
                      wp_reset_postdata();
					 ?>
                
                	<!-- end of blog post div -->
          </div>
          	<!-- end of blog holder div -->
      </div>
      <!-- end of col-lg-9 div --> 
    </div>
  </div>
</div>
</div>

<?php get_footer(); ?>
