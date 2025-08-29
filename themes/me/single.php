<?php get_header(); ?>

<main class="main-box lg:py-16 py-10 bg-white">
    <?php if (have_posts()) {
      while(have_posts()) {
        the_post(); ?>
        <div class="wrapper">
          <div class="text-center">
            <h2 class="text-center lg:text-h2 md:text-h4 text-h5 lg:my-4 my-0"><?php the_title(); ?></h2>
            <span> <?php echo get_the_date() . ' by ' . get_the_author(); ?> </span>
          </div>
        </div>
        <div class="lg:mt-16 mt-10 prose max-w-7xl mx-auto">
          <?php the_content(); ?>
        </div>
      <?php }
    } ?>
</main>

<?php get_footer(); ?>