<?php 
/* template name: Home */


get_header();

?>
<div class="main-section">
  <div class="container">
    <div class="row home disp-table">
      <div class="col-lg-3 disp-cell ver-middle">
			<?php print categories_list(); ?>
        <!-- end of menu section div --> 
      </div>
      <!-- end of col-lg-3 div -->
      <div class="col-lg-9 disp-cell text-center ver-middle">
        <div class="home-content">
          <h1>New Year <span class="orange">Packages</span></h1>
          <h3>Are now available !</h3>
          <p>Have you ever bought a firework and been disappointed when you got home and set it off?  With our videos, you not only read about the fireworks with our description</p>
          <div class="home-search">
            <?php echo $_SESSION['organisation']=$_REQUEST['organisation']?>
           
        <form action="<?php echo site_url(); ?>/shop/" method="get">
         <select class="selectpicker hm-search dropup" name="organisation">
        
       			 <?php
				$args1 = array(
				 'role' => 'organisation',
				 'orderby' => 'user_nicename',
				 'order' => 'ASC'
				);
				 $organisation = get_users($args1);
				
				 foreach ($organisation as $user) { ?>
				 
				 <option  value='<?php echo $user->display_name; ?>'><?php echo $user->display_name; ?></option>
			 <?php } ?>
          	<option  value='Other'>Other</option>
         
        </select>
        <input type="submit" name="submit" value="Shop Now" />
        </form>
            <!-- end of home shop div --> 
          </div>
          <!-- end of home search div --> 
          
        </div>
        <!-- end of home content div --> 
      </div>
      <!-- end of col-lg-9 div --> 
    </div>
  </div>
</div>
<!-- end of main section div -->


<?php get_footer(); ?>