<?php
  $recent_blog = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 1,
    'post_status' => 'publish'
  ]);
?>

<main class="main-box lg:pt-20 pt-10">
    <div class="wrapper">
        <div class="w-full text-center text-white">
          <span class="text-label-2 uppercase">Portfolio</span>
          <h2 class="lg:text-h2 md:text-h4 text-h5 uppercase">Most Recent Post</h2>
        </div>

        <?php
          if($recent_blog->have_posts()) {
            while($recent_blog->have_posts()) {
              $recent_blog->the_post();
        ?>
        
        <div class="bg-[#0f0f0f] text-white lg:mt-16 mt-5 sm:p-14 p-3 grid grid-cols-1 lg:grid-cols-2 gap-5 sm:gap-12 w-full">
            <div class="max-w-max mx-auto w-full">
              <img class="object-cover w-full h-full" src="<?php echo get_the_post_thumbnail_url(null, 'featured-image'); ?>" alt="featured image"/>
            </div>
            <div class="place-content-center">
              <div class="uppercase text-label-2 text-left flex flex-col md:flex-row justify-between md:items-center">
                <span><?php echo get_the_date('l j F, Y'); ?></span>
                <span>By <?php the_author(); ?></span>
              </div>
              <h2 class="md:text-h4 md:mt-3 mt-2 text-h5 uppercase"><?php the_title(); ?></h2>
              <p class="opacity-78"><?php echo wp_trim_words(get_the_excerpt(), 30) ?></p>
              <a href="<?php the_permalink(); ?>" class="button-primary max-w-max block mt-8">Read More</a>
            </div>
        </div>
        
        <?php
            }
            wp_reset_postdata();
          }
        ?>
    </div>
</main>