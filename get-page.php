<?php

/*
	Template Name: Get Page, No Sidebar
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
      <div class="block-text skin-blue">
      	<h2><?php the_field("block_text"); ?><h2>
      </div>
      <div class="main-content clearfix">
      	<div class="main-content_container get-form">
      		<?php the_content(); ?>
      	</div>
      </div>
      
    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>