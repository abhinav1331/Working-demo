<?php 
/* template name: Blog */

get_header();
?>
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
      <!-- end of col-lg-3 div -->
      <div class="col-lg-9 disp-cell ver-top">
        <div class="about-content">
          <div class="main-title">
            <h1><?php the_title(); ?></h1>
          </div>
          <div class="blog-Holder">
				<?php
                         global $paged;
                            $curpage = (get_query_var('paged')) ? get_query_var('paged') : 1;
        
                            //$curpage = $paged ? $paged : 1;
                            $args = array( 'post_type' => 'post','orderby' => 'post_date', 'order' => 'ASC', 'posts_per_page' => 2, 'paged' => $paged );
                            $query = new WP_Query($args); 
							 if ($query->have_posts()) : ?>
                              <?php while ($query->have_posts()) : $query->the_post(); 
							   $thumb_id = get_post_thumbnail_id(get_the_ID());
                                 $thumb_url = wp_get_attachment_image_src($thumb_id, 'large', true);
							  ?>
          		<div class="blog-post">
                	<div class="blog-title">
                    	<h3><?php the_title(); ?></h3>
                    </div>
                    <div class="blog-post-left">                    
                       <a href="<?php print the_permalink(); ?>" ><img src="<?php print $thumb_url[0]; ?>" alt="blog-post" class="img-responsive" /></a>
                    </div>                	
                    	<!-- end of blog post div -->
                    <div class="blog-post-right">
                    	<ul class="posted-by list-inline">		
                        	<li><i class="fa fa-clock-o"></i> <?php the_time('F j , Y'); ?></li>
                            <li><i class="fa fa-user"></i> <?php the_author(); ?></li>
                            <li><i class="fa fa-comment"></i>Comments <?php $comments_count = wp_count_comments(); ?>
					<?php $num_comments = get_comments_number($id); // get_comments_number returns only a numeric value

											if ( comments_open() ) {
												if ( $num_comments == 0 ) {
													$comments = __('0');
												} elseif ( $num_comments > 1 ) {
													$comments = $num_comments . __('');
												} else {
													$comments = __('1');
												}
												echo $write_comments = '<a href="' . get_comments_link() .'">'. $comments.'</a>';
											} ?></li>                        
                        </ul>
                      <?php the_excerpt(); ?> 
                      <a href="<?php print the_permalink(); ?>" title="resdmore">Read more</a>                      
                    </div>                	
                    	<!-- end of blog post div -->
                    <div class="social-bar">
                      	<?php echo do_shortcode('[addtoany]'); ?>
                      </div>
                </div>
                	<!-- end of blog post div -->
                <div class="clearfix"></div>
				  <?php endwhile; ?>
                     <?php endif; ?>
                       <?php
                     echo '<div class="blogPager">';
                     echo '<ul> ';
					 if( $curpage-1 >= 1){
					 echo '	<li><a   href="'.get_pagenum_link(($curpage-1 > 0 ? $curpage-1 : 1)).'"  >&lt; Previous</a></li>';
					 }

								for($i=1;$i<=$query->max_num_pages;$i++){
									if($query->max_num_pages >= "2")
									{
									echo '<li><a class="'.($i == $curpage ? 'active ' : '').'page button" href="'.
									get_pagenum_link($i).'">'.$i.'</a></li>';
									}

									}

						 if( $query->max_num_pages  >$curpage  ){
								echo '<li> <a   href="'.get_pagenum_link(($curpage+1 <= $query->max_num_pages ? $curpage+1 :
								 $query->max_num_pages)).'">Next &gt;</a></li>';
						 	}
                          	echo '</ul> ';
						 echo '</div> ';
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

<?php
get_footer();
?>