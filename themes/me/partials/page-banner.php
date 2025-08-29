<div class="main-box p-0 w-full h-full relative">
  <img class="object-cover w-full h-full" src="<?php echo $args['image']['src']; ?>" alt="<?php echo $args['image']['alt'] ?>"/>

  <div class="main-box absolute left-0 top-0 h-full">
      <div class="wrapper flex items-center justify-center h-full">
          <div class="text-center bg-white/80 max-w-sm lg:max-w-xl w-full py-6 lg:py-10">
            <h2 class="lg:mt-4 uppercase align-top lg:text-h2 md:text-h4 text-h5"><?php echo $args['title']; ?></h2>

            <?php
              if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
              }
            ?>
          </div>
      </div>
  </div>
</div>

