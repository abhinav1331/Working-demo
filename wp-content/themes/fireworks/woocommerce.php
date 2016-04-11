<?php
session_start();
 get_header();
 
 
  ?>
 <?php  $_SESSION['organisation1']=$_REQUEST['organisation'] ?>
<div class="main-section">
  <div class="container">
    <div class="row home disp-table">
      <div class="col-lg-3 disp-cell ver-top">
        <div class="menu-section">
          <div class="menus-inner">
            <div class="menu-title">
              <h3>CATEGORY</h3>
              <div class="title-bars"> <span class="icon"></span> <span class="icon"></span> <span class="icon"></span> </div>
            </div>
            <!-- end of menu title div -->
            <ul id="accordion" class="accordion main-accr">
            
             <?php
                global $post;
                $slug = '';
                foreach( $wpdb->get_results("select a.*,b.* from fireworks_term_taxonomy as a inner join fireworks_terms as b on a.term_id=b.term_id where a.taxonomy='product_cat' ") as $key => $cat_row)
                {
                $term_id = $cat_row->term_id;
                $cname = $cat_row->name;
                $slug = $cat_row->slug;
				$description=$cat_row->description;
                $term_taxonomy_id= $cat_row->term_taxonomy_id;
                ?>
            
             <li>
              <div class="link"><a href="/dev/product-category/<?php echo $slug ?>/?slug=<?php echo $slug ?>"><?php echo $cname; ?></a></div>
              </li>
              
              <?php } ?>
            </ul>
            <!-- end of cat list --> 
          </div>
          <!-- end of menu inner div --> 
        </div>
        <!-- end of menu section div --> 
      </div>
      <!-- end of col-lg-3 div -->
     
          
       <div class="col-lg-9 disp-cell ver-top">
        <div class="about-content">
          <div class="main-title">
            <h1><?php //the_title(); ?></h1>
          </div>
          <div class="productHolder">
          	<div class="product-list-container">
            	      
			 <?php woocommerce_content(); ?>
            </div>
            	<!-- end of produxt list div -->
          </div>
          	<!-- end of productHolder div -->
      </div>
      <!-- end of col-lg-9 div --> 
    </div>
    
	
  </div>
</div>
</div>

      
<?php  get_footer(); ?>
		  
          
          