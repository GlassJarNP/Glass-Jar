<?php

/*
	Template Name: Give Page, No Sidebar
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
    <div class="hero clearfix">
      <div class="hero_container">
        <div class="jars give">
            <img src="<?php the_field( 'hero_image_give' ); ?>" />
            <div>
              <?php the_field("hero_give"); ?>
            </div>
        </div>
        <div class="jars get">
            <img src="<?php the_field( 'hero_image_get' ); ?>" />
            <div>
               <?php the_field("hero_get"); ?>
            </div>        
        </div>
      </div> <!-- /.hero-wrapper -->   
    </div><!-- /.hero imgs -->    
    <div class="block-text skin-blue" id="get">
      <?php the_field("block_text"); ?>
    </div>
    <div class="main-content clearfix" >
      <div class="main-content_container get-content">
        <div class="get-content_copy">
          <?php the_field("get_scholarship"); ?> 
        </div>
        <a href="<?php echo home_url( '/?page_id=6' ); ?>"><button class="button">Get Started</button></a>
      </div>
    </div>
    <div class="block-text skin-red">
      <?php the_field("block_text_2"); ?>
    </div>
    <div class="main-content clearfix" id="give">
      <div class="main-content_container give-content">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
      </div>
    </div>

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>