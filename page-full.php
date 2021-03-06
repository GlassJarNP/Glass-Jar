<?php

/*
	Template Name: Full Page, No Sidebar
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
      <div class="main-content">
      	<div class="main-content_wrapper">
      		<?php the_title(); ?>
      		<?php the_content(); ?>
      	</div>
      </div>
      
    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>