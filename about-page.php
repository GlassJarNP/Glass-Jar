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
	      		<?php the_field('step_1'); ?>
	      		<?php the_field('step_1_img'); ?>
	      	</div>	
	      	<div>
	      		<?php the_field('setp_2'); ?>
	      		<?php the_field('setp_2_img'); ?>
	      	</div>	
	      	<div>
	      		<?php the_field('setp_3'); ?>
	      		<?php the_field('setp_3_img'); ?>
	      	</div>		
      	</div>
      </div>
      
    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>