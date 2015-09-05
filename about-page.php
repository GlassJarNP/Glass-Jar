<?php

/*
	Template Name: About Page, No Sidebar
*/

get_header();  ?>


<div class="main">
  <div class="container">

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	  <div class="large-logo_container">
	  	<div class="large-logo">
	  		<?php the_post_thumbnail('medium'); ?>
	  	</div>	
	  </div> <!-- /. large-logo_container-->
      <div class="block-text skin-red">
      	<?php the_field("about_block"); ?>
      </div>
      <div class="main-content">
      	<div class="main-content_wrapper">
      		<?php the_title(); ?>
	      	<div>
	      		<img src="<?php the_field( 'step_1_img' ); ?>" />
	      		<?php the_field('step_1'); ?>
	      	</div>	
	      	<div>
	      		<img src="<?php the_field( 'step_2_img' ); ?>" />
	      		<?php the_field('step_2'); ?>
	      	</div>	
	      	<div>
	      		<img src="<?php the_field( 'step_3_img' ); ?>" />
	      		<?php the_field('step_3'); ?>
	      	</div>
	      	<?php the_content(); ?>		
      	</div>
      </div>

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>