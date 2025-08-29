<div class="main-box lg:py-32 py-10">
    <div class="wrapper">
        <div class="w-full text-center text-white">
          <h2 class="lg:text-h2 md:text-h4 text-h5 uppercase">All Blog Posts</h2>

          <div class="lg:mt-16 mt-5 grid gap-6 grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
            <?php
              $flag = true;
              while(have_posts()) {
                the_post();
            ?>
            
            <div class="<?php echo $flag ? 'px-8 pt-12 pb-8 border-primary border-b-16' : 'px-8 py-12'; ?> bg-light-black w-full text-center lg:text-left hover:border-primary hover:border-b-16 hover:pb-8 hover:bg-lighter-black">
              <a href="<?php the_permalink(); ?>" class="hover:opacity-70">
                <h2 class="mt-4 text-h5 mb-4 uppercase"><?php the_title(); ?></h2>
              </a>
              <p class="opacity-78"><?php echo wp_trim_words(get_the_excerpt(), 12); ?></p>

              <span class="mt-12 block text-label-3">By <?php the_author(); ?></span>
              <span><?php echo get_the_date('l j F, Y'); ?></span>
            </div>

            <?php
              $flag = false;
              wp_reset_postdata();
              }
            ?>
          </div>
        </div>

        <div class="pagination">
        <?php
          echo paginate_links(array(
              'mid_size'  => 2,
              'prev_text' => __('« Previous'),
              'next_text' => __('Next »'),
              'type' => 'list'
          ));
          ?>
      </div>
    </div>
</div>