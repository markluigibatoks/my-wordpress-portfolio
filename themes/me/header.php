<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="z-10 sticky top-0">
      <div class="z-10 main-box bg-black">
        <div class="wrapper">
          <div class="py-3 lg:py-0 flex items-center justify-between">
            <a href="<?php echo site_url('/')?>">
              <div class="xl:pr-16 pr-6 text-white">
                <?php echo file_get_contents(get_template_directory() . '/assets/images/logo.svg'); ?>
              </div>
            </a>

            <nav class="hidden lg:block">
                <ul class="flex gap-12">
                    <li>
                      <a class="leading-20 uppercase text-label-2 tracking-normal font-light opacity-90 text-white hover:underline <?php echo is_front_page() ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/'); ?>">Home</a>
                    </li>
                    <li>
                      <a class="leading-20 uppercase text-label-2 tracking-normal font-light opacity-90 text-white hover:underline <?php echo is_home() ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/portfolio'); ?>">Portfolio</a>
                    </li>
                    <li>
                      <a class="leading-20 uppercase text-label-2 tracking-normal font-light opacity-90 text-white hover:underline <?php echo is_page('contact-me') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/contact-me'); ?>">Contact Me</a>
                    </li>
                </ul>
            </nav>
            <?php get_template_part('/partials/drawer-toggle') ?>
          </div>
        </div>
      </div>

      <?php get_template_part('/partials/drawer') ?>
    </header>