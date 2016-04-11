<?php
include('wp-load.php');

if(isset($_POST['action']) && $_POST['action'] == "login")
{

	$creds = array();
	$creds['user_login'] = $_POST['firstname'];
	$creds['user_password'] = $_POST['password'];
	$creds['remember'] = true;
		
	$user = wp_signon( $creds, false );				
	if ( is_wp_error($user) )
	{
		
		 print 0;
	}	
	else
	{
	$user_id=$user->ID;
	//echo 'user id='.$user->ID;
	 wp_set_current_user($user->ID);
     $secure_cookie = is_ssl() ? true : false;
		wp_set_auth_cookie( $user_id, true, $secure_cookie );
		
	
		print 1;
	}
}
?>