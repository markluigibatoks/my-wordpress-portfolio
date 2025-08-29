<div id="drawer" class="absolute top-0 bg-black w-full text-white h-0 overflow-hidden transition-all ease-in-out duration-700">
    <div class="main-box overflow-auto h-full">    
        <div class="wrapper">
            <nav class="pt-20">
                <ul class="flex flex-col gap-12">
                    <li>
                        <a class="block uppercase text-h5 tracking-tighter text-white hover:underline <?php echo is_front_page() ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/'); ?>">Home</a>
                    </li>
                    <li>
                        <a class="block uppercase text-h5 tracking-tighter text-white hover:underline <?php echo is_home() ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/portfolio'); ?>">Portfolio</a>
                    </li>
                    <li>
                        <a class="block uppercase text-h5 tracking-tighter text-white hover:underline <?php echo is_page('contact-me') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/contact-me'); ?>">Contact Me</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>