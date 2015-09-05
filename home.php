<?php

/*
	Template Name: Home Page, No Sidebar
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
        <img src="<?php the_field( 'hero_image_give' ); ?>" />
        <h2><?php the_field("hero_give"); ?></h2>
    </div>
    <div class="main-content">
        <img src="<?php the_field( 'hero_image_get' ); ?>" />
        <h2><?php the_field("hero_get"); ?></h2>       
    </div>  
    <div class="block-text skin-blue">
      <?php the_field("block_text"); ?>
    </div>
    <div class="main-content">
    	<div class="main-content_wrapper">
        <?php the_field("get_scholarship"); ?> 
    	</div>
    </div>
    <div class="block-text skin-red">
      <?php the_field("block_text_2"); ?>
    </div>
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