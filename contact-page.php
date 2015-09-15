<?php

/*
	Template Name: Contact Page, No Sidebar
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
      	<?php the_field("block_text"); ?>
      </div>
      <div class="main-content clearfix">
      	<div class="main-content_container contact-form">
      		<?php// the_title(); ?>
      		<?php the_content(); ?>
          <?php the_field("contact_form"); ?>
      	</div>
      </div>
      
    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>