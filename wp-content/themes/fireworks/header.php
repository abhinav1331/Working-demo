<!DOCTYPE html>
<?php session_start(); ?>
<html <?php language_attributes();?>>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php  if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
<!-- Bootstrap -->
<link rel="shortcut icon" href="<?php  bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/x-icon">
<link href="<?php  bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php  bloginfo('stylesheet_directory'); ?>/css/animate.css" rel="stylesheet" type="text/css"/>
<link href="<?php  bloginfo('stylesheet_directory'); ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="<?php  bloginfo('stylesheet_directory'); ?>/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php  bloginfo('stylesheet_directory'); ?>/css/bootstrap-select.min.css" rel="stylesheet" type="text/css" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>
<body>

<header>
  <div class="top-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 header-email"> <a href="mailto:<?php echo get_option('email');?>"><i class="fa fa-envelope-o"></i> <?php echo get_option('email');?></a> </div>
        <!-- end of col-lg-3 div -->
        <div class="col-lg-9 col-sm-9 col-md-9 col-xs-12">
          <div class="header-social">
            <ul class="list-inline">
              <li><a href='<?php echo get_option('fb');?>' target="_blank"><i class="fa fa-facebook"></i> </a></li>
              <li><a href='<?php echo get_option('twitter');?>'><i class="fa fa-twitter" target="_blank"></i> </a></li>
              <li class="noMargin noPadding"><a href='<?php echo get_option('linkedin');?>' target="_blank"><i class="fa fa-linkedin"></i> </a> </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- end of row div --> 
      
    </div>
  </div>
  <!-- end of top header div -->
  <div class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-3"> <a href="<?php print site_url(); ?>" class="logo"><img src="<?php echo esc_url(get_option('header_logo_image')); ?>" alt="logo"></a> </div>
        <!-- end of col-lg-3 div -->
        <div class="col-lg-9 col-sm-9 col-md-9 col-xs-12 ">
          <nav class="navbar navbar-default header-menus">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <?php       $defaults = array(
                                    'theme_location'  => '',
                                    'menu'            => 'header_menu',
                                    'container'       => '',
                                    'container_class' => '',
                                    'container_id'    => '',
                                    'menu_class'      => '',
                                    'menu_id'         => '',
                                    'echo'            => false,
                                    'fallback_cb'     => ' ',
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'items_wrap'      => '%3$s',
                                    'depth'           => 0,
                                    'walker'          => ''
                                    );

                                    $navigation=wp_nav_menu( $defaults );
                                    print $navigation;   ?>
            </ul>
      <?php /*?><div class="log-in"> <a href="<?php print get_the_permalink('43'); ?>" class="active"><i class="fa fa-sign-in"></i>Login</a></div><?php */?>
            <div class="log-in"> <?php dynamic_sidebar('login');?></div>
          
          </div>
          <!-- end of log-in section -->                 
        </nav>
        </div>
        <!-- /.navbar-collapse -->
      </div>
    </div>
  </div>
  <!-- end of main-header div --> 
</header>





<?php /*?><div class="modal fade" id="overlay">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Select Your Organisation</h4>
      </div>
      <div class="modal-body">
        <form action="" method="get">
        <select>
        
       			 <?php
				$args1 = array(
				 'role' => 'organisation',
				 'orderby' => 'user_nicename',
				 'order' => 'ASC'
				);
				 $organisation = get_users($args1);
				
				 foreach ($organisation as $user) { ?>
				 
				 <option value='<?php echo $user->display_name; ?>'><?php echo $user->display_name; ?></option>
			 <?php } ?>
          
         
        </select>
        <input type="submit" name="submit" value="Submit" />
        </form>
      </div>
    </div>
  </div>
</div><?php */?>
<div class="clearfix"></div>