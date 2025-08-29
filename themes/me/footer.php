<footer class="main-box bg-black text-white py-16">
    <div class="wrapper">
      <div id="footer-body" class="flex flex-col sm:flex-row gap-10 justify-between">
        <div class="">
          <a id="footer-logo" href="<?php echo site_url('/')?>">
            <div class="">
                <?php echo file_get_contents(get_template_directory() . '/assets/images/logo.svg'); ?>
              </div>
          </a>

          <div id="copyright" class="lg:text-left text-center text-cap-2 mt-16 lg:mt-7">
            <p>Crafted with care.</p>
            <p>Thanks for visiting!</p>

            <div  class="mt-8 uppercase text-cap-2">
              &copy; <?php echo date('Y')?>. Portfolio v1.0.1
            </div>
          </div>
        </div>

        <div id="quicklinks" class="lg:mt-0 mt-10 flex gap-18">
          <div class="">
            <span>Quicklinks</span>
            <ul class="mt-5 text-cap-2">
              <li>
                <a class="uppercase hover:underline max-w-max opacity-78 <?php echo is_home() ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/portfolio'); ?>">Portfolio</a>
              </li>
              <li class="mt-6">
                <a class="uppercase hover:underline max-w-max opacity-78 <?php echo is_page('contact-me') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/contact-me'); ?>">Contact Me</a>
              </li>
            </ul>
          </div>
        </div>

        <div id="attribution" class="text-justify md:max-w-lg lg:max-w-xl">
          <p class="mb-5">
            This portfolio is a self-initiated project showcasing my front-end development skills.
            It's open source and feel free to explore the code! Always learning. Always building.
          </p>
          <p>
            Built with WordPress, styled using Tailwind CSS, and typeset with the Roboto Condensed font.
            Thanks to these amazing tools and communities for making this project possible.
          </p>
        </div>
      </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
