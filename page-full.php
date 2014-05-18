<?php

/*
	Template Name: Full Page, No Sidebar
*/ 

get_header();  ?>

<section>
  <div class="innerWrapper">
    <div class="centerContent">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /.centerContent -->
  </div> <!-- /.innerWrapper -->
</section>
<?php get_footer(); ?>