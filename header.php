<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="container clearfix">
    <h1>
      <a href="<?php echo home_url( '/' ); ?>"title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
        <img src="<?php echo get_template_directory_uri(); ?>/images/GJlogo.png" style="width:100px;">
      </a>
    </h1>

    <?php wp_nav_menu( array(
      'container' => false,
      'theme_locations' => 'primary'
    )); ?>
  </div> <!-- /.container -->
</header><!--/.header-->

