<?php

/*
	Template Name: CustomScrollExe
*/ 

get_header();  ?>

<section>
  <div class="innerWrapper">
    <div class="full welcome">
      <?php // Start the loop for the default page?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- end of .full .welcome -->
     <!-- _____________________________________________________________________________________________________________________
                About Section Starts
    ______________________________________________________________________________________________________________________ -->

    <?php $about = new WP_Query(array(
        'post_type' => 'page',
        'page_id' => 2
      )); ?>

      <?php if($about->have_posts()) while($about->have_posts()) :$about->the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

        <h3><?php the_field('tag_line'); ?></h3>
      <?php endwhile; ?>

    <!-- _____________________________________________________________________________________________________________________
                END OF ABOUT SECTION
    ______________________________________________________________________________________________________________________ -->

  </div> <!-- /.innerWrapper -->
</section>
<?php get_footer(); ?>