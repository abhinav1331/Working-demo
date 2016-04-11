<?php 
/* template name: Login */

get_header();
?>
<div class="main-section">
<div class="container text-center">
<div class="log-in-wrapper">
  <form class="common-form" id="loginform">
  	<div class="form-title">
    <h2>LOGIN</h2>
    </div>
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" name="firstname" id="firstname" class="form-control" />
    </div>
    <!-- end of form group div -->
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="password" id="password" class="form-control" />
    </div>
    <!-- end of form group div -->
    <div class="subm-box">
    <a href="#" title="forget password"><i>Forgot password</i></a>
    <input type="submit" value="LOGIN" id="login" />
    <div id="loading"></div>
    <div id="loginresult"></div>
    <p><span>Not a user?</span> Create an <a href="#">account here.</a></p>
    </div>
        <!-- end of sub-box div -->
  </form>
</div>
<!-- end of login section-->
  </div>
</div>
<link rel="stylesheet" href="<?php  bloginfo('stylesheet_directory'); ?>/css/screen.css">
<script src="<?php  bloginfo('stylesheet_directory'); ?>/js/jquery.validate.js"></script>
<script>
	jQuery().ready(function() {
		
		jQuery("#loginform").validate(
		{
			rules: 
			{
				firstname: "required",
				password: "required"
			},
			
			submitHandler: function() 
			{
				jQuery('#loading').html('<i class="fa fa-spinner fa-spin"></i>');
				var firstname=$('#firstname').val();											
				var password=$('#password').val();											
				var values="firstname="+firstname+"&password="+password+"&action=login";
						 
				$.ajax({
						type:"post",
						url:"<?php echo site_url(); ?>/custom_ajax.php",
						data:values,
						success:function(data)
							{
								
								 jQuery('#loading').html(' ');
								if(data == "1")
								{
									jQuery('#loginresult').html('login Sucessfull!');
									location.reload(); 
									
								}
								else
								{
									jQuery('#loginresult').html('Username/Password is incorrect!');
								}
								
							}
												 
					});
			}
		});

		
	});
	</script>
<?php
get_footer();
?>