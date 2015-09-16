<?php

/*
	Template Name: About Page, No Sidebar
*/

get_header();  ?>


<div class="main">
  <div class="container">

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	  <div class="large-logo_container clearfix">
	  	<div class="large-logo">
	  		<?php the_post_thumbnail('medium'); ?>
	  	</div>	
	  </div> <!-- /. large-logo_container-->
      <div class="block-text skin-red">
      	<?php the_field("about_block"); ?>
      </div>
      <div class="main-content clearfix">
      	<div class="main-content_container about-content">
      		<h2><?php the_title(); ?></h2>
	      	<div class="about-steps">
	      		<img src="<?php the_field( 'step_1_img' ); ?>" />
	      		<p><?php the_field('step_1'); ?></p>
	      	</div>	
	      	<div class="about-steps">
	      		<img src="<?php the_field( 'step_2_img' ); ?>" />
	      		<p><?php the_field('step_2'); ?></p>
	      	</div>	
	      	<div class="about-steps">
	      		<img src="<?php the_field( 'step_3_img' ); ?>" />
	      		<p><?php the_field('step_3'); ?></p>
	      	</div>
	      	<div class="main-content-about">
	      		<h3><?php the_content(); ?></h3>
	      	</div>	
      	</div>
      </div>

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>