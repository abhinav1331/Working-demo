<?php
/**
 * The template for displaying all single posts and attachments
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
        <ul class="archive-list">
        	<li class="heading">Archive</li>
            <li><a href="#">November 2016</a></li>
            <li><a href="#">July 2016</a></li>
            <li><a href="#">June 2016</a></li>            
        </ul>
        	<!-- end of archive list div -->
      </div>
	  <div class="col-lg-9 disp-cell ver-top">
        <div class="about-content">
          <div class="main-title">
            <h1><?php the_title(); ?></h1>
          </div>
          <div class="blog-Holder">
		  <?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'content', get_post_format() );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			// Previous/next post navigation.
			// the_post_navigation( array(
				// 'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
					// '<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
					// '<span class="post-title">%title</span>',
				// 'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
					// '<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
					// '<span class="post-title">%title</span>',
			// ) );

		// End the loop.
		endwhile;
		?>
				
                
                	<!-- end of blog post div -->
          </div>
          	<!-- end of blog holder div -->
      </div>
      <!-- end of col-lg-9 div --> 
    </div>
  </div>
		

		
	</div><!-- .content-area -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
